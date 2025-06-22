<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceOrderController extends Controller
{
    // returns the service order creation view
    public function create()
    {
        // load all clients and all motos from database
         $clients = DB::table('clientes')->get();
         $motos = DB::table('motos')->get();
        return view('service_order.create', compact('clients', 'motos'));
    }

    // stores a new service order
    public function store(Request $request)
    {
        // Logic to store the service order
        // ...

        //return redirect()->route('service.show', ['id' => $newOrderId]);
    }
}
