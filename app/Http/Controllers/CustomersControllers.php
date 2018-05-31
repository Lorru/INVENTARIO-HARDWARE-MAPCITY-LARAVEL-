<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Dependence;
use App\Http\Requests\CreateCustomersRequest;
use Carbon\Carbon;

class CustomersControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::paginate(10);
        $dependences = Dependence::all();
        return view('customers.index', compact(['customers', 'dependences']));
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
    public function store(CreateCustomersRequest $request)
    {
        $customer = new Customer;
        $customer->name_client = $request->input('name-client');
        $customer->name_enriched = $request->input('name-enriched');
        $customer->email = $request->input('email-enriched');
        $customer->place = $request->input('place');
        $customer->dependence_id = $request->input('dependence');
        $customer->created_at = Carbon::now();
        $customer->save();

        return redirect()->route('clientes.index')->with('mensaje', 'El cliente se genero con exito'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        $dependences = Dependence::all();
        return view('customers.edit', compact(['customer', 'dependences']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateCustomersRequest $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->name_client = $request->input('name-client');
        $customer->name_enriched = $request->input('name-enriched');
        $customer->email = $request->input('email-enriched');
        $customer->place = $request->input('place');
        $customer->dependence_id = $request->input('dependence');
        $customer->update();

        return back()->with('mensaje', 'El cliente se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Customer::findOrFail($id)->delete();
        return redirect()->route('clientes.index')->with('mensajeElim', 'El cliente se elimino con exito');
    }
}
