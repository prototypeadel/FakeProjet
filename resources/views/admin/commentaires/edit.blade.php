@extends('adminlte::page')

@section('title', 'caroussel edit')

@section('content_header')
    <h1> Mon Projet</h1>
@stop

@section('content')
    <p> editer commentaire </p>



    <div class="row">
            <div class="col-md-8">
                <div class="box">
    
                    <div class="box-body">
    
                        <form action="{{route('commentaires.update',['id'=>$commentaire->id])}}" method="post" >
                            @method('PUT')
                        @csrf
                        {{-- @method('PUT') --}}
                        <div class="form-group">
                          <label for="titre">Name</label>
                            
                          @if($errors->has('name'))
                          <div class="text-danger">Le champs titre est obligatoire</div>
                          @endif

                        <input type="text" name="titre" id="titre" class="form-control {{ $errors->has('name')?'border-danger':''}}" value="{{old('name',$commentaire->name) }}" >
                        
                        </div>
                        <div class="form-group">
                          <label for="titre">Contenu</label>
                            
                          @if($errors->has('name'))
                          <div class="text-danger">Le champs titre est obligatoire</div>
                          @endif

                        <input type="text" name="contenu" id="titre" class="form-control {{ $errors->has('name')?'border-danger':''}}" value="{{old('name',$commentaire->name) }}" >
                        
                        </div>
                      
                        <button type="submit" class="btn btn-info">Enregistrer</button>
                        </form>

                    </div>
                </div>
            </div>
    
    
        </div>
@stop