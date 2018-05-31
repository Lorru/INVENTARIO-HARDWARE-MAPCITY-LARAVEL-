<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Moves;
use App\Customer;
use App\Hardware;
use App\Provider;

class PageControllers extends Controller
{
    public function start()
    {
        $moves = Moves::count();
        $customers = Customer::count();
        $hardwares = Hardware::count();
        $providers = Provider::count();
        $movesOpenState = Moves::where('state', 'ABIERTO')->count();
        $movesCloseState = Moves::where('state', 'CERRADO')->count();
        return view('start', compact(['moves', 'customers', 'hardwares', 'providers', 'movesOpenState', 'movesCloseState']));
    }
}
