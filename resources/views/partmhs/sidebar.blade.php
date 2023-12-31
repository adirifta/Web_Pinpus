<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('/img/logo.png') }}">
        </div>
        <div class="sidebar-brand-text mx-3 my-0"style="font-size:10pt">Politeknik Negeri Semarang</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="/home">
            <i class="fa-solid fa-house"></i>
            <span>Home</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Features
    </div>
    <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable"
                aria-expanded="true" aria-controls="collapseTable">
                <i class="fas fa-user"></i>
                <span>Pegawai</span>
            </a>
            <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Pegawai</h6>
                    <a class="collapse-item" href="/admin/pegawai">Lihat Pegawai</a>
                    <!-- <a class="collapse-item" href="/Pegawai/create">Tambah Pegawai</a> -->
                </div>
            </div>
        </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
            aria-expanded="true" aria-controls="collapseBootstrap">
            <i class="fa-solid fa-users"></i>
            <span>Mahasiswa</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Barang</h6>
                <a class="collapse-item" href="/admin/mahasiswa">Lihat Mahasiswa</a>
                <!-- <a class="collapse-item" href="/admin/mahasiswa/create">Tambah Mahasiswa</a> -->
                @if (Auth::user()->isAdmin == 1)
                    <a class="collapse-item" href="/buku/create">Tambah Barang</a>
                @endif

            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm"
            aria-expanded="true" aria-controls="collapseForm">
            <i class="fa-solid fa-book-open"></i>
            <span>Barang</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Kategori</h6>
                <a class="collapse-item" href="/admin/barang">Lihat Semua Barang</a>

                @if (Auth::user()->isAdmin == 1)
                    <a class="collapse-item" href="/kategori/create">Tambah Barang</a>
                @endif

            </div>
        </div>
    </li><!-- 

    @if (Auth::user()->isAdmin == 1)
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePeminjam"
                aria-expanded="true" aria-controls="collapsePeminjam">
                <i class="fa-solid fa-user-pen"></i>
                <span>Peminjaman</span>
            </a>
            <div id="collapsePeminjam" class="collapse" aria-labelledby="headingPeminjam"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Peminjaman</h6>
                    <a class="collapse-item" href="/peminjaman">Riwayat Peminjaman</a>
                    <a class="collapse-item" href="/peminjaman/create">Tambahkan Peminjaman</a>
                    <a class="collapse-item" href="/pengembalian">Kembalikan Barang</a>
                </div>
            </div>
        </li>
    @endif -->

    @if (Auth::user()->isAdmin == 0)
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePeminjam"
                aria-expanded="true" aria-controls="collapsePeminjam">
                <i class="fas fa-fw fa-table"></i>
                <span>Peminjaman</span>
            </a>
            <div id="collapsePeminjam" class="collapse" aria-labelledby="headingPeminjam"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">History</h6>
                    <a class="collapse-item" href="/peminjaman/create">History Peminjaman</a>
                    <!-- <a class="collapse-item" href="/peminjaman">Pinjaman Saya</a> -->
                </div>
            </div>
        </li>
    @endif

</ul>