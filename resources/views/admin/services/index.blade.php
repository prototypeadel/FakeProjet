@extends('adminlte::page')

@section('title', 'Services ')

@section('content_header')
    <h1> Mes photos caroussels</h1>
@stop

@section('content')
    <p> Caroussels </p>  
    <div>
            <a href="{{route('services.create')}}" class="btn btn-success"> ajouter une photo carrousel</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">image</th>
                <th scope="col">nom</th>
                <th scope="col">id</th>
              </tr>
            </thead>
            <tbody>
                {{-- sa sest compact --}}
                @foreach($services as $element)
              <tr>
                <td scope="row">{{$loop->iteration}} </td>
                <td>   <img src="{{Storage::disk('DiskImage')->url($element->photo)}}"  style="width:100px;height:50px;" alt="tt"></td>
                <td> {{$element->name}}</td>
                <td> {{$element->id}}</td>
              <td>  
                <a href="{{route('services.show', ['element' => $element->id])}}" class="btn btn-success"> voir</a>
                <a href="{{route('services.edit',['id'=>$element->id])}}" class="btn btn-warning"> modifier</a>
                <form class="d-inline-flex" action="{{route('services.destroy', [ 'id'=> $element->id])}}" method="post">
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