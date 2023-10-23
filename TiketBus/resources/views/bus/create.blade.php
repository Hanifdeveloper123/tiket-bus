@extends('layout.main')
@section('content')
<div class="col-md-12">
    <div class="card">
        <form class="form-horizontal" action="{{ route('bus.store') }}" method="post">
            @csrf
            <div class="card-body">
                <h4 class="card-title">Add Bus</h4>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3  control-label col-form-label">Tipe</label>
                    <div class="col-sm-9">
                        <select name="tipe" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                <option value="ekonomi">Ekonomi</option>
                                <option value="patas">Patas</option>
                        </select>
                        {{-- <input type="text" name="tipe" class="form-control" id="fname" placeholder="Masukan Tipe"> --}}
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lname" class="col-sm-3  control-label col-form-label">Tahun</label>
                    <div class="col-sm-9">
                        <input type="text" name="tahun" class="form-control"  placeholder="Masukan Tahun">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lname" class="col-sm-3  control-label col-form-label">Jumlah Kursi</label>
                    <div class="col-sm-9">
                        <input type="text" name="jumlah_kursi" class="form-control"  placeholder="Jumlah Kursi">
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
