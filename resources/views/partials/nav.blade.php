<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        .active a {
            color:#ff0000;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li class="{{ setActive('home') }}"><a href="{{ route('home')}}">{{ __('Home')}}</a></li>  {{--  setActive es una funcion que se encuentra en helpers --}}
            <li class="{{ setActive('about') }}"><a href="{{ route('about')}}">{{ __('About')    }}</a></li>
            <li class="{{ setActive('projects.*') }}"><a href="{{ route('projects.index')}}">{{ __('Project')}}</a></li>
            <li class="{{ setActive('contact') }}"><a href="{{ route('contact')}}">{{ __('Contact')}}</a></li> 
        </ul>
    </nav>
    
</body>
</html>