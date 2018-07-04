@extends('adminlte::page')

@section('title', 'Caroussel Image')

@section('content_header')
    <h1> Mes tags</h1>
@stop

@section('content')
    <p> Tags </p>  
    <div>
            <a href="{{route('tags.create')}}" class="btn btn-success"> ajouter une photo carrousel</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">nom</th>
                <th scope="col">id</th>
                <th>action</th>
              </tr>
            </thead>
            <tbody>
                
                @foreach($tags as $element)
              <tr>
                <td scope="row">{{$loop->iteration}} </td>
                <td> {{$element->name}}</td>
                <td> {{$element->id}}</td>
              <td>  
                <a href="{{route('tags.show', ['element' => $element->id])}}" class="btn btn-success"> voir</a>
                <a href="{{route('tags.edit',['id'=>$element->id])}}" class="btn btn-warning"> modifier</a>
                <form class="d-inline-flex" action="{{route('tags.destroy', [ 'id'=> $element->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                <button type='submit' class="btn btn-danger"> supprimer </button>
    
                </form>

               
              </td>
              
            
               {{-- //                    projets= url dans web.php resource et show sest la fonction --}}
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@stop