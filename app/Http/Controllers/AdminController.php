<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TalentSubmission;

class AdminController extends Controller
{
    public function index()
    {
        // Get all talent submissions including soft deleted ones, ordered by newest first with pagination
        $submissions = TalentSubmission::withTrashed()->orderBy('created_at', 'desc')->paginate(20);
        
        return view('admin.index', compact('submissions'));
    }
    
    public function show($id)
    {
        // Show detailed view of a specific submission including soft deleted ones
        $submission = TalentSubmission::withTrashed()->findOrFail($id);
        
        return view('admin.show', compact('submission'));
    }
    
    public function destroy($id)
    {
        try {
            $submission = TalentSubmission::withTrashed()->findOrFail($id);
            
            if ($submission->trashed()) {
                // If already soft deleted, permanently delete
                $submission->forceDelete();
                $message = 'Talent submission has been permanently deleted.';
            } else {
                // Soft delete
                $submission->delete();
                $message = 'Talent submission has been moved to trash.';
            }
            
            return redirect()->route('admin.index')->with('success', $message);
        } catch (\Exception $e) {
            return redirect()->route('admin.index')->with('error', 'Unable to delete the submission. Please try again.');
        }
    }
    
    public function restore($id)
    {
        try {
            $submission = TalentSubmission::withTrashed()->findOrFail($id);
            
            if ($submission->trashed()) {
                $submission->restore();
                return redirect()->route('admin.index')->with('success', 'Talent submission has been restored successfully.');
            } else {
                return redirect()->route('admin.index')->with('info', 'Submission is already active.');
            }
        } catch (\Exception $e) {
            return redirect()->route('admin.index')->with('error', 'Unable to restore the submission. Please try again.');
        }
    }
}
