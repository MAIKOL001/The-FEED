<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
class DashboardController extends Controller
{
    //
   
    public function home()
    {
        // Fetch all files, filtered by year and semester
        // $files = File::where('year', 1)  // Filter for first year
        //             ->where('semester', 1) // Filter for first semester
        //             ->get();
        $files = File::get();
        $uniqueUnitCodes = $files->unique('unit_code')->pluck('unit_code');
        // Fetch only the first file for each unique unit_code
        $filteredFiles = $files->filter(function ($file) use ($uniqueUnitCodes) {
            return in_array($file->unit_code, $uniqueUnitCodes->all());
        });
    
        return view('dashboard')->with('files', $filteredFiles);
    }

    public function index()
    {
        return View('dashboard');
    }
}
