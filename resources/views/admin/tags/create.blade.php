@extends('adminlte::page')

@section('title', 'Tags')

@section('content_header')

@stop

@section('content')
    <h1> Tags</h1>

    <form action="{{route('tags.store')}}" method="post"  enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="tof" > nom Tag</label>
            <input  class="form-control" id="tof" name="name"  placeholder="entrée nom photo">
         
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@stop