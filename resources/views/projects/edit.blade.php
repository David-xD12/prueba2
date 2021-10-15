@extends('layout')

@section('title','editar proyecto')
    

@section('content')
    <h1>Editar un Proyecto</h1>
    
    @include('partials.validation-errors')
    <form action="{{ route('projects.update', $project) }}" method="POST">
        @csrf
        @method('PATCH')
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