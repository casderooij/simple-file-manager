<?php

namespace App\Http\Controllers;

use App\FileFolder;
use Illuminate\Http\Request;

class FileManagerController extends Controller
{
    public function index(Request $request)
    {
        $filefolders = FileFolder::with('files')->orderBy('created_at', 'DESC')->get();
        return view('filemanager.index', compact('filefolders'));
    }

    public function filter(Request $request)
    {
        $filefolders = FileFolder::with('files')->where('title', 'LIKE', '%' . $request->filter . '%')->orderBy('title', 'ASC')->get();
        return view('filemanager.index', compact('filefolders'));
    }
}
