@extends('adminlte::page')

@section('title', 'Caroussel')

@section('content_header')
    
@stop

@section('content')
    <h1> crée client</h1>

    <form action="{{route('clients.store')}}" method="post" >
        @csrf
        <div class="form-group">
            <label for="cat" > Titre</label>
            <input  class="form-control" id="cat" name="name"  placeholder="entrée nom client">
        </div>
        <div class="form-group">
            <label for="cat" > Titre</label>
            <input  class="form-control" id="cat" name="company"  placeholder="entrée company">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@stop