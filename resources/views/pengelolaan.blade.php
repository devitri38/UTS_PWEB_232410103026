@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Data Pengunjung</h4>
        <button class="btn btn-light btn-sm">Tambah Pengunjung</button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tanggal Check-in</th>
                        <th>Durasi</th>
                        <th>Villa</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataPengunjung as $index => $pengunjung)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $pengunjung['nama'] }}</td>
                        <td>{{ $pengunjung['tanggal'] }}</td>
                        <td>{{ $pengunjung['durasi'] }}</td>
                        <td>Villa {{ $loop->iteration }}</td>
                        <td>
                            <button class="btn btn-sm btn-info">Detail</button>
                            <button class="btn btn-sm btn-warning">Edit</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
