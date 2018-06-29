@extends('adminlte::page')

@section('title', 'voir')

@section('content_header')
    <h1> Mes projets</h1>
@stop

@section('content')
 <div>
    <p>#{{$projet->id}}</p>
    <div class="d-flex">
        <label >Titre  </label>
        <p > : {{$projet->titre}}</p> 
    </div>
    <div class="d-flex">
        <label >Contenu  </label>
        <p class="">  : {{ $projet->contenu}}</p>
    </div>
        <div class="row mt-3 mb-2">
            <div class="col-3">
            <img src="{{Storage::disk('DiskImageProjets')->url($projet->image)}}"  class="img-fluid" alt="tt">
        </div>
    </div>
        <a href="{{route('projets.show', ['element' => $projet->id])}}" class="btn btn-success"> voir</a>
        <a href="{{route('projets.edit',['id'=>$projet->id])}}" class="btn btn-warning"> modifier</a>
        <form class="d-inline-flex" action="{{route('projets.destroy', [ 'id'=> $projet->id])}}" method="post">
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