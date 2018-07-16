@extends('adminlte::page')

@section('title', 'Role')

@section('content_header')
    
@stop

@section('content')
    <h1> crée roles</h1>

    <form action="{{route('roles.store')}}" method="post" >
        @csrf
        <div class="form-group">
            <label for="cat" > Titre</label>
            <input  class="form-control" id="cat" name="name"  placeholder="entrée titre">
        </div>
        <div class="form-group">
            <label for="cat" > Titre</label>
            <input  class="form-control" id="cat" name="slug"  placeholder="entrée contenu">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@stop