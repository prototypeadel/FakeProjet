@extends('adminlte::page')

@section('title', 'Caroussel')

@section('content_header')
<h1> Creation Temoignage</h1>
@stop

@section('content')
   

    <form action="{{route('temoignages.store')}}" method="post"  enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="tof" >Nom </label>
            <input  class="form-control" id="tof" name="nom"  placeholder="entrée nom ">
         
        </div>
        <div class="form-group">
            <label for="tof" >Prénom </label>
            <input  class="form-control" id="tof" name="prenom"  placeholder="entrée prenom ">
         
        </div>
        <div class="form-group">
                <label for="tof" > contenu</label>
                <input  class="form-control" id="tof" name="contenu"  placeholder="entrée contenu ">
             
            </div>
        <div class="custom-file">
          <input type="file" class="custom-file-input" name="image" id="customFile">
          <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@stop