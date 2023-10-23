@extends('layout.main')
@section('content')
<div class="col-md-12">
    <div class="card">
        <form class="form-horizontal" action="{{ route('pesan', $data->id) }}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label for="lname" class="col-sm-3  control-label col-form-label">ID Trayek</label>
                    <div class="col-sm-9">
                        <input type="text" value="{{ @$trayek->id }}" name="trayek_id" class="form-control" placeholder="Jumlah..." readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lname" class="col-sm-3  control-label col-form-label">Jumlah</label>
                    <div class="col-sm-9">
                        <input type="text" name="jumlah" class="form-control" placeholder="Jumlah...">
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
