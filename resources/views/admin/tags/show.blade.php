@extends('adminlte::page')

@section('title', 'voir')

@section('content_header')
    <h1> Mes tags</h1>
@stop

@section('content')
     
<div>
        <p>#{{$tag->id}}</p>
    <p>{{$tag->name}}</p>

</div>

<a href="{{route('tags.show', ['element' => $tag->id])}}" class="btn btn-success"> voir</a>
<a href="{{route('tags.edit',['id'=>$tag->id])}}" class="btn btn-warning"> modifier</a>
<form class="d-inline-flex" action="{{route('tags.destroy', [ 'id'=> $tag->id])}}" method="post">
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
            
           
       
