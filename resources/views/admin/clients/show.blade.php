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
    <p>#{{$client->id}}</p>
    <p>nom company :{{$client->name}}</p>
</div>
<div>
 <p>company: {{$client->company}}</p> 
    
</div>

<a href="{{route('clients.show', ['element' => $client->id])}}" class="btn btn-success"> voir</a>
<a href="{{route('clients.edit',['id'=>$client->id])}}" class="btn btn-warning"> modifier</a>
<form class="d-inline-flex" action="{{route('clients.destroy', [ 'id'=> $client->id])}}" method="post">
@csrf
@method('DELETE')
    <button type='submit' class="btn btn-danger"> supprimer </button>
</form>
</div>
@endsection