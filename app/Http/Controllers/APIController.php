<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class APIController extends Controller
{
    public function firstPDFs()
    {
         // Check if there is an authenticated user
    if ($user = Auth::user()) {
        
        // Get the authenticated user's course ID
        $userCourseId = $user->course_id;

        // Fetch PDFs based on the user's course ID
        $pdfs = File::where('course_id', $userCourseId)->get();

        return response()->json($pdfs);
    }

    // Handle the case where there is no authenticated user
    return response()->json(['error' => 'User not authenticated'], 401);
    }

    public function secondPDFs()
    {
        $pdfs2 = File::where('Course_id', 'inf/22')->get();

        return response()->json($pdfs2);
    }

    public function thirdPDFs()
    {
        $pdfs3 = File::where('Course_id', 'inf/22')->get();

        return response()->json($pdfs3);
    }

    public function fourthPDFs()
    {
        $pdfs4 = File::where('Course_id', 'inf/22')->get();

        return response()->json($pdfs4);
    }
}