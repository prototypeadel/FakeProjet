@extends('adminlte::page')

@section('title', 'Caroussel')

@section('content_header')
    
@stop

@section('content')
    <h1> crée commentaire</h1>

    <form action="{{route('commentaires.store')}}" method="post" >
        @csrf
        <div class="form-group">
            <label for="cat" > Titre</label>
            <input  class="form-control" id="cat" name="titre"  placeholder="entrée titre">
        </div>
        <div class="form-group">
            <label for="cat" > Titre</label>
            <input  class="form-control" id="cat" name="contenu"  placeholder="entrée contenu">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@stop