@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">

      @if ($pesan = Session::get('pesan'))
      <div class="alert alert-success">
        <p>{{ $pesan }}</p>
      </div>
      @endif

      <div class="card">
        <div class="card-body">
          <div class="float-left">
            <h2>Daftar Konten</h2>
          </div>

          <div class="float-right">
            <a class="btn btn-primary" href="{{ route('pengguna.create') }}"> Post baru</a>
          </div>

          <table class="table table-striped">

            <thead>
              <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>NoHP</th>
                <th>email</th>
                <th>Foto</th>
                <th></th>
              </tr>
            </thead>

            <tbody>
              @foreach($pengguna as $k=>$data)
              <tr>
                <td>{{ $pengguna->firstItem() + $k }}</td>
                <td>{{ $data->nik }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ str_limit($data->alamat, $limit = 250, $end = '...') }}</td>
                <td>{{ $data->nohp }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->foto }}</td>
                <td>
                  <div class="btn-group" role="group">
                    <button id="aksiGroup" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Aksi
                    </button>
                    <div class="dropdown-menu" aria-labelledby="aksiGroup">
                      <a class="btn btn-info dropdown-item" href="{{ route('pengguna.show',$data->nik) }}">Detail</a>
                      <a class="btn btn-warning dropdown-item" href="{{ route('pengguna.edit',$data->nik) }}">Edit</a>
                      <form action="{{ route('pengguna.destroy',$data->nik) }}" method="POST">
                        @csrf
                        @method('DELETE')
					           
                        <button type="submit" class="btn btn-danger dropdown-item">Hapus</button>
                      </form>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>

          </table>

          {!! $pengguna->links() !!}

        </div>
      </div>
    </div>
  </div>
  @endsection