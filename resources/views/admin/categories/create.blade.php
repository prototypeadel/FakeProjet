@extends('adminlte::page')

@section('title', 'Caroussel')

@section('content_header')
    
@stop

@section('content')
    <h1> crée categorie</h1>

    <form action="{{route('categories.store')}}" method="post" >
        @csrf
        <div class="form-group">
            <label for="cat" > Nom de la categorie</label>
            <input  class="form-control" id="cat" name="name"  placeholder="entrée categorie">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@stop