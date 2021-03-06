@extends('adminlte::page')

@section('title', 'voir')

@section('content_header')
    <h1> Mes Services</h1>
@stop

@section('content')
 <div>
    <p>#{{$service->id}}</p>
    <div class="d-flex">
        <label >Titre  </label>
        <p > : {{$service->titre}}</p> 
    </div>
    <div class="d-flex">
        <label >Contenu  </label>
        <p class="">  : {{ $service->contenu}}</p>
    </div>
        <div class="row mt-3 mb-2">
            <div class="col-3">
            <img src="{{Storage::disk('DiskImageService')->url($service->image)}}"  class="img-fluid" alt="tt">
        </div>
    </div>
        <a href="{{route('services.show', ['element' => $service->id])}}" class="btn btn-success"> voir</a>
        <a href="{{route('services.edit',['id'=>$service->id])}}" class="btn btn-warning"> modifier</a>
        <form class="d-inline-flex" action="{{route('services.destroy', [ 'id'=> $service->id])}}" method="post">
        @csrf
        @method('DELETE')
            <button type='submit' class="btn btn-danger"> supprimer </button>
        </form>
    </div>
        

        {{-- <div class="row ">
            <div class="col-4">
                <img src="{{Storage::disk('diskImageResize')->url($caroussels->image)}}" alt=""> 
                
            </div>
        </div> --}}
        
        
    
</div>
@stop