@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-body">
          <h2>Edit Data Pengguna</h2>

          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif

          <form action="{{ route('pengguna.update',$pengguna->nik) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group row">
              <div class="col-md-12">
                <strong>NIK:</strong>
                <input type="number" name="nik" class="form-control" value="{{ $pengguna->nik }}">
              </div>
            </div>            

            <div class="form-group row">
              <div class="col-md-12">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" value="{{ $pengguna->nama }}">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <strong>Alamat:</strong>
                <input type="text" name="alamat" class="form-control" value="{{ $pengguna->alamat }}">
              </div>
            </div>


            <div class="form-group row">
              <div class="col-md-12">
                <strong>No HP:</strong>
                <input type="number" name="nohp" class="form-control" value="{{ $pengguna->nohp }}" >
              </div>
            </div>


            <div class="form-group row">
              <div class="col-md-12">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" value="{{ $pengguna->email }}">
              </div>
            </div>            


            <div class="form-group row">
              <div class="col-md-12">
                <strong>Foto:</strong>
                <input type="text" name="foto" class="form-control" value="{{ $pengguna->foto }}">
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


   