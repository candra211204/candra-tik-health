@extends('layouts.app')

@section('judul', 'Edit Data Artikel')
    
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">{{ __('Edit Data Artikel') }}</div>
            <div class="card-body">
                <a class="btn btn-outline-primary mb-5" href="{{ url('artikel') }}">Kembali</a>
                <form action="{{ url('artikel/'.$data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-5">
                        <label class="form-label">Pilih Kategori</label>
                        <select class="form-control" name="kategori_id">
                            @foreach ($kategori as $kt)
                                <option value="{{ $kt->id }}" @selected($data->kategori_id == $kt->id)>{{ $kt->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-5">
                        <label class="form-label">Judul</label>
                        <input class="form-control" type="text" name="judul" value="{{ $data->judul }}" required>
                    </div>
                    <div class="mb-5">
                        <div class="gambar">
                            <img src="{{ asset('storage/'.$data->foto) }}" alt="" width="200">
                            <p class="mt-2 mb-5">Foto Lama</p>
                        </div>
                        <label class="form-label">Foto</label>
                        <input class="form-control" type="file" name="foto" value="{{ $data->foto }}">
                    </div>
                    <div class="mb-5">
                        <label class="form-label">Isi</label>
                        <input class="form-control" type="text" name="isi" value="{{ $data->isi }}" required>
                    </div>
                    <div class="mb-5">
                        <label class="form-label">Tanggal Dibuat</label>
                        <input class="form-control" type="date" name="tanggalArtikel" value="{{ $data->tanggalArtikel }}" required>
                    </div>
                    <div class="mb-5">
                        <label class="form-label">Penulis</label>
                        <input class="form-control" type="text" name="penulis" value="{{ $data->penulis }}" required>
                    </div>
                    <button class="btn btn-outline-primary" type="submit">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
