@extends('adminlte::page')

@section('title', 'voir')

@section('content_header')
    <h1> Categorie</h1>
@stop

@section('content')
    <pre>
        {{-- {{var_dump($categorie->id)}} --}}
    </pre>
<div>
    <p>#{{$categorie->id}}</p>
    <p>nom caretgorie :{{$categorie->name}}</p>
</div>
<div>
    {{-- <p>{{$categorie->nom}}</p> --}}
    
</div>

<a href="{{route('categories.show', ['element' => $categorie->id])}}" class="btn btn-success"> voir</a>
<a href="{{route('categories.edit',['id'=>$categorie->id])}}" class="btn btn-warning"> modifier</a>
<form class="d-inline-flex" action="{{route('categories.destroy', [ 'id'=> $categorie->id])}}" method="post">
@csrf
@method('DELETE')
    <button type='submit' class="btn btn-danger"> supprimer </button>
</form>
</div>
@endsection