@extends('layout')

@section('title','Contact')
    

@section('content')
    <h1> @lang('Contact') </h1>

   
    <form action="{{ route('message.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nombre" value="{{ old('name') }}"><br>
        {!! $errors->first('name', '<small>:message</small>') !!}<br>

        <input type="text" name="email" placeholder="Email" value="{{ old('email') }}"><br>
        {!! $errors->first('email', '<small>:message</small>') !!}<br>

        <input name="subject" placeholder="Asunto" value="{{ old('subject') }}"><br>
        {!! $errors->first('subject', '<small>:message</small>') !!}<br>

        <textarea name="content" placeholder="Mensaje" cols="30" rows="10">{{ old('content') }}</textarea><br>
        {!! $errors->first('content', '<small>:message</small>') !!}<br>
        <button>Enviar</button>
    </form>
@endsection