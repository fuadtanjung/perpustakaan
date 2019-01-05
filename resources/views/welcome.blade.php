@extends('layouts.table')

@section('content')

   <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

      

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Peminjaman Buku</strong>
                            <a href="/" class="btn btn-primary float-right">History Peminjaman</a>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Uraian</th>
                        <th>Kurun Waktu</th>
                        <th>Status</th>
                        <th>Id_Bungkus</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                   

                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

@endsection

@section('script')
   <script type="text/javascript">
                $(document).ready(function() {
                  $('#bootstrap-data-table-export').DataTable();
                } );
            </script>

            @endsection