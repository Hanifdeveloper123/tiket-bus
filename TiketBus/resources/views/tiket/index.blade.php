@extends('layout.main')
@section('content')

@if(auth()->guard('admin')->check())
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Datatable Tiket</h5>
                <div class="pd-3">
                    <a href="{{ route('tiket.create') }}" class=" btn btn-primary float-left mb-2">+ Tambah Data</a>
                </div>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Trayek ID</th>
                                <th>Pelanggan ID</th>
                                <th>Jumlah</th>
                                <th>Total Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->trayek_id }}</td>
                                <td>{{ $item->Pelanggan->nama }}</td>
                                <td>{{ $item->jumlah }}</td>
                                <td>{{ $item->total_harga }}</td>
                                <td>
                                    <a href="{{ route('tiket.edit', $item->id) }}" class="btn btn-primary
                                        btn-sm">Edit</a>
                                    <form onsubmit="return confirm('Yakin Mau hapus Data Ini?')" class="d-inline" action="{{ route('tiket.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>NO</th>
                                <th>Trayek ID</th>
                                <th>Pelanggan ID</th>
                                <th>Jumlah</th>
                                <th>Total Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@elseif(auth()->guard('pelanggan')->check())
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Datatable Tiket</h5>
                <div class="pd-3">
                    {{-- <a href="{{ route('tiket.create') }}" class=" btn btn-primary float-left mb-2">+ Tambah Data</a> --}}
                </div>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Trayek ID</th>
                                <th>Pelanggan ID</th>
                                <th>Jumlah</th>
                                <th>Total Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->trayek_id }}</td>
                                <td>{{ $item->Pelanggan->nama }}</td>
                                <td>{{ $item->jumlah }}</td>
                                <td>{{ $item->total_harga }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>NO</th>
                                <th>Trayek ID</th>
                                <th>Pelanggan ID</th>
                                <th>Jumlah</th>
                                <th>Total Harga</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endif()
@endsection
