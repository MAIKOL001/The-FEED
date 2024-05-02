<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Log;


class UploadController extends Controller
{
    //
    public function index()
    {
        return view('upload');
    }

   


    public function store(Request $request)
    {
        try {
            $messages = [
                'required' => 'Please select file to upload',
                'max' => 'The file size must not exceed 10 MB.',
                'cat_name.required' => 'Cat name is required for "Cat" category.',  // Custom message for cat_name
                'cat_due_date.required' => 'Due date is required for "Cat" category.', // Custom message for cat_due_date
            ];
    
            // Check if any files have been uploaded
            if (!$request->hasFile('file')) {
                return redirect('/upload')->with('error', 'Please select file to upload');
            }
    
            // Validate the files and additional fields
            $this->validate($request, [
                'file.*' => 'file|max:9045240|mimes:pptx,doc,docx,pdf', // Maximum file size is 10 MB and allowed formats are pptx, doc, docx, and pdf
                'cat_name' => ($request->category === 'cat') ? 'required|string|max:255' : 'nullable', // Required if category is "cat"
                'due_date' => ($request->category === 'cat') ? 'required|date' : 'nullable', // Required if category is "cat"
            ], $messages);
            
    
            foreach ($request->file as $file) {
                
                $filename = time() . '_' . $file->getClientOriginalName();
                $filesize = $file->getSize();
                $file->storeAs('public/', $filename);
    
                $fileModel = new File;
                $fileModel->name = $filename;
                $fileModel->size = $filesize;
                $fileModel->location = 'storage/' . $filename;
                $fileModel->semester = $request->semester;
                $fileModel->category = $request->category;
                $fileModel->year = $request->year;
                $fileModel->unit_code = $request->unit_code;
                $fileModel->unit_name = $request->unit_name;
                $fileModel->cat_name = $request->cat_name;
                $fileModel->due_date = $request->due_date;
                $fileModel->course_id = $request->course_id;
                
                $fileModel->save();
            }
            
            return redirect('/upload')->with('success', 'File/s Uploaded Successfully');
            // dd($request->all());

        } catch (\Exception $e) {
            // Handle the exception and redirect with an error message
            return redirect('/upload')->with('error', 'Error uploading files: ' . $e->getMessage());
        }

        
    }
    

   

public function unitcode()
{
    // Fetch unique unit codes from the files table
    $unitCodes = File::distinct()->pluck('unit_code');

    return view('upload', ['unitCodes' => $unitCodes]);
}

}