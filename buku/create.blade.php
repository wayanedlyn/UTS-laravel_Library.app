@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h3 class="fw-bold mb-4 text-primary">➕ Tambah Buku Baru</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('buku.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Judul Buku</label>
            <input type="text" name="judul" class="form-control" placeholder="Masukkan judul buku">
        </div>

        <div class="mb-3">
            <label for="pengarang" class="form-label">Pengarang</label>
            <input type="text" name="pengarang" class="form-control" placeholder="Masukkan nama pengarang">
        </div>

        <div class="mb-3">
            <label for="penerbit_id" class="form-label">Penerbit</label>
            <select name="penerbit_id" class="form-select">
                <option value="">-- Pilih Penerbit --</option>
                @foreach($penerbits as $penerbit)
                    <option value="{{ $penerbit->id }}">{{ $penerbit->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="kategori_id" class="form-label">Kategori</label>
            <select name="kategori_id" class="form-select">
                <option value="">-- Pilih Kategori --</option>
                @foreach($kategoris as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
            <input type="number" name="tahun_terbit" class="form-control" placeholder="contoh: 2020">
        </div>

        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
