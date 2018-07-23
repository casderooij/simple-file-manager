<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/filemanager/filemanager.css') }}">

    <title>File Manager - @yield('title')</title>
</head>
<body>
    <nav class="navigation">
        <a class="navigation__link" href="{{ route('filemanager') }}">Filemanager</a>
        <form class="search-form" action="filemanager" method="POST">
            {{ csrf_field() }}
            <input class="search-form__input" type="text" name="filter" autocomplete="off">
            <input class="search-form__submit" type="submit" value="search folder">
            <a href="{{ route('filemanager') }}" class="search-form__reset">reset</a>
        </form>
        <div class="navigation__title navigation__title--bold">@yield('title')</div>
    </nav>
    <main class="main_container">
        @yield('content')
    </main>
</body>
</html>