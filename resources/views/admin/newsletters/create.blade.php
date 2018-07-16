@extends('adminlte::page')

@section('title', 'newsletter')

@section('content_header')
    
@stop

@section('content')
    <h1> crée email</h1>

    <form action="{{route('newsletters.store')}}" method="post" >
        @csrf
        <div class="form-group">
            <label for="cat" > Nom de l email</label>
            <input  class="form-control" id="cat" name="email"  placeholder="entrée categorie">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@stop