@extends('adminlte::page')

@section('title', 'service edit')

@section('content_header')
    <h1> Mon service</h1>
@stop

@section('content')
    <p> editer  </p>



    <div class="row">
        <div class="col-md-8">
            <div class="box">
                <div class="box-body">
                    <form action="{{route('services.update',['id'=>$service->id])}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                    @csrf
                    {{-- @method('PUT') --}}
                    <div class="form-group">
                        <label for="titre">Titre</label>
                        
                        @if($errors->has('titre'))
                        <div class="text-danger">Le champs titre est obligatoire</div>
                        @endif

                    <input type="text" name="name" id="titre" class="form-control {{ $errors->has('titre')?'border-danger':''}}" value="{{old('name',$service->titre) }}" >
                    
                    </div>
                    <div class="form-group">
                            <label for="titre">contenu</label>
                                
                            @if($errors->has('contenu'))
                            <div class="text-danger">Le champs titre est obligatoire</div>
                            @endif
    
                            <input type="text" name="contenu" id="contenu" class="form-control {{ $errors->has('titre')?'border-danger':''}}" value="{{old('name',$service->contenu) }}" >
                            
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