<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.pedidos');
    }

    public function getPedidos()
    {
        $pedidos = \Pedidos\Pedido::orderBy('id');
        return view('pedido.index', compact('pedidos'));
    }

    array (size=3)
    'clients' =>
        array (size=4)
        'Super Fish' =>
            array (size=2)
            'totalminutes' => int 49
            'totalcost' => float 28.58774
        'Swedish Fish' =>
            array (size= 2)
            'totalminutes' => int 16
            'totalcost' => float 5.85842
        'Aero Fish' =>
            array (size=2)
            'totalminutes' => int 7
            'totalcost' => float 0.29714
        'Happy Fish' =>
            array (size=2)
            'totalminutes' => int 44
            'totalcost' => float 18.16224
    'totalminutes' => int 116
    'totalcost' => float 52.90554
    $data = array
    return View::make('reports.international-calls')->with('data', $data);
}
