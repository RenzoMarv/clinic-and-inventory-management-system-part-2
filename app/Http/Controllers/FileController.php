<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{

    public function downloadMCF()
    {
        // Define the path to the file
        $path = public_path('downloadables/'.'Medical_Consultation_Form.xlsx'); // Adjust the path as needed

        // Check if the file exists
        if (!file_exists($path)) {
            abort(404); // Return a 404 response if the file doesn't exist
        }

        // Return the file as a download response
        return response()->download($path);
    }

    public function downloadMEF()
    {
        // Define the path to the file
        $path = public_path('downloadables/'.'Medical_Examination_Form.xlsx'); // Adjust the path as needed

        // Check if the file exists
        if (!file_exists($path)) {
            abort(404); // Return a 404 response if the file doesn't exist
        }

        // Return the file as a download response
        return response()->download($path);
    }
    
}
