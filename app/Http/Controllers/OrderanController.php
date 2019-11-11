<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;


class OrderanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = order::all();
        return view('orders.index', compact ('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'notelp' => 'required',
            'email' => 'required',
            'idlapangan' => 'required',
            //'idlapangan' => 'required|size:3',
        ]);


        Order::create($request->all());
        return redirect('/orders')->with('status', 'berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view ('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view ('orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'nama' => 'required',
            'notelp' => 'required',
            'email' => 'required',
            'idlapangan' => 'required',
        ]);


        Order::where('id', $order->id)
            ->update([
                'nama' => $request->nama,
                'notelp' => $request->notelp,
                'email' => $request->email,
                'idlapangan' => $request->idlapangan
            ]);
        return redirect('/orders')->with('status', 'Data berhasil dirubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        Order::destroy($order->id);
        return redirect('/orders')->with('status', 'Berhasil Dihapus !!!');
    }
}
