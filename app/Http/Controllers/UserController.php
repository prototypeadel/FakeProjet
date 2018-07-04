<?php

namespace App\Http\Controllers;
use App\User;
use Image;
use Storage;
use App\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view("admin.users.index", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $roles = Role::all();
        return view ('admin.users.create',compact('users','roles')); 

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->name= $request->name;
        $user->email= $request->email;
        $user->role_id = $request->role;
        $user->password=$request->password;
        $user->image = $request->image->store('','DiskImageUsers');
        $user->save();

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $user=User::find($id);
        return view('admin.users.show' ,compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);
        return view('admin.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user=User::find($id);
        if($request->password != null){
            $request->password = $user->password;
        }
        $user->email = $request->email;
        $user->name = $request->name;
       
        if ($request->image != null){
            Storage::disk('DiskImageUsers')->delete($user->image);
            $user->image= $request->image->store('','DiskImageUsers');
        }
        if($user->save()){
            return redirect()->route('users.show',['id'=> $user->id]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);

        Storage::disk("DiskImageUsers")->delete($user->image);
        if($user->delete()){

            return redirect()->route ('users.index');
        }
    
    }
}
