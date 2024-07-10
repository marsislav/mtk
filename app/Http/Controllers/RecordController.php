<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function index()  // Show table
{
    $records = \App\Models\Record::all(); 
    return view('records.index', compact('records'));
}
}
