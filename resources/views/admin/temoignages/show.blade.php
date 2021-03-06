@extends('adminlte::page')

@section('title', 'voir')

@section('content_header')
    <h1> Mes Services</h1>
@stop

@section('content')
 <div>
    <p>#{{$temoignage->id}}</p>
    <div class="d-flex">
        <label >Nom </label>
        <p > : {{$temoignage->nom}}</p> 
    </div>
    <div class="d-flex">
        <label >Prenom </label>
        <p > : {{$temoignage->prenom}}</p> 
    </div>
    <div class="d-flex">
        <label >Contenu  </label>
        <p class="">  : {{ $temoignage->contenu}}</p>
    </div>
        <div class="row mt-3 mb-2">
            <div class="col-3">
            <img src="{{Storage::disk('DiskImageTemoignages')->url($temoignage->image)}}"  class="img-fluid" alt="tt">
        </div>
    </div>
        <a href="{{route('temoignages.show', ['element' => $temoignage->id])}}" class="btn btn-success"> voir</a>
        <a href="{{route('temoignages.edit',['id'=>$temoignage->id])}}" class="btn btn-warning"> modifier</a>
        <form class="d-inline-flex" action="{{route('temoignages.destroy', [ 'id'=> $temoignage->id])}}" method="post">
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