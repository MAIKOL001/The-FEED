<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\File;
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
            ];
    
            $this->validate($request, [
                'file' => 'required',
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
                $fileModel->course_id = $request->course_id;
                $fileModel->save();
            }
    
            return redirect('/upload')->with('success', 'File/s Uploaded Successfully');
        } catch (\Exception $e) {
            // Handle the exception and redirect with an error message
            return redirect('/upload')->with('error', 'Error uploading files: ' . $e->getMessage());
        }
    }
}