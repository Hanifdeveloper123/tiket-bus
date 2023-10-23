<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Tiket;
use App\Models\Trayek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->guard('admin')->check()){
            $data = Tiket::all();
        }elseif(auth()->guard('pelanggan')->check()){
            $data = Tiket::where('pelanggan_id', auth()->guard('pelanggan')->user()->id)->get();
        }
        return view('tiket.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $trayek = Trayek::all();
        $pelanggan = Pelanggan::all();
        return view('tiket.create', compact('trayek', 'pelanggan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'trayek_id' => 'required',
            'pelanggan_id' => 'required',
            'jumlah' => 'required',
            'total_harga' => 'required'
        ]);

        $data = new Tiket();
        $data->trayek_id = $request->trayek_id;
        $data->pelanggan_id = $request->pelanggan_id;
        // $data->pelanggan_id = Auth()->guard('pelanggan')->user()->id;
        $data->jumlah = $request->jumlah;
        $data->total_harga = $request->total_harga;
        $data->save();
        // dd($data);

        return redirect()->route('tiket.index');
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
        $trayek = Trayek::all();
        $pelanggan = Pelanggan::all();
        $data = Tiket::FindOrFail($id);
        return view('tiket.edit', compact('trayek', 'pelanggan','data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Tiket::FindOrFail($id);
        $data->trayek_id = $request->trayek_id;
        $data->pelanggan_id = $request->pelanggan_id;
        $data->jumlah = $request->jumlah;
        $data->total_harga = $request->total_harga;
        $data->save();

        return redirect()->route('tiket.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tiket::FindOrFail($id)->delete();
        return redirect()->route('tiket.index');
    }


    public function jumlah($id){
        // dd('oke');
        $trayek = Trayek::FindOrFail($id);
        $data = Trayek::FindorFail($id);
        return view('trayek.pesan', compact('data','trayek'));
    }

    public function pesan(Request $request, $id){
        $request->validate([
            'jumlah' => 'required',
            // 'total_harga' => 'required'
        ]);

        $jumlah = Trayek::select('harga')->where('id', $id)->value('harga');
        // dd($jumlah);
        $data = new Tiket();
        $data->trayek_id = $request->trayek_id;
        $data->pelanggan_id = auth()->guard('pelanggan')->user()->id;
        $data->jumlah = $request->jumlah;
        $data->total_harga = $request->jumlah *$jumlah;
        $data->save();


        return redirect()->route('trayek.index');
    }
}
