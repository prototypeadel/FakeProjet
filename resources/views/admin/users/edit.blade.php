@extends('adminlte::page')

@section('title', 'user edit')

@section('content_header')
    <h1> Mon user</h1>
@stop

@section('content')
    <p> editer  </p>



    <div class="row">
        <div class="col-md-8">
            <div class="box">
                <div class="box-body">
                    <form action="{{route('users.update',['id'=>$user->id])}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                    @csrf
                    {{-- @method('PUT') --}}
                    <div class="form-group">
                        <label for="titre">Name</label>
                        
                        @if($errors->has('name'))
                        <div class="text-danger">Le champs titre est obligatoire</div>
                        @endif

                    <input type="text" name="name" id="titre" class="form-control {{ $errors->has('name')?'border-danger':''}}" value="{{old('name',$user->name) }}" >
                    
                    </div>
                    <div class="form-group">
                            <label for="titre">email</label>
                                
                            @if($errors->has('email'))
                            <div class="text-danger">Le champs titre est obligatoire</div>
                            @endif
    
                            <input type="text" name="email" id="contenu" class="form-control {{ $errors->has('email')?'border-danger':''}}" value="{{old('email',$user->email) }}" >
                            
                            </div>
                            <div class="form-group">
                                <label for="titre">password</label>
                                    
                                @if($errors->has('password'))
                                <div class="text-danger">Le champs titre est obligatoire</div>
                                @endif
        
                                <input type="text" name="password" id="contenu" class="form-control {{ $errors->has('password')?'border-danger':''}}"  >
                                
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