@extends('layout.main')
@section('content')
<div class="col-md-12">
    <div class="card">
        <form class="form-horizontal" action="{{ route('tiket.update', $data->id) }}" method="post">
            @method('PUT')
            @csrf
            <div class="card-body">
                <h4 class="card-title">Edit Tiket</h4>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3  control-label col-form-label">Trayek ID</label>
                    <div class="col-sm-9">
                        <select name="trayek_id" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                            <option value="{{ $data->trayek_id }}">{{ $data->Trayek->id }}</option>
                            @foreach ( $trayek as $item )
                            <option value="{{ $item->trayek_id }}">{{ $item->trayek_id }}</option>
                            @endforeach
                        </select>
                        {{-- <input type="text" name="tipe" class="form-control" id="fname" placeholder="Masukan Tipe"> --}}
                    </div>
                    <label for="fname" class="col-sm-3  control-label col-form-label">Pelanggan ID</label>
                    <div class="col-sm-9">
                        <select name="pelanggan_id" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                            <option value="{{ $data->pelanggan_id }}">{{ $data->Pelanggan->nama }}</option>
                            @foreach ( $pelanggan as $item )
                            <option value="{{ $item->pelanggan_id }}">{{ $item->nama }}</option>
                            @endforeach
                        </select>
                        {{-- <input type="text" name="tipe" class="form-control" id="fname" placeholder="Masukan Tipe"> --}}
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lname" class="col-sm-3  control-label col-form-label">Jumlah</label>
                    <div class="col-sm-9">
                        <input type="text" name="jumlah" value="{{ @$data->jumlah }}" class="form-control" placeholder="Jumlah">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lname" class="col-sm-3  control-label col-form-label">Total Harga</label>
                    <div class="col-sm-9">
                        <input type="text" name="total_harga" value="{{ @$data->total_harga }}" class="form-control" placeholder="Total Harga">
                    </div>
                </div>
            </div>
            <div class="border-top">
                <div class="card-body">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
