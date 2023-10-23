<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Bus::all();
        return view('bus.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipe'=> 'required',
            'tahun' => 'required',
            'jumlah_kursi' =>'required'
        ]);

        $data = new Bus();
        $data->tipe = $request->tipe;
        $data->tahun = $request->tahun;
        $data->jumlah_kursi = $request->jumlah_kursi;
        $data->save();

        return redirect()->route('bus.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Bus::FindOrfail($id);
        return view('bus.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Bus::FindOrFail($id);
        $data->tipe = $request->tipe;
        $data->tahun = $request->tahun;
        $data->jumlah_kursi = $request->jumlah_kursi;
        $data->save();

        return redirect()->route('bus.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Bus::FindOrFail($id)->delete();
        return redirect()->route('bus.index');
    }
}
