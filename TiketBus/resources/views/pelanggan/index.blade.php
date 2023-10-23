@extends('layout.main')
@section('content')

@if(auth()->guard('admin')->check())
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Datatable Pelanggan</h5>
                <div class="pd-3">
                    {{-- <a href="{{ route('pelanggan.create') }}" class=" btn btn-primary float-left mb-2">+ Tambah Data</a> --}}
                </div>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->email }}</td>
                                <td>

                                </td>
                                    {{-- <a href="{{ route('trayek.edit', $item->id) }}" class="btn btn-primary
                                        btn-sm">Edit</a>
                                    <form onsubmit="return confirm('Yakin Mau hapus Data Ini?')" class="d-inline" action="{{ route('trayek.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form> --}}
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Email</th>
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
                <h5 class="card-title">Datatable Trayek</h5>
                <div class="pd-3">
                    {{-- <a href="{{ route('trayek.create') }}" class=" btn btn-primary float-left mb-2">+ Tambah Data</a> --}}
                </div>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Bus ID</th>
                                <th>Asal</th>
                                <th>Tujuan</th>
                                <th>Jam Berangkat</th>
                                <th>Harga</th>
                                <th>Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->bus_id }}</td>
                                <td>{{ $item->asal }}</td>
                                <td>{{ $item->tujuan }}</td>
                                <td>{{ $item->jam_berangkat }}</td>
                                <td>{{ $item->harga }}</td>
                                <td>
                                    <a href="" class="btn btn-info
                                        btn-sm">Pesan</a>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>NO</th>
                                <th>Bus ID</th>
                                <th>Asal</th>
                                <th>Tujuan</th>
                                <th>Jam Berangkat</th>
                                <th>Harga</th>
                                <th>Aksi</th>
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
