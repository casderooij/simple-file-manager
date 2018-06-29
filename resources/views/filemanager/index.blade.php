@extends('layouts.filemanager')

@section('title', 'folder overview')

@section('content')
    <main>
        <div>
            <form class="inputContainer" action="#" method="POST">
                <input class="inputContainer__input" type="text" placeholder="name of folder">
                <input class="inputContainer__button" type="submit" value="add">
            </form>
        </div>










        @foreach ($filefolders as $filefolder)
            <div class="filefolder-container">
                <div class="filefolder">

                </div>
                <p>{{ $filefolder->title }}</p>
                {{ count($filefolder->files) }} files
            </div>
        @endforeach
    </main>

@endsection