@extends('layouts.filemanager')

@section('title', 'folder overview')

@section('content')
    <main>
        <div class="container_block">
            <form class="container_block__form" action="#" method="POST">
                <input class="container_block__input" type="text" placeholder="name of folder">
                <input class="container_block__button" type="submit" value="add">
            </form>
        </div>

        <div class="container_block">
        @foreach ($filefolders as $filefolder)
            <div class="container_block__list_item">
                <span class="list_item__title">{{ $filefolder->title }}</span>
                <span class="list_item__count">{{ count($filefolder->files) }} files</span>
            </div>
        @endforeach
        </div>
    </main>

@endsection