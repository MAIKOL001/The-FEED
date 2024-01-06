<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function firstPDFs()
    {
        $pdfs = File::where('course_id', 'inf/22')->get();

        return response()->json($pdfs);
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