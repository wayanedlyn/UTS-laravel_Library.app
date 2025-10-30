@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary">
            <i class="fa fa-book"></i> Dashboard Perpustakaan
        </h2>
       <a href="{{ route('buku.create') }}" class="btn btn-success">
    <i class="fa fa-plus"></i> Tambah Buku
</a>

        
    </div>

    <div class="card shadow border-0">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Daftar Buku</h5>
            <input type="text" id="searchInput" class="form-control form-control-sm w-25" placeholder="Cari buku...">
        </div>

        <div class="card-body bg-light">
            <table id="bookTable" class="table table-bordered table-striped table-hover align-middle mb-0">
                <thead class="table-dark text-center">
                    <tr>
                        <th style="width: 50px;">No</th>
                        <th>Judul Buku</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th style="width: 100px;">Tahun</th>
                        <th style="width: 140px;">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>Laskar Pelangi</td>
                        <td>Andrea Hirata</td>
                        <td>Bentang Pustaka</td>
                        <td class="text-center">2005</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>Bumi Manusia</td>
                        <td>Pramoedya Ananta Toer</td>
                        <td>Lentera Dipantara</td>
                        <td class="text-center">1980</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td>Negeri 5 Menara</td>
                        <td>Ahmad Fuadi</td>
                        <td>Gramedia</td>
                        <td class="text-center">2009</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">4</td>
                        <td>Ayat-Ayat Cinta</td>
                        <td>Habiburrahman El Shirazy</td>
                        <td>Republika</td>
                        <td class="text-center">2004</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">5</td>
                        <td>Supernova: Ksatria, Puteri, dan Bintang Jatuh</td>
                        <td>Dewi Lestari</td>
                        <td>Truedee Books</td>
                        <td class="text-center">2001</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">6</td>
                        <td>Pulang</td>
                        <td>Leila S. Chudori</td>
                        <td>KPG (Kepustakaan Populer Gramedia)</td>
                        <td class="text-center">2012</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">7</td>
                        <td>Ronggeng Dukuh Paruk</td>
                        <td>Ahmad Tohari</td>
                        <td>Gramedia Pustaka Utama</td>
                        <td class="text-center">1982</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">8</td>
                        <td>Perahu Kertas</td>
                        <td>Dewi Lestari</td>
                        <td>Bentang Pustaka</td>
                        <td class="text-center">2009</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">9</td>
                        <td>Tenggelamnya Kapal Van Der Wijck</td>
                        <td>Hamka</td>
                        <td>Balai Pustaka</td>
                        <td class="text-center">1939</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">10</td>
                        <td>5 CM</td>
                        <td>Donny Dhirgantoro</td>
                        <td>Grasindo</td>
                        <td class="text-center">2005</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- Script pencarian sederhana --}}
<script>
document.getElementById("searchInput").addEventListener("keyup", function() {
    var value = this.value.toLowerCase();
    var rows = document.querySelectorAll("#bookTable tbody tr");
    rows.forEach(function(row) {
        row.style.display = row.textContent.toLowerCase().includes(value) ? "" : "none";
    });
});
</script>

@endsection
