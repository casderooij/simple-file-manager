@extends('layouts.filemanager-overview')

@section('title', 'folder overview')

@section('content')

    <div class="filemanager_container">

        <form class="folder_form" action="filefolder" method="POST">
            {{ csrf_field() }}
            <input class="folder_form__input" type="text" name="title">
            <input class="folder_form__button" type="submit" value="add">
        </form>

        <div class="folder_list">
        @foreach ($filefolders as $filefolder)
            <a href="{{ route('filefolder', ['id' => $filefolder->id]) }}" class="list_item">
                <span class="list_item__title">{{ $filefolder->title }}</span>
                <span class="list_item__count">{{ count($filefolder->files) }} files</span>
            </a>
        @endforeach
        </div>

    </div>

@endsection