@extends('adminlte::page')

@section('title', 'Categories')

@section('content_header')
    <h1> Mes Categories</h1>
@stop

@section('content')
    <div>
            <a href="{{route('newsletters.create')}}" class="btn btn-success"> ajouter un email</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">nom de l email</th>     
                <th scope="col">action</th>
              </tr>
            </thead>
            <tbody>
                {{-- sa sest compact --}}
                @foreach($newsletters as $element)
              <tr>
                <td scope="row">{{$loop->iteration}} </td>
                <td> {{$element->email}}</td>
              <td>  
                <a href="{{route('newsletters.show', ['element' => $element->id])}}" class="btn btn-success"> voir</a>
                <a href="{{route('newsletters.edit',['id'=>$element->id])}}" class="btn btn-warning"> modifier</a>
                <form class="d-inline-flex" action="{{route('newsletters.destroy', [ 'id'=> $element->id])}}" method="post">
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