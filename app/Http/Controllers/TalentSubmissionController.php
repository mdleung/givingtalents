<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TalentSubmission;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;
use Google\Client as GoogleClient;
use Google\Service\Gmail;
use Google\Service\Gmail\Message;

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
        
        // Send email notification
        $this->sendEmailNotification($submission);
        
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
    
    private function sendEmailNotification($submission)
    {
        try {
            $client = app(GoogleClient::class);
            $service = new Gmail($client);

            $messageContent = "New talent submission received:\n\n" .
                              "Name: {$submission->name}\n" .
                              "Talent: {$submission->talent_description}\n" .
                              "Comments: {$submission->comments}\n" .
                              "Submitted at: {$submission->created_at}";

            $mime = "MIME-Version: 1.0\r\n";
            $mime .= "From: " . config("mail.from.address") . "\r\n";
            $mime .= "To: email@beyondtheconversation.ca\r\n";
            $mime .= "Subject: New Talent Submission\r\n";
            $mime .= "Content-Type: text/plain; charset=UTF-8\r\n";
            $mime .= "Content-Transfer-Encoding: base64\r\n\r\n";
            $mime .= base64_encode($messageContent);

            $message = new Message();
            $message->setRaw(strtr(base64_encode($mime), 
                                   array(
                                       '+' => '-',
                                       '/' => '_'
                                   )));

            $service->users_messages->send("me", $message);

        } catch (\Exception $e) {
            // Log error but don't fail the submission
            \Log::error("Failed to send email notification: " . $e->getMessage());
        }
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
