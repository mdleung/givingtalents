<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TalentSubmission;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class TalentSubmissionController extends Controller
{
    public function index()
    {
        // Get all talent submissions ordered by newest first
        $submissions = TalentSubmission::orderBy('created_at', 'desc')->get();
        
        return view('talent-submissions.index', compact('submissions'));
    }
    
    public function store(Request $request)
    {
        // Rate limiting for spam prevention
        $key = 'talent-submission:' . $request->ip();
        
        if (RateLimiter::tooManyAttempts($key, 3)) {
            $seconds = RateLimiter::availableIn($key);
            throw ValidationException::withMessages([
                'rate_limit' => "Too many submissions. Please try again in {$seconds} seconds."
            ]);
        }
        
        // Validate the request
        $validated = $request->validate([
            'name' => 'nullable|string|max:255|min:2',
            'talent_description' => 'required|string|max:1000|min:10',
            'comments' => 'nullable|string|max:500',
        ]);
        
        // Additional spam prevention - check for suspicious patterns
        if ($this->isSpam($validated)) {
            RateLimiter::hit($key, 300); // Block for 5 minutes
            throw ValidationException::withMessages([
                'spam' => 'Your submission appears to be spam. Please try again later.'
            ]);
        }
        
        // Create the submission
        // Handle empty name by setting a default value
        if (empty($validated['name'])) {
            $validated['name'] = 'Anonymous';
        }
        
        $submission = TalentSubmission::create($validated);
        
        // Clear rate limiter on successful submission
        RateLimiter::clear($key);
        
        return redirect()->back()->with('success', 'Thank you for sharing your talent! Your submission has been added to the board.');
    }
    
    private function isSpam($data)
    {
        // Simple spam detection
        $spamKeywords = ['viagra', 'casino', 'lottery', 'click here', 'free money', 'make money fast'];
        $text = strtolower($data['name'] . ' ' . $data['talent_description'] . ' ' . ($data['comments'] ?? ''));
        
        foreach ($spamKeywords as $keyword) {
            if (strpos($text, $keyword) !== false) {
                return true;
            }
        }
        
        // Check for excessive repetition
        if (substr_count($text, substr($text, 0, 10)) > 3) {
            return true;
        }
        
        return false;
    }
    
    public function destroy($id)
    {
        try {
            $submission = TalentSubmission::findOrFail($id);
            $submission->delete();
            
            return redirect()->back()->with('success', 'Talent submission has been removed from the board.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Unable to delete the submission. Please try again.');
        }
    }
}
