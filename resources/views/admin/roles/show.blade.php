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
    <p>#{{$role->id}}</p>
    <p> titre  :{{$role->name}}</p>
</div>
<div>
    {{-- <p>{{$role->slug}}</p> --}}
    
</div>

<a href="{{route('roles.show', ['element' => $role->id])}}" class="btn btn-success"> voir</a>
<a href="{{route('roles.edit',['id'=>$role->id])}}" class="btn btn-warning"> modifier</a>
<form class="d-inline-flex" action="{{route('roles.destroy', [ 'id'=> $role->id])}}" method="post">
@csrf
@method('DELETE')
    <button type='submit' class="btn btn-danger"> supprimer </button>
</form>
</div>
@endsection