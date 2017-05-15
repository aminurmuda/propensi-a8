@extends('layouts.headerfooter')

@section('content')

    <!-- Page Content -->

    <div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-0" >
            <div class="db-wrapper">
                <h2>Profil Pegawai</h2>
                <br>
                <form action="{{ url('timakreditasi/tambah/update/'.$pegawai->username) }}" method="POST" id="form-update">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        
                            <tr>
                                <th>Name:</th>
                                <td id='nama'>{{$pegawai->nama}}</td>
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

                            <tr>
                                <th>Sebagai</th>
                                @if (count($prodiTimAkreditasi)==0 && $pegawaiIsReviewer ==0 )
                                <td>Belum menjadi apa-apa</td>
                                @endif
                                @if (count($prodiTimAkreditasi)!=0)
                                <td>Tim Akreditasi {{$prodiTimAkreditasi[0]->nama_prodi}}</td>
                                @endif
                                @if ($pegawaiIsReviewer != 0)
                                <td>Tim Reviewer {{$prodiTimReviewer[0]->nama_prodi}}</td>
                                @endif

                            </tr>
                        
                            <tr>
                                <th>Pilih Role</th>
                                <td>
                                    <select class="form-control" id="selectRole" name="selectRole" required>
                                        <option value='' disabled selected>--Pilih Role--</option>
                                        <option value='1'>Tim Reviewer</option>
                                        <option value='2'>Tim Akreditasi</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Pilih Program Studi</th>
                                <td>
                                    <select class="form-control" id="selectRoleProdi" name="selectRoleProdi" required>
                                        <option value='' disabled selected>--Pilih Program Studi--</option>
                                        @foreach($prodi as $prodi)
                                        <option value='{{$prodi->kode_prodi}}'>{{$prodi->nama_prodi}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                        </table>
                    </div> 
                    <div class="pricing-footer">
                        <button class="btn btn-success col-md-offset-4" type="submit">Update</button><br>
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
