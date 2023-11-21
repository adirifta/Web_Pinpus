@extends('layouts.admin')
@section('content')
<div class="row mb-3">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100 bg-gradient-primary">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-uppercase mb-1 text-light">Mahasiswa</div>
                        <div class="text-sm text-light h5 mb-0 font-weight-bold"></div>
                        <div class="button mt-2"><a href="/admin/mahasiswa" class="text-light">Lihat</a></div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-users fa-3x text-light"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Earnings (Annual) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100 bg-gradient-info">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-sm text-light font-weight-bold text-uppercase mb-1">Barang</div>
                        <div class="text-sm text-light h5 mb-0 font-weight-bold"></div>
                        <div class="button mt-2"><a href="/admin/barang" class="text-light">Lihat</a></div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-book-open fa-3x text-light"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- New User Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100 bg-gradient-success">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-sm text-light font-weight-bold text-uppercase mb-1">Peminjam</div>
                        <div class="h5 mb-0 mr-3 font-weight-bold text-light"></div>
                        <div class="button mt-2"><a href="/admin/approve" class="text-light">Lihat</a></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-fw fa-table fa-3x text-light"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100 bg-gradient-danger">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-sm text-light font-weight-bold text-uppercase mb-1" style="font-size:.8rem">Pegawai</div>
                        <div class="h5 mb-0 mr-3 font-weight-bold text-light"></div>
                        <div class="button mt-2"><a href="/admin/pegawai" class="text-light">Lihat</a></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-tie fa-3x text-light"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card bg-gradient-secondary">
    <div class="container">
        <h3 class="text-light"> <i class="fa-solid fa-circle-info text-light my-3"></i> Informasi Aturan Peminjaaman</h3>
        <ol class=text-light>
            <li class=text-light>Waktu peminjaman maksimal 1 minggu</li>
            <li class=text-light>Setiap anggota hanya dapat meminjam maksimal 5 barang</li>
            <li class=text-light>Jika pengenbalian barang lebih dari waktu yang ditentukan akan diberikan denda setiap buku Rp.15.000/minggu.</li>
            <li class=text-light>Jika telah meminjam barang,silahkan ke tempat petugas untuk melakukan konfirmasi</li>
            <li class=text-light>Jika Terlambat mengembalikan barang dan mendapat denda, maka wajib langsung membayar pada petugas saat mengembalikan buku</li>
        </ol>
    </div>
</div>
@endsection