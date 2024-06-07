<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\File;
use Illuminate\Support\Facades\Auth;



class FileController extends Controller
{
    public function download($id)
{
    // Find the file by ID
    $file = File::findOrFail($id);

    // Get the file's full path
    $filePath = storage_path( $file->location);

    // Check if the file exists
    if (!Storage::disk('public')->exists($file->location)) {
        abort(404);
    }

    // Return the file as a downloadable response
    return response()->download($filePath, explode('_', $file->name, 2)[1]);

}

public function search(Request $request)
{
    // Get the authenticated user's course ID
    $courseId = Auth::user()->course_id;
    
 
    // Retrieve the search query from the request
    $query = $request->input('query');

    // Perform the search within files table for the user's course ID
    $results = File::where('course_id', $courseId)
                    ->where(function ($queryBuilder) use ($query) {
                        $queryBuilder->where('unit_name', 'LIKE', "%$query%")
                                     ->orWhere('unit_code', 'LIKE', "%$query%");
                    })
                    ->get();
// dd($results);
    return view('results', compact('results'));
}

public function index()
{
    return View('results');
}

public function showing()
{
    return View('show');
}

public function show($unitCode)
{
    // Retrieve PDFs for the selected unit code
    $file = File::where('unit_code', $unitCode)->get();
// dd($file);
    // Pass the retrieved PDFs to the show view
    return view('show', ['files' => $file]);
}



public function destroy($id)
{
    
    $file = File::findOrFail($id);
    
    // Delete the file from the server if it exists
    if (Storage::disk('public')->exists($file->location)) {
        Storage::disk('public')->delete($file->location);
    }

    // Delete the file from the database
    $file->delete();

    return redirect()->back()->with('success', 'File deleted successfully.');
}


}
