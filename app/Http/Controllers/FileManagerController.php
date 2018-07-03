<?php

namespace App\Http\Controllers;

use App\FileFolder;
use Illuminate\Http\Request;

class FileManagerController extends Controller
{
    public function index()
    {
        $filefolders = FileFolder::with('files')->get();
        return view('filemanager.index', compact('filefolders'));
    }
}
