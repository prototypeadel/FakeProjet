@extends('adminlte::page')

@section('title', 'voir')

@section('content_header')
    <h1> Mes Images</h1>
@stop

@section('content')
     
<div>
    <p>{{$caroussel->id}}</p>
    <div class="row">
        <div class="col-3 ">
            <img src="{{Storage::disk('DiskImage')->url($caroussel->photo)}}" class="img-fluid" alt="tt">
        </div>
    </div>
</div>

<a href="{{route('caroussels.show', ['element' => $caroussel->id])}}" class="btn btn-success"> voir</a>
<a href="{{route('caroussels.edit',['id'=>$caroussel->id])}}" class="btn btn-warning"> modifier</a>
<form class="d-inline-flex" action="{{route('caroussels.destroy', [ 'id'=> $caroussel->id])}}" method="post">
@csrf
@method('DELETE')
    <button type='submit' class="btn btn-danger"> supprimer </button>
</form>
</div>
@stop            

            {{-- <div class="row ">
                <div class="col-4">
                   <img src="{{Storage::disk('diskImageResize')->url($caroussels->image)}}" alt=""> 
                    
                </div>
            </div> --}}
            
           
       
