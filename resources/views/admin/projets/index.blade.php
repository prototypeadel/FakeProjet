@extends('adminlte::page')

@section('title', 'Projets ')

@section('content_header')
    <h1> Mes projets</h1>
@stop

@section('content')
      
    <div>
            <a href="{{route('projets.create')}}" class="btn btn-success"> ajouter un projet</a>
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
                @foreach($projets as $element)
              <tr>
                <td scope="row">{{$loop->iteration}} </td>
                <td>   <img src="{{Storage::disk('DiskImageProjets')->url($element->image)}}"  style="width:100px;height:50px;" alt="tt"></td>
                <td> {{$element->titre}}</td>
                <td> {{$element->contenu}}</td>

              <td>  
                <a href="{{route('projets.show', ['element' => $element->id])}}" class="btn btn-success"> voir</a>
                <a href="{{route('projets.edit',['id'=>$element->id])}}" class="btn btn-warning"> modifier</a>
                <form class="d-inline-flex" action="{{route('projets.destroy', [ 'id'=> $element->id])}}" method="post">
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