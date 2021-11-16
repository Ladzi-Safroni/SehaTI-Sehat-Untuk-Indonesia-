@extends('master/master')
@include('master/common/aside')

@section('admin')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
      </div>
      @endif
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Hii Admin, {{ Auth::user()->name }}</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Pengecekan</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <table class="table table-hover">
          <!-- /.col -->
          <div class="col-md-12">

            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-striped text-center table-responsive">
                <thead class="thead-dark">
                  <tr>
                    <th style="width: 10px">No.</th>
                    <th>NIK</th>
                    <th>Nama Lengkap</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Telepon</th>
                    <th>Alamat Tinggal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($pengajuans as $pengajuan)
                  <tr>
                    <td>{{ $pengajuan->id }}</td>
                    <td>{{ $pengajuan->nik }}</td>
                    <td>{{ $pengajuan->namaLengkap }}</td>
                    <td>{{ $pengajuan->tempat }}</td>
                    <td>{{ $pengajuan->tanggal }}</td>
                    @if ($pengajuan->jk == "L")
                    <td>Laki-Laki</td>
                    @else
                    <td>Perempuan</td>
                    @endif
                    <td>{{ $pengajuan->telp }}</td>
                    <td>{{ $pengajuan->alamat }}</td>
                    @if ($pengajuan->status == null)
                    <td>
                      <a class="btn btn-danger">Belum Diverifikasi</a>
                    </td>
                    @else
                    <td>
                      <a class="btn btn-success">Sudah Diverifikasi</a>
                    </td>
                    @endif
                    <td>
                      <a href="/pengajuan/detail/{{ $pengajuan->id }}" class="btn btn-warning">Detail</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
        </table>
          <div class="d-flex justify-content-center">
            {{ $pengajuans->links() }}
          </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

@endsection
