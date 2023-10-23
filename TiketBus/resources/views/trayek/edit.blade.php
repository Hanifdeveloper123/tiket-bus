@extends('layout.main')
@section('content')
<div class="col-md-12">
    <div class="card">
        <form class="form-horizontal" action="{{ route('trayek.update', $data->id) }}" method="post">
            @method('PUT')
            @csrf
            <div class="card-body">
                <h4 class="card-title">Edit Trayek</h4>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3  control-label col-form-label">Bus ID</label>
                    <div class="col-sm-9">
                        <select name="bus_id" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                            <option value="{{ $data->bus_id }}">{{ $data->Bus->id }}</option>
                            @foreach ( $bus as $item )
                            <option value="{{ $item->id }}">{{ $item->id }}</option>
                            @endforeach
                        </select>
                        {{-- <input type="text" name="tipe" class="form-control" id="fname" placeholder="Masukan Tipe"> --}}
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lname" class="col-sm-3  control-label col-form-label">Asal</label>
                    <div class="col-sm-9">
                        <input type="text" name="asal" value="{{ @$data->asal }}" class="form-control" placeholder="Masukan Asal">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lname" class="col-sm-3  control-label col-form-label">Tujuan</label>
                    <div class="col-sm-9">
                        <input type="text" name="tujuan" value="{{ @$data->tujuan }}" class="form-control" placeholder="Tujuan">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lname" class="col-sm-3  control-label col-form-label">Jam Berangkat</label>
                    <div class="col-sm-9">
                        <input type="time" name="jam_berangkat" value="{{ @$data->jam_berangkat }}" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lname" class="col-sm-3  control-label col-form-label">Harga</label>
                    <div class="col-sm-9">
                        <input type="text" name="harga" value="{{ @$data->harga }}" class="form-control" placeholder="Harga">
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
