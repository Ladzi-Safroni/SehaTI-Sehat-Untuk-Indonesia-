@extends('master/master')
@include('master/common/aside')

@section('admin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Hii Admin, {{ Auth::user()->name }}</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{ url('/admin') }}">Pengecekan</a></li>
            <li class="breadcrumb-item active">Detail</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <form action="/admin/approve/{{ $pengajuan->id }}" method="POST" enctype="multipart/form-data" autocomplete="off">
        @csrf
        <div class="modal-body">
          <label for="">NIK</label>
          <input type="text" class="form-control" name="nik" value="{{ $pengajuan->nik }}" disabled>
          <label for="" class="mt-3">Nama Lengkap</label>
          <input type="text" class="form-control" name="namaLengkap" value="{{ $pengajuan->namaLengkap }}" disabled>
          <label for="" class="mt-3">Tempat Lahir</label>
          <input type="text" class="form-control" name="tempat" value="{{ $pengajuan->tempat }}" disabled>
          <label for="" class="mt-3">Tanggal Lahir</label>
          <input type="text" class="form-control" name="tanggal" value="{{ $pengajuan->tanggal }}" disabled>
          <label for="" class="mt-3">Jenis Kelamin</label>
          @if ($pengajuan->jk == "L")
          <input type="text" class="form-control" name="jk" value="Laki-Laki" disabled>
          @else
          <input type="text" class="form-control" name="jk" value="Perempuan" disabled>
          @endif
          <label for="" class="mt-3">No Telephone</label>
          <input type="text" class="form-control" name="telp" value="{{ $pengajuan->telp }}" disabled>
          <label for="" class="mt-3">Alamat Tinggal</label>
          <input type="text" class="form-control" name="alamat" value="{{ $pengajuan->alamat }}" disabled>
          <div class="row">
            <div class="col-6">
              <label for="" class="mt-3">KTP</label><br>
              <img src="{{ asset( 'storage/'.$pengajuan->ktp) }}" alt="" class="img-responsive" width="70%">
            </div>
            <div class="col-6">
              <label for="" class="mt-3">Kartu Keluarga</label><br>
              <img src="{{ asset( 'storage/'.$pengajuan->kk) }}" alt="" class="img-responsive" width="70%">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a href="/admin" type="button" class="btn btn-danger" data-dismiss="modal">Tidak</a>
          <button type="submit" class="btn btn-success">Setujui</button>
        </div>
      </form>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

@endsection