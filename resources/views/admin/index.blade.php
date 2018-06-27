@extends('adminlte::page')

@section('title', 'Projets')

@section('content_header')
    <h1> Mes photos caroussels</h1>
@stop

@section('content')
    <p> Caroussels </p>  
    <div>
            <a href="{{route('caroussels.create')}}" class="btn btn-success"> ajouter une photo carrousel</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">image</th>
                <th scope="col">id</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            <tbody>
                {{-- sa sest compact --}}
                @foreach($caroussels as $element)
              <tr>
                <td scope="row">{{$loop->iteration}} </td>
                <td>{{$element->photo}}</td>
                <td>{{$element->name}}</td>
                <td> {{$element->id}}</td>
              <td>  
                <a href="{{route('caroussels.show', ['element' => $element->id])}}" class="btn btn-success"> show</a></td>
              
            
               {{-- //                    projets= url dans web.php resource et show sest la fonction --}}
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@stop