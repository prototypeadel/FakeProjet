@extends('adminlte::page')

@section('title', 'commentaires')

@section('content_header')
    <h1> Mes Commenaires</h1>
@stop

@section('content')
    <div>
            <a href="{{route('commentaires.create')}}" class="btn btn-success"> ajouter une commentaire</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col"> Titre</th>
                <th scope="col"> Contenu</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            <tbody>
                {{-- sa sest compact --}}
                @foreach($commentaires as $element)
              <tr>
                <td scope="row">{{$loop->iteration}} </td>
                <td> {{$element->titre}}</td>
                <td> {{$element->contenu}}</td>
              <td>  
                <a href="{{route('commentaires.show', ['element' => $element->id])}}" class="btn btn-success"> voir</a>
                <a href="{{route('commentaires.edit',['id'=>$element->id])}}" class="btn btn-warning"> modifier</a>
                <form class="d-inline-flex" action="{{route('commentaires.destroy', [ 'id'=> $element->id])}}" method="post">
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