@extends('layouts.headerfooter')

@section('content')




    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div  class="col-md-8 col-md-offset-2" id="kontenkelola">

                <div id="titlekelola"> 
                     <img class="img-responsive" src="{{ url('images/kelolatim.png') }}" alt="" >
                     <span>Lihat dan Hapus Pengguna</span>
                     
                     <br>
                     <br>
                     <br>
                </div>

                


                 <!-- <img class="img-responsive center-block" id="kotakbiru" src="images/kotakdaftarpengguna.png" alt="" > -->

                 <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Prodi</th>
                            <th>Role</th>
                            <th>Edit</th>
                    
                        </tr>
                    </thead>
                  
                    <tbody>
                        @foreach($timAkreditasi as $pegawai)
                        <tr>
                            <td>{{$pegawai->nama}}</td>
                            <td>{{$pegawai->no_pegawai}}</td>
                            <td>{{$pegawai->nama_prodi}}</td>
                            <td></td>
                            <td>
                                <center>
                                <!-- <a href="hapus/{{$pegawai->username}}"> -->
                                <button class="glyphicon glyphicon-pencil" onclick='location.href="{{url('timakreditasi/tambah/update/'.$pegawai->username)}}"'></button>
                                <button class="glyphicon glyphicon-trash" type="submit" data-toggle="modal" data-target="#confirmationModal" data-username="{{$pegawai->username}}"></button>
                                <!-- </a> -->
                                </center>
                            </td>
                           
                        </tr>
                        @endforeach
<!--                         <tr>
                            <td>Ani nini</td>
                            <td>123333</td>
                            <td><button class="glyphicon glyphicon-trash" type="submit"></button>
                            </td>
                           
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>156352</td>
                            <td>
                                <button class="glyphicon glyphicon-trash" type="submit"></button>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>18249834</td>
                            <td>
                                <button class="glyphicon glyphicon-trash" type="submit"></button>
                            </td>
                        
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>122222</td>
                            <td>
                                <button class="glyphicon glyphicon-trash" type="submit"></button>
                            </td>
                           
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>1256362</td>
                            <td>
                                <button class="glyphicon glyphicon-trash" type="submit"></button>
                            </td>
                           
                        </tr> -->

                    </tbody>
                </table> 

                <br>

              
                <br>
                <br>

            </div>
        </div>
    </div>
    <!-- /.container -->

    <!-- Modal -->
  <div class="modal fade" id="confirmationModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Hapus Tim Akreditasi</h4>
        </div>
        <div class="modal-body">
          <p id='isi'>isinya</p>
        </div>
        <div class="modal-footer">
          <a href="#" id="link" ><button type="button" class="btn btn-default">Yakin</button></a>
         <button type="button" class="btn btn-default" data-dismiss="modal">batal</button>
        </div>
      </div>
      
    </div>
  </div>


  

@endsection
