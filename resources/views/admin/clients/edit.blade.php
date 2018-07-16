@extends('adminlte::page')

@section('title', 'caroussel edit')

@section('content_header')
    <h1> Mon Projet</h1>
@stop

@section('content')
    <p> editer client </p>



    <div class="row">
            <div class="col-md-8">
                <div class="box">
    
                    <div class="box-body">
    
                        <form action="{{route('clients.update',['id'=>$client->id])}}" method="post" >
                            @method('PUT')
                        @csrf
                        {{-- @method('PUT') --}}
                        <div class="form-group">
                          <label for="titre">Name</label>
                            
                          @if($errors->has('name'))
                          <div class="text-danger">Le champs titre est obligatoire</div>
                          @endif

                        <input type="text" name="name" id="titre" class="form-control {{ $errors->has('name')?'border-danger':''}}" value="{{old('name',$client->name) }}" >
                        
                        </div>
                        <div class="form-group">
                          <label for="titre">Company</label>
                            
                          @if($errors->has('company'))
                          <div class="text-danger">Le champs titre est obligatoire</div>
                          @endif

                        <input type="text" name="company" id="titre" class="form-control {{ $errors->has('company')?'border-danger':''}}" value="{{old('name',$client->company) }}" >
                        
                        </div>
                      
                        <button type="submit" class="btn btn-info">Enregistrer</button>
                        </form>

                    </div>
                </div>
            </div>
    
    
        </div>
@stop