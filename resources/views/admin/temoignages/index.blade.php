@extends('adminlte::page')

@section('title', 'Services ')

@section('content_header')
    <h1> Mes Services</h1>
@stop

@section('content')
    <p> Services </p>  
    <div>
            <a href="{{route('services.create')}}" class="btn btn-success"> ajouter une photo carrousel</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">image</th>
                <th scope="col">titre</th>
                <th scope="col">contenu</th>
                <th>action</th>
              </tr>
            </thead>
            <tbody>
                {{-- sa sest compact --}}
                @foreach($services as $element)
              <tr>
                <td scope="row">{{$loop->iteration}} </td>
                <td>   <img src="{{Storage::disk('DiskImageService')->url($element->image)}}"  style="width:100px;height:50px;" alt="tt"></td>
                <td> {{$element->titre}}</td>
                <td> {{$element->contenu}}</td>

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