<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Storage;
use App\Projet;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projets = Projet::all();
        return view ('admin.projets.index',compact('projets')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projets = Projet::all();
        return view ('admin.projets.create',compact('projets')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $projet = new Projet;
        $projet->titre= $request->titre;
        $projet->contenu= $request->contenu;
        $projet->image = $request->image->store('','DiskImageProjets');
        $projet->save();

        return redirect()->route('projets.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Projet $projet)
    {
        return view('admin.projets.show' ,compact('projet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Projet $projet)
    {
        return view ('admin.projets.edit',compact('projet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projet $projets)
    {
        $projet->titre = $request->titre;
        if ($request->image != null){
            Storage::disk('DiskImageProjets')->delete($projet->image);
            $projet->image= $request->image->store('','DiskImageProjets');
        }
        if($projet->save()){
            return redirect()->route('projets.show',['id'=> $projet->id]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projet $projet)
    {
        Storage::disk("DiskImageProjets")->delete($projet->image);
        if($projet->delete()){

            return redirect()->route ('projets.index');
        }
    }
    
}
