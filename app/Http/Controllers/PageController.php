<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TalentSubmission;

class PageController extends Controller
{
    public function home()
    {
        // Get all talent submissions ordered by newest first for the home page
        $submissions = TalentSubmission::orderBy('created_at', 'desc')->get();
        
        return view('pages.home', compact('submissions'));
    }
    
    public function contact()
    {
        return view('pages.contact');
    }
    
    public function socialEvents()
    {
        return view('pages.social-events');
    }
    
    public function visionMission()
    {
        return view('pages.vision-mission');
    }
}

