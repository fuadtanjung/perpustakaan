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
              <h2>Daftar Pengguna</h2>
            </div>

            <div class="float-right">
              <a class="btn btn-primary"  href="{{ route('pengguna.create') }}"> Post baru</a>
            </div>

            <table id="bootstrap-data-table" class="table table-striped table-bordered">

              <thead>
                <tr>
                  <th>No</th>
                  <th>No member</th>
                  <th>Nama</th>
                  <th>No HP</th>
                  <th>email</th>
                  <th>Keterangan</th>
                </tr>
              </thead>

              <tbody>
                @foreach($pengguna as $k=>$data)
                <tr>
                  <td>{{ $pengguna->firstItem() + $k }}</td>
                  <td>{{ $data->no_member }}</td>
                  <td>{{ $data->nama }}</td>
                  <td>{{ $data->nohp }}</td>
                  <td>{{ $data->email }}</td>
                  <td>
                    <div class="btn-group" role="group">
                      <button id="aksiGroup" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Aksi
                      </button>
                      <div class="dropdown-menu" aria-labelledby="aksiGroup">
                        <a class="btn btn-info dropdown-item" href="{{ route('pengguna.show',$data->no_member) }}">Detail</a>
                        <a class="btn btn-warning dropdown-item" href="{{ route('pengguna.edit',$data->no_member) }}">Edit</a>
                        <form action="{{ route('pengguna.destroy',$data->no_member) }}" method="POST">
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
              <div class="float-left">
                 <div class="form-group row">
                    <div class="col-md-6">
                      <a href="{{ route('home') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
              </div>
          </div>
         </div>
    </div>
    
    @endsection

