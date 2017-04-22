@extends('layouts.headerfooter')

@section('content')

    <!-- Page Content -->

    <div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-0" >
            <div class="db-wrapper">
                <h2>Profil Pengguna</h2>
                <br>
                <form>
                    <div class="form-group">
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        @foreach($pegawai as $pegawai)
                            <tr>
                                <th>Name:</th>
                                <td>{{$pegawai->nama}}</td>
                            </tr>
                            <tr>
                                <th>Username:</th>
                                <td>{{$pegawai->username}}</td>
                            </tr>
                            <tr>
                                 <th>NIP</th>
                                 <td>{{$pegawai->no_pegawai}}</td>
                            </tr>
                            <tr>
                                 <th>Dosen Program Studi</th>
                                 <td>{{$pegawai->nama_prodi}}</td>
                            </tr>
                        @endforeach
                            <tr>
                                <th>Sebagai Tim Akreditasi</th>
                                <td>
                                    <select class="form-control" id="selectProdi">
                                        <option value=''>--Pilih Program Studi--</option>
                                        @foreach($prodi as $prodi)
                                        <option value='{{$prodi->kode_prodi}}'>{{$prodi->nama_prodi}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                        </table>
                    </div> 
                    <div class="pricing-footer">
                        <a href="#" class="btn db-button-color-square btn-m round">Pilih</a>
                    </div>
                </form>
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
