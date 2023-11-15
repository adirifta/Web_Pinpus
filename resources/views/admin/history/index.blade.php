@extends('layouts.admin')

@section('content')

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My App</title>

  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

  <style>
    th {
      text-align: center;
    }

    td {
      text-align: center;
    }

    .colspan-1 {
      grid-column-end: span 1;
    }

    .colspan-2 {
      grid-column-end: span 2;
    }


    .button-container {
      margin-bottom: 12px;
    }
  </style>
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="main-content">
        <div class="container">
          <div class="card mt-5">
            <div class="card-header" style="background-color: #4169E1	; color: white; text-align: center;">
              <h3>History</h3>
            </div>
            <div class="card-body">
              @if (session('success'))
              <div class="alert alert-success">{{ session('success') }}</div>
              @endif

              @if (session('error'))
              <div class="alert alert-danger">{{ session('error') }}</div>
              @endif
              <div class="d-flex justify-content-between mb-3">
              </div>
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Tanggal Memesan</th>
                    <th>Tanggal Meminjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Total Barang</th>
                    <th>Pesan</th>
                    <th>Status</th>
                    <th colspan="2">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($peminjams as $peminjam)
                  <tr>
                    <td>{{ $peminjam->id }}</td>
                    <td>{{ $peminjam->user->name }}</td>
                    <td>{{ $peminjam->tgl_pesan }}</td>
                    <td>{{ $peminjam->tgl_pinjam }}</td>
                    <td>{{ $peminjam->tgl_kembali }}</td>
                    <td>{{ $peminjam->jumlah_total }}</td>
                    <td>{{ $peminjam->pesan }}</td>
                    <td>{{ $peminjam->status }}</td>
                    <td>
                      <a href="{{ route('approve.detail', ['user_id' => $peminjam->id]) }}" class="btn btn-warning btn-sm">Detail</a>
                    </td>
                    <td class="text-center">
                      <div class="btn-group" role="group">
                        @if ($peminjam->status === 'pending')
                        <form action="{{ route('aprove.setuju', $peminjam->id) }}" method="POST">
                          @csrf
                          <button type="submit" class="btn btn-success btn-sm">Setuju</button>
                        </form>
                        <a href="{{ route('aprove.tolak', $peminjam->id) }}" class="btn btn-danger btn-sm ml-2">Tolak</a>
                        @elseif ($peminjam->status === 'setuju')
                        <div class="button-container">
                          <a href="{{ route('aprove.kembali', $peminjam->id) }}" class="btn btn-success btn-sm">Kembali</a>
                        </div>
                        <div class="button-container">
                          <a href="{{ route('aprove.denda', $peminjam->id) }}" class="btn btn-danger btn-sm ml-2">Denda</a>
                        </div>
                        @elseif ($peminjam->status === 'batal')
                        <div>
                          <button class="btn btn-danger btn-sm" disabled>Tolak</button>
                        </div>
                        @elseif ($peminjam->status === 'denda')
                        <div class="button-container">
                          <a href="{{ route('kembali.denda', $peminjam->id) }}" class="btn btn-success btn-sm">Kembali</a>
                        </div>
                        @endif
                      </div>
                    </td>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" defer></script>
  <script src="{{ asset('assets/js/jquery-3.7.0.min.js') }}" defer></script>

</body>

</html>

@endsection