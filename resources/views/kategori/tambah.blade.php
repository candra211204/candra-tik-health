@extends('layouts.app')

@section('judul', 'Tambah Data Kategori')
    
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">{{ __('Tambah Data Kategori') }}</div>
            <div class="card-body">
                <a class="btn btn-outline-primary mb-5" href="{{ url('kategori') }}">Kembali</a>
                <form action="{{ route('kategori.store') }}" method="POST">
                    @csrf
                    <div class="mb-5">
                        <label class="form-label">Nama Kategori</label>
                        <input class="form-control" type="text" name="nama" required>
                    </div>
                    <button class="btn btn-outline-primary" type="submit">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
