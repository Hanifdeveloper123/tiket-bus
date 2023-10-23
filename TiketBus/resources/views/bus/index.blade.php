@extends('layout.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Datatable Bus</h5>
                <div class="pd-3">
                    <a href="{{ route('bus.create') }}" class=" btn btn-primary float-left mb-2">+ Tambah Data</a>
                </div>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Tipe</th>
                                <th>Tahun</th>
                                <th>Jumlah Kursi</th>
                                <th>Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->tipe }}</td>
                                <td>{{ $item->tahun }}</td>
                                <td>{{ $item->jumlah_kursi }}</td>
                                <td>
                                    <a href="{{ route('bus.edit', $item->id) }}" class="btn btn-primary
                                        btn-sm">Edit</a>
                                    <form onsubmit="return confirm('Yakin Mau hapus Data Ini?')" class="d-inline" action="{{ route('bus.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>NO</th>
                                <th>Tipe</th>
                                <th>Tahun</th>
                                <th>Jumlah Kursi</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
