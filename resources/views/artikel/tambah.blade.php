@extends('layouts.app')

@section('judul', 'Tambah Data Artikel')
    
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">{{ __('Tambah Data Artikel') }}</div>
            <div class="card-body">
                <a class="btn btn-outline-primary mb-5" href="{{ url('artikel') }}">Kembali</a>
                <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-5">
                        <label class="form-label">Pilih Kategori</label>
                        <select class="form-control" name="kategori_id">
                            @foreach ($kategori as $kt)
                                <option value="{{ $kt->id }}">{{ $kt->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-5">
                        <label class="form-label">Judul</label>
                        <input class="form-control" type="text" name="judul" required>
                    </div>
                    <div class="mb-5">
                        <label class="form-label">Foto</label>
                        <input class="form-control" type="file" name="foto" required>
                    </div>
                    <div class="mb-5">
                        <label class="form-label">Isi</label>
                        <input class="form-control" type="text" name="isi" required>
                    </div>
                    <div class="mb-5">
                        <label class="form-label">Tanggal Dibuat</label>
                        <input class="form-control" type="date" name="tanggalArtikel" required>
                    </div>
                    <div class="mb-5">
                        <label class="form-label">Penulis</label>
                        <input class="form-control" type="text" name="penulis" required>
                    </div>
                    <button class="btn btn-outline-primary" type="submit">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
