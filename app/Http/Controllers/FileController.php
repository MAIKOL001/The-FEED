<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\File;

class FileController extends Controller
{
    public function download($id)
    {
        // Find the file by ID
        $file = File::findOrFail($id);

        // Get the file's path
        $filePath = storage_path('app/public/' . $file->path); // Adjust 'path' as per your file structure

        // Check if the file exists
        if (!Storage::disk('public')->exists($file->path)) {
            abort(404);
        }

        // Return the file as a downloadable response
        return response()->download($filePath, $file->name);
    }
}
