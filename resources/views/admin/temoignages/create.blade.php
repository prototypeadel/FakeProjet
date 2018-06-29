@extends('adminlte::page')

@section('title', 'Caroussel')

@section('content_header')
<h1> creation service</h1>
@stop

@section('content')
   

    <form action="{{route('services.store')}}" method="post"  enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="tof" >titre </label>
            <input  class="form-control" id="tof" name="titre"  placeholder="entrée titre service">
         
        </div>
        <div class="form-group">
                <label for="tof" > contenu</label>
                <input  class="form-control" id="tof" name="contenu"  placeholder="entrée contenu service">
             
            </div>
        <div class="custom-file">
          <input type="file" class="custom-file-input" name="image" id="customFile">
          <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@stop