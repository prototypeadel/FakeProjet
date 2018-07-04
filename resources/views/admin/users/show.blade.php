@extends('adminlte::page')

@section('title', 'voir')

@section('content_header')
    <h1> Mes users</h1>
@stop

@section('content')
 <div>
    <p>#{{$user->id}}</p>
    <div class="d-flex">
        <label >Nom </label>
        <p > : {{$user->name}}</p> 
    </div>
    <div class="d-flex">
        <label >email </label>
        <p class="">  : {{ $user->email}}</p>
    </div>
    <div class="d-flex">
        <label > role </label>
        <p class="">  : {{ $user->role->name}}</p>
    </div>
        <div class="row mt-3 mb-2">
            <div class="col-3">
            <img src="{{Storage::disk('DiskImageUsers')->url($user->image)}}"  class="img-fluid" alt="tt">
        </div>
    </div>
        <a href="{{route('users.show', ['element' => $user->id])}}" class="btn btn-success"> voir</a>
        <a href="{{route('users.edit',['id'=>$user->id])}}" class="btn btn-warning"> modifier</a>
        <form class="d-inline-flex" action="{{route('users.destroy', [ 'id'=> $user->id])}}" method="post">
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