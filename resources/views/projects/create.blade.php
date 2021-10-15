@extends('layout')

@section('title','Crear proyecto')
    

@section('content')
    <h1>Crear Proyecto</h1>

   
    @include('partials.validation-errors')
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
     <label for="">Ttitulo del proyecto <br>
         <input type="text"  name="title" value="{{ old('title', $project->title )}}">
     </label>
     <br>
     <label for="">Decripcion <br>
        <input type="textarea"  name="description" value="{{ old('description', $project->description ) }}">
    </label>
    <br>
    <button>Cuardar</button>
    </form>
@endsection