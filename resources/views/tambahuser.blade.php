@extends('layouts.headerfooter')

@section('content')



    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div  class="col-md-10 col-md-offset-1" id="kontenkelola">

                <div id="titlekelola"> 
                     <h3>Kelola Pegawai</h3>
                     <span>Tambah Pegawai sebagai Tim Akreditasi dan Reviewer</span>
                     
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
                            <th>Dosen Program Studi</th>
                            <th>Edit</th>
                    
                        </tr>
                    </thead>
                  
                    <tbody>
                        @foreach($pegawai as $pegawai)
                        <tr>
                            <td>{{$pegawai->nama}}</td>
                            <td>{{$pegawai->no_pegawai}}</td>
                            <td>{{$pegawai->nama_prodi}}</td>
                            <td>
                                <center><button class="glyphicon glyphicon-pencil" onclick='location.href="{{url('timakreditasi/tambah/update/'.$pegawai->username)}}"'></button></center>
                               <!--  <center><button class="" type="submit" data-toggle="modal" data-target="#confirmationModal" data-username="{{$pegawai->username}}">Update</button></center> -->
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
              <h4 class="modal-title">Menambah Tim Akreditasi</h4>
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


    <script> 
           

             $('#confirmationModal').on('show.bs.modal', function(e) {
              var username = e.relatedTarget.dataset.username;
              document.getElementById("isi").innerHTML="Anda yakin ingin menambah "+username+ " dari tim akreditasi?";
              var link = document.getElementById("link");
              var linkTambah = "tambah/" + username;
            link.setAttribute("href", linkTambah);
        });
    </script>

@endsection
