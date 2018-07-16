@extends('adminlte::page')

@section('title', 'Categories')

@section('content_header')
    <h1> Mes Categories</h1>
@stop

@section('content')
    <div>
            <a href="{{route('clients.create')}}" class="btn btn-success"> ajouter une client</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col"> name</th>
                <th scope="col"> company</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            <tbody>
                {{-- sa sest compact --}}
                @foreach($clients as $element)
              <tr>
                <td scope="row">{{$loop->iteration}} </td>
                <td> {{$element->name}}</td>
                <td> {{$element->company}}</td>
              <td>  
                <a href="{{route('clients.show', ['element' => $element->id])}}" class="btn btn-success"> voir</a>
                <a href="{{route('clients.edit',['id'=>$element->id])}}" class="btn btn-warning"> modifier</a>
                <form class="d-inline-flex" action="{{route('clients.destroy', [ 'id'=> $element->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                <button type='submit' class="btn btn-danger"> supprimer </button>
                </form>
             </td>
            </tr>
            @endforeach
            </tbody>
            </table>
            </div>
           @stop
              
            
               {{-- //                    projets= url dans web.php resource et show sest la fonction --}}