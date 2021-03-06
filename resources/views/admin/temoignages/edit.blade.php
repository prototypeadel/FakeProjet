@extends('adminlte::page')

@section('title', 'temoignage edit')

@section('content_header')
    <h1> Mon tempoignage</h1>
@stop

@section('content')
    <p> editer  </p>



    <div class="row">
        <div class="col-md-8">
            <div class="box">
                <div class="box-body">
                    <form action="{{route('temoignages.update',['id'=>$temoignage->id])}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                    @csrf
                    {{-- @method('PUT') --}}
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        
                        @if($errors->has('prenom'))
                        <div class="text-danger">Le champs titre est obligatoire</div>
                        @endif

                    <input type="text"for="prenom" name="prenom"  class="form-control {{ $errors->has('prenom')?'border-danger':''}}" value="{{old('prenom',$temoignage->prenom) }}" >
                    
                    </div>
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        
                        @if($errors->has('nom'))
                        <div class="text-danger">Le champs titre est obligatoire</div>
                        @endif

                    <input type="text"for="nom" name="nom"  class="form-control {{ $errors->has('nom')?'border-danger':''}}" value="{{old('nom',$temoignage->nom) }}" >
                    
                    </div>
                    <div class="form-group">
                            <label for="titre">contenu</label>
                                
                            @if($errors->has('contenu'))
                            <div class="text-danger">Le champs titre est obligatoire</div>
                            @endif
    
                            <input type="text" name="contenu" id="contenu" class="form-control {{ $errors->has('titre')?'border-danger':''}}" value="{{old('name',$temoignage->contenu) }}" >
                            
                            </div>
                    
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="customFile">
                        <label class="custom-file-label" for="customFile"></label>
                    </div>
                    <button type="submit" class="btn btn-info">Enregistrer</button>
                    </form>

                </div>
            </div>
        </div>


    </div>
@stop