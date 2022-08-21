<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class Administrator extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        return view('admin.home', compact('setting'));
    }

    
}
