@extends('adminlte::page')

@section('title', 'caroussel edit')

@section('content_header')
    <h1> Mon Tag </h1>
@stop

@section('content')
    <p> editer tags </p>
    <div class="row">
            <div class="col-md-8">
                <div class="box">
    
                    <div class="box-body">
    
                        <form action="{{route('tags.update',['id'=>$tag->id])}}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                        @csrf
                        {{-- @method('PUT') --}}
                        <div class="form-group">
                          <label for="name">Name</label>
                            
                          @if($errors->has('name'))
                          <div class="text-danger">Le champs titre est obligatoire</div>
                          @endif

                        <input type="text" name="name" id="titre" for="name" class="form-control {{ $errors->has('name')?'border-danger':''}}" value="{{old('name',$tag->name) }}" >
                        
                        </div>
                        <button type="submit" class="btn btn-info">Enregistrer</button>
                        </form>

                    </div>
                </div>
            </div>
    
    
        </div>
@stop