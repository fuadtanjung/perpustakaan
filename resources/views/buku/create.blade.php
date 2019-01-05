@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-body">
          <h2>Pengguna baru</h2>

          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif

          <form action="{{ route('pengguna.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
              <div class="col-md-12">
                <strong>NIK:</strong>
                <input type="text" name="nik" class="form-control" placeholder="Contoh : 2801723">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" placeholder="isikan nama">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <strong>Alamat:</strong>
                <textarea class="form-control" rows="3" name="alamat" placeholder="isikan Alamat"></textarea>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <strong>NO HP:</strong>
                <input type="text" name="nohp" class="form-control" placeholder="contoh : 082128xxx">
              </div>
            </div>

           <div class="form-group row">
              <div class="col-md-12">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" placeholder="contoh : a@a.vom">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <strong>Foto:</strong>
               <input type="file" class="form-control-file"  name="file">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-6">
                <a href="{{ route('pengguna.index') }}" class="btn btn-secondary">Kembali</a>
              </div>
              <div class="col-md-6 text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection