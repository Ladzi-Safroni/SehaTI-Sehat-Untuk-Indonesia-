@extends('master/master')
@include('master/common/aside')

@section('pengumuman')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Hii {{ Auth::user()->name }}</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Pengumuman</li>
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
              <table class="table table-striped text-center">
                <thead class="thead-dark">
                  <tr>
                    <th style="width: 10px">No.</th>
                    <th>NIK</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Telepon</th>
                    <th>Alamat Tinggal</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($approves as $acc)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $acc->pengajuan->nik }}</td>
                    <td>{{ $acc->pengajuan->namaLengkap }}</td>
                    @if ($acc->pengajuan->jk == "L")
                    <td>Laki-Laki</td>
                    @else
                    <td>Perempuan</td>
                    @endif
                    <td>{{ $acc->pengajuan->telp }}</td>
                    <td>{{ $acc->pengajuan->alamat }}</td>
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
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection