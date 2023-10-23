<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Tiket;
use App\Models\Trayek;
use Illuminate\Http\Request;

class TrayekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Trayek::all();
        //$tiket = Tiket::all();
        return view('trayek.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bus = Bus::all();
        return view('trayek.create', compact('bus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'bus_id' => 'required',
            'asal' => 'required',
            'tujuan' => 'required',
            'jam_berangkat' => 'required',
            'harga' => 'required'
        ]);

        $data = new Trayek();
        $data->bus_id = $request->bus_id;
        $data->asal = $request->asal;
        $data->tujuan = $request->tujuan;
        $data->jam_berangkat = $request->jam_berangkat;
        $data->harga = $request->harga;
        $data->save();

        return redirect()->route('trayek.index');
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
        $bus = Bus::all();
        $data = Trayek::FindOrFail($id);
        return view('trayek.edit', compact('bus', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Trayek::FindOrFail($id);
        $data->bus_id = $request->bus_id;
        $data->asal = $request->asal;
        $data->tujuan = $request->tujuan;
        $data->jam_berangkat = $request->jam_berangkat;
        $data->harga = $request->harga;
        $data->save();

        return redirect()->route('trayek.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Trayek::FindOrFail($id)->delete();
        return redirect()->route('trayek.index');
    }


}
