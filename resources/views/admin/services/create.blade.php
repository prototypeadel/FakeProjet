@extends('adminlte::page')

@section('title', 'Caroussel')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h1> Tes Images Caroussel</h1>

    <form action="{{route('services.store')}}" method="post"  enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="tof" > nom de la photo</label>
            <input  class="form-control" id="tof" name="name"  placeholder="entrée nom photo">
         
        </div>
        
        <div class="custom-file">
          <input type="file" class="custom-file-input" name="photo" id="customFile">
          <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@stop