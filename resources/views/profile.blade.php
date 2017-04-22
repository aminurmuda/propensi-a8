@extends('layouts.headerfooter')

@section('content')

    <!-- Page Content -->

    <div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-0" >
            <div class="db-wrapper">
                <h2>Profil Pengguna</h2>
                <br>
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                @foreach($pengguna as $pengguna)
                    <tr>
                        <th>Name:</th>
                        <td>{{$pengguna->nama}}</td>
                    </tr>
                    <tr>
                        <th>Username:</th>
                        <td>{{$pengguna->username}}</td>
                    </tr>
                    <tr>
                         <th>NIP</th>
                         <td>{{$pengguna->no_pegawai}}</td>
                    </tr>
                    <tr>
                         <th>Role</th>
                         <td>{{$role}}</td>
                    </tr>
                    <tr>
                         <th>Program Studi</th>
                         <td>{{$pengguna->nama_prodi}}</td>
                    </tr>
                @endforeach
                </table>
            </div>
        </div>
        <div class="col-md-4 col-md-offset-0">
            <div class="db-wrapper">
            </div>
        </div>
        <div class="col-md-4 col-md-offset-0">
            <div class="db-wrapper">
            </div>
        </div>
    </div>
   
   <br>
   <br>
   <br>
   <br>



</div>

    
    <!-- /.container -->


@endsection
