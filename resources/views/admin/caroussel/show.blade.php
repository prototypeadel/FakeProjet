@extends('adminlte::page')

@section('title', 'show')

@section('content_header')
    <h1> Mes Projets</h1>
@stop

@section('content')
    <p> Projet numéro </p>

   <div>

            <p></p>
            <p>{{$caroussel->id}}</p>
            <div class="row">

<div class="col-3 ">

    <img src="{{Storage::disk('DiskImage')->url($caroussel->photo)}}" class="img-fluid" alt="tt">
</div>
            </div>
            

            {{-- <div class="row ">
                <div class="col-4">
                   <img src="{{Storage::disk('diskImageResize')->url($caroussels->image)}}" alt=""> 
                    
                </div>
            </div> --}}
            
           
       
   </div>
@stop