@extends('adminlte::page')

@section('title', 'voir')

@section('content_header')
    <h1> Commentaires</h1>
@stop

@section('content')
    <pre>
        {{-- {{var_dump($commentaire->id)}} --}}
    </pre>
<div>
    <p>#{{$client->id}}</p>
    <p> titre commentaire :{{$commentaire->titre}}</p>
</div>
<div>
    {{-- <p>{{$commentaire->contenu}}</p> --}}
    
</div>

<a href="{{route('commentaires.show', ['element' => $commentaire->id])}}" class="btn btn-success"> voir</a>
<a href="{{route('commentaires.edit',['id'=>$commentaire->id])}}" class="btn btn-warning"> modifier</a>
<form class="d-inline-flex" action="{{route('commentaires.destroy', [ 'id'=> $commentaire->id])}}" method="post">
@csrf
@method('DELETE')
    <button type='submit' class="btn btn-danger"> supprimer </button>
</form>
</div>
@endsection