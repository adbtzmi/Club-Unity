<?php

// app/Http/Controllers/ApplicationController.php
namespace App\Http\Controllers;
use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function list()
    {
        // Assuming you have a model named Application to fetch the data
        $applications = Application::all();
        return view('admin.application.list', compact('applications'));
    }

    // Other methods like add, insert, edit, update, delete
}

