@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-body">

          <h2 align=>Data Pengunjung</h2> <br/>

          
          <div s>
              <table class="table table-striped" class="display" id="tabli">
                <tr>
                     <td><img src="/upload/{{$pengguna->file}}" width="150" height="150"></td>


                      <td> 
                            NIK   : {{ $pengguna->nik }} <br/>
                           NAMA   : {{ $pengguna->nama }} <br/>
                          ALAMAT : {{ $pengguna->alamat }} <br/>
                          NO HP  : {{ $pengguna->nohp }} <br/>
                          EMAIL  : {{ $pengguna->email }} <br/>
                          
                    </td>

                </tr>
                

              </table>
          </div>

          <div class="form-group row">
            <div class="col-md-6">
              <a class="btn btn-primary" href="{{ route('pengguna.index') }}" class="btn">Kembali</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection