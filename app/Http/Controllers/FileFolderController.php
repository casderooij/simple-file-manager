<?php

namespace App\Http\Controllers;

use App\FileFolder;
use Illuminate\Http\Request;

class FileFolderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filefolders = FileFolder::with('files')->get();
        return view('filemanager.index', compact('filefolders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FileFolder  $fileFolder
     * @return \Illuminate\Http\Response
     */
    public function show(FileFolder $fileFolder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FileFolder  $fileFolder
     * @return \Illuminate\Http\Response
     */
    public function edit(FileFolder $fileFolder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FileFolder  $fileFolder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FileFolder $fileFolder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FileFolder  $fileFolder
     * @return \Illuminate\Http\Response
     */
    public function destroy(FileFolder $fileFolder)
    {
        //
    }
}