@extends('layouts.app')

@section('judul', 'Tabel Artikel')
    
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">{{ __('Tabel Artikel') }}</div>
            <div class="card-body">
                <a class="btn btn-outline-primary mb-5" href="{{ route('artikel.create') }}">Tambah Data</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Isi</th>
                            <th scope="col">Tanggal Dibuat</th>
                            <th scope="col">Penulis</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $li)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $li->kategori->nama }}</td>
                            <td>{{ $li->judul }}</td>
                            <td>
                                <img src="{{ asset('storage/'.$li->foto) }}" alt="" width="200">
                            </td>
                            <td>{{ $li->isi }}</td>
                            <td>{{ $li->tanggalArtikel }}</td>
                            <td>{{ $li->penulis }}</td>
                            <td>
                                <a class="btn btn-outline-primary" href="{{ url('artikel/'.$li->id.'/edit') }}">Edit</a>
                                <a class="btn btn-outline-danger" href="{{ url('hapusArtikel/'.$li->id) }}">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
