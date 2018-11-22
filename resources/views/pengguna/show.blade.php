@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-body">

          <h2>NIK   : {{ $pengguna->nik }}</h2>
          <p>NAMA   : {{ $pengguna->nama }}</p>
          <p>ALAMAT : {{ $pengguna->alamat }}</p>
          <p>NO HP  : {{ $pengguna->nohp }}</p>
          <p>EMAIL  : {{ $pengguna->email }}</p>
          <p>FOTO   : {{ $pengguna->foto }}</p>


          <div class="form-group row">
            <div class="col-md-6">
              <a href="{{ route('pengguna.index') }}" class="btn">Kembali</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection