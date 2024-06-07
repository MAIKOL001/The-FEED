<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class DashboardController extends Controller
{
    //
   
    public function index()
    {
        return View('dashboard');
    }

    public function home()
    {

        if ($user = Auth::user()) {
        
            // Get the authenticated user's course ID
            $userCourseId = $user->course_id;
    
            // Fetch PDFs based on the user's course ID
          
     
        $files = File::where('course_id', $userCourseId)->get();
        }
        // Extract unique unit codes
        $uniqueUnitCodes = $files->unique('unit_code')->pluck('unit_code');
        
        // Fetch unit names for unique unit codes
        $unitNames = File::whereIn('unit_code', $uniqueUnitCodes)->pluck('unit_name', 'unit_code');
    
        // Filter files and include $unitName
        $filteredFiles = $files->filter(function ($file) use ($uniqueUnitCodes) {
            return in_array($file->unit_code, $uniqueUnitCodes->all());
        });
    
        return view('dashboard')->with('files', $filteredFiles)->with('unitNames', $unitNames);
    }
    

    

    public function showPdfs(Request $request)
{
    // Retrieve the unit code and ID from the query parameters
    $unitCode = $request->input('unit_code');
    $unitName=$request->input('unit_name');

    
    

    // Retrieve the PDFs associated with the selected unit code and ID
    $files = File::where('unit_code', $unitCode)
               ->get();
              
    // Pass the PDFs data to the Blade view
    return view('2ndyear', compact('files'));
}


}
