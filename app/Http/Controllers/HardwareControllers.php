<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provider;
use App\Hardware;
use Carbon\Carbon;
use App\Stock;
use App\Http\Requests\CreateHardwaresRequest;

class HardwareControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providers = Provider::all();
        $hardwares = Hardware::paginate(10);
        return view('hardwares.index', compact(['providers' , 'hardwares']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateHardwaresRequest $request)
    {
        $hardware = new Hardware;
        $hardware->name = $request->input('name-hardware');
        $hardware->provider_id = $request->input('providers');
        $hardware->created_at = Carbon::now();
        $hardware->save();

        $stock = new Stock;
        $stock->quantity = $request->input('quantity');
        $stock->hardware_id = $hardware->id;
        $stock->created_at = Carbon::now();
        $stock->save();


        return redirect()->route('hardware.index')->with('mensaje', 'El hardware se genero con exito');        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hardware = Hardware::findOrFail($id);
        return view('hardwares.show', compact(['hardware']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hardware = Hardware::findOrFail($id);
        $providers = Provider::all();
        $stock = Stock::findOrFail($id);
        return view('hardwares.edit', compact(['hardware', 'providers', 'stock']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateHardwaresRequest $request, $id)
    {
        $hardware = Hardware::findOrFail($id);
        $hardware->name = $request->input('name-hardware');
        $hardware->provider_id = $request->input('providers');
        $hardware->update();

        $stock = Stock::findOrFail($hardware->id);
        $stock->quantity = $request->input('quantity');
        $stock->update();

        return back()->with('mensaje', 'El hardware se actualizo con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Stock::findOrFail($id)->delete();
        Hardware::findOrFail($id)->delete();

        return redirect()->route('hardware.index')->with('mensajeElim', 'El hardware se elimino con exito');
    }
}
