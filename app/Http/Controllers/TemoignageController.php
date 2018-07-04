<?php

namespace App\Http\Controllers;

use App\Temoignage;
use Illuminate\Http\Request;
use Image;
use Storage;

class TemoignageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $temoignages = Temoignage::all();
        return view ('admin.temoignages.index',compact('temoignages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $temoignages = Temoignage::all();
        return view ('admin.temoignages.create',compact('temoignages'));  
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $temoignage = new Temoignage;
        $temoignage->nom=$request->nom;
        $temoignage->prenom = $request->prenom;
        $temoignage->image=$request->image->store(" ",'DiskImageTemoignages');
        $temoignage->contenu=$request->contenu;
        $temoignage->save();
        return redirect()->route('temoignages.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function show(Temoignage $temoignage)
    {
        return view("admin.temoignages.show",compact("temoignage"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function edit(Temoignage $temoignage)
    {
      return view("admin.temoignages.edit", compact("temoignage"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Temoignage $temoignage)
    {
        $temoignage->nom = $request->nom;
        $temoignage->prenom = $request->prenom;
        $temoignage->contenu = $request->contenu;
        if ($request->image != null){
            Storage::disk('DiskImageTemoignages')->delete($temoignage->image);
            $temoignage->image= $request->image->store('','DiskImageTemoignages');
        }
        if($temoignage->save()){
            return redirect()->route('temoignages.show',['id'=> $temoignage->id]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Temoignage $temoignage)
    {
        Storage::disk("DiskImageTemoignages")->delete($temoignage->image);
        if($temoignage->delete()){

            return redirect()->route ('temoignages.index');
        }
    }
}
