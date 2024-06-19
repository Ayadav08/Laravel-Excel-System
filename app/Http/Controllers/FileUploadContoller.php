<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\ExcelData;
use App\Imports\DataImport;

class FileUploadController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx'
        ]);

        $path = $request->file('file')->store('temp');
        $data = Excel::toArray(new DataImport, $path);
        
        // Save data to the database
        ExcelData::create([
            'user_id' => auth()->id(),
            'data' => json_encode($data[0])
        ]);

        return redirect()->route('dashboard')->with('data', $data[0]);
    }
}