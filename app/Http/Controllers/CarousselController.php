<?php

namespace App\Http\Controllers;

use App\Caroussel;
use Illuminate\Http\Request;
use Image;
use Storage;


class CarousselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caroussels = Caroussel::all();
        return view ('admin.caroussel.index',compact('caroussels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caroussels = Caroussel::all();
        return view ('admin.caroussel.create',compact('caroussels'));  
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $caroussel = new Caroussel;
        $caroussel->name = $request->name;
        $caroussel->photo = $request->photo->store('','DiskImage');
        $caroussel->save();

        return redirect()->route('caroussels.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Caroussel  $caroussel
     * @return \Illuminate\Http\Response
     */
    public function show(Caroussel $caroussel)
    {
        return view('admin.caroussel.show' ,compact('caroussel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Caroussel  $caroussel
     * @return \Illuminate\Http\Response
     */
    public function edit(Caroussel $caroussel)
    {
        return view ('admin.caroussel.edit',compact('caroussel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Caroussel  $caroussel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Caroussel $caroussel)
    {

          $caroussel->name = $request->name;
        if ($request->photo != null){
            Storage::disk('DiskImage')->delete($caroussel->photo);
            $caroussel->photo = $request->photo->store('','DiskImage');
        }
        if($caroussel->save()){
            return redirect()->route('caroussels.show',['id'=> $caroussel->id]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Caroussel  $caroussel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caroussel $caroussel)
    {
        Storage::disk("DiskImage")->delete($caroussel->photo);
        if($caroussel->delete()){

            return redirect()->route ('caroussels.index');
        }
    }
}
