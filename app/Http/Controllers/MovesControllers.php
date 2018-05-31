<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hardware;
use App\Technical;
use App\Moves;
use App\Stock;
use Carbon\Carbon;
use App\Customer;
use App\Http\Requests\CreateMovesRequest;
use App\Http\Requests\UpdateMovesRequest;
use Mail;

class MovesControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $hardware = Hardware::all();
        $technicals = Technical::all();
        $customers = Customer::all();
        
        $movesOpenState = Moves::where('state', 'ABIERTO')->paginate(10);
                                      
        $moves = Moves::paginate(10);

        return view('moves.index', compact(['hardware', 'technicals', 'customers', 'movesOpenState', 'moves']));
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
    public function store(CreateMovesRequest $request)
    {
        $moves = new Moves;
        $moves->technical_id  = $request->input('technicals');
        $moves->customer_id   = $request->input('customers');
        $moves->hardware_id   = $request->input('hardware');
        $moves->state = "ABIERTO";
        $moves->quantity      = $request->input('quantity');
        $moves->supervisor    = $request->input('supervisor');
        $moves->entry_comment = $request->input('commentary');
        $moves->created_at     = Carbon::now();
        $moves->save();

        $stock = Stock::findOrFail($request->input('hardware'));
        $stock->quantity = ($stock->quantity - $request->input('quantity'));
        $stock->update();

        return redirect()->route('movimientos.index')->with('mensaje', 'El movimiento se genero con exito');        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $move = Moves::findOrFail($id);
        return view('moves.show', compact('move'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $move = Moves::findOrFail($id);
        return view('moves.edit', compact('move'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMovesRequest $request, $id)
    {
        $move = Moves::findOrFail($id);
        $move->comment_close = $request->input('commentary');
        $move->state = "CERRADO";
        $move->update();
        

        return back()->with('mensaje', 'El movimiento se cerro con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Moves::findOrFail($id)->delete();
        return redirect()->route('movimientos.index')->with('mensajeElim', 'El movimiento se elimino con exito');
    }
}
