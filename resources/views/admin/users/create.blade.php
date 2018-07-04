@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
<h1> creation projet</h1>
@stop

@section('content')
   

    <form action="{{route('users.store')}}" method="post"  enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="tof" >name</label>
            <input  class="form-control" id="tof" name="name"  placeholder="entrée nom">
         
        </div>
        <div class="form-group">
                <label for="tof" > email</label>
                <input  class="form-control" id="tof" name="email"  placeholder="entrée email">
             
            </div>
            <div class="form-group">
                <label for="tof" > password</label>
                <input  type ="password" class="form-control" for="tof" name="password"  placeholder="entrée password">
             
            </div>


            @foreach($roles as $role)
   <div class="form-check">
     
   <input name="role" class="form-check-input" type="radio" value="{{$role->id}}" id="defaultCheck1">
           <label class="form-check-label" for="defaultCheck1">
            {{$role->name}}
           </label>
   </div>
   @endforeach
        <div class="custom-file">
          <input type="file" class="custom-file-input" name="image" id="customFile">
          <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@stop