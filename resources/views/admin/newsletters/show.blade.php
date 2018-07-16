@extends('adminlte::page')

@section('title', 'voir')

@section('content_header')
    <h1> Categorie</h1>
@stop

@section('content')
    <pre>
        <!-- {{-- {{var_dump($categorie->id)}} --}} -->
    </pre>
<div>
    <p>#{{$newsletter->id}}</p>
    <p>nom email :{{$newsletter->email}}</p>
</div>
<div>
    <!-- {{-- <p>{{$categorie->nom}}</p> --}} -->
    
</div>

<a href="{{route('newsletters.show', ['element' => $newsletter->id])}}" class="btn btn-success"> voir</a>
<a href="{{route('newsletters.edit',['id'=>$newsletter->id])}}" class="btn btn-warning"> modifier</a>
<form class="d-inline-flex" action="{{route('newsletters.destroy', [ 'id'=> $newsletter->id])}}" method="post">
@csrf
@method('DELETE')
    <button type='submit' class="btn btn-danger"> supprimer </button>
</form>
</div>
@endsection