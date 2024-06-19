<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExcelData;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // Fetch the latest uploaded data for the authenticated user
        $latestData = ExcelData::where('user_id', auth()->id())->latest()->first();
        $data = $latestData ? json_decode($latestData->data, true) : null;

        // Check if there is session data for preview
        if ($request->session()->has('data')) {
            $data = $request->session()->get('data');
        }

        return view('dashboard', ['data' => $data]);
    }
}