@extends('adminlte::page')

@section('title', 'caroussel edit')

@section('content_header')
    <h1> Mon Projet</h1>
@stop

@section('content')
    <p> editer cateorie </p>



    <div class="row">
            <div class="col-md-8">
                <div class="box">
    
                    <div class="box-body">
    
                        <form action="{{route('newsletters.update',['id'=>$newsletter->id])}}" method="post" >
                            @method('PUT')
                        @csrf
                        {{-- @method('PUT') --}}
                        <div class="form-group">
                          <label for="titre">email</label>
                            
                          @if($errors->has('email'))
                          <div class="text-danger">Le champs titre est obligatoire</div>
                          @endif

                        <input type="text" name="email" id="titre" class="form-control {{ $errors->has('email')?'border-danger':''}}" value="{{old('email',$newsletter->email) }}" >
                        
                        </div>
                      
                        <button type="submit" class="btn btn-info">Enregistrer</button>
                        </form>

                    </div>
                </div>
            </div>
    
    
        </div>
@stop