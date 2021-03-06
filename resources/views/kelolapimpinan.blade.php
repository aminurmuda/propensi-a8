@extends('layouts.headerfooter')

@section('content')

    <div class="container">
        <div class="row">
            <div  class="col-md-10 col-md-offset-1" id="kontenkelola">

                <div id="titlekelola"> 
                     <h2>Kelola Pimpinan</h2>
                </div>

                 <div class="col-md-5 col-md-offset-3">
                    <form action="" method="POST" id="form-cari">
                    {{ csrf_field() }}
                      <div class="input-group">
                      <h4>Tambah Pimpinan</h4>

                         <input class="btn btn-md inputform" name="username" id="username" type="username" placeholder=" Username" required>

                         <br>
                         <br>
                        <select class="form-control" id="sel1" required>
                           <option value="" disabled="disabled">Select Role</option>
                           <option name="isBPMA" value="1">BPMA</option>
                           <option name="isPimpinanFakultas" value="2">Pimpinan Fakultas</option>
                           <option name="isPimpinanUniv" value="3">Pimpinan Universitas</option>
                           <option name="isUPMAF" value="4">UPMAF</option>
                        </select> 
                        <br>
                        <br>
                        <br>
                        
                      </div>
                      
                    </form>
                    <button class="btn btn-primary col-md-offset-4" type="submit" data-toggle="modal" data-target="#confirm-submit" id="submitBtn"> Tambah</button>
                    <br>
                    <hr>
                    <div id="titledaftar" > 
                         <center><h2>Daftar Pimpinan</h2></center>
                     </div>
                     <br>
                 </div>

                


                 <!-- <img class="img-responsive center-block" id="kotakbiru" src="images/kotakdaftarpengguna.png" alt="" > -->
                
                 <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">

                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Role</th>
                            <th>Edit</th>
                    
                        </tr>
                    </thead>
                  
                    <tbody>
                       @foreach($listPimpinan as $pimpinan)
                        <tr>
                            <td>{{$pimpinan->nama}}</td>
                            <td>{{$pimpinan->no_pegawai}}</td>
                            @if ($pimpinan->isBPMA==1)
                                <td>BPMA</td>
                            @endif
                            @if ($pimpinan->isPimpinanFakultas==1)
                                <td>Pimpinan Fakultas</td>
                            @endif
                            @if ($pimpinan->isPimpinanUniv==1)
                                <td>Pimpinan Universitas</td>
                            @endif
                            @if ($pimpinan->isUPMAF==1)
                                <td>UPMAF</td>
                            @endif
                            <td>
                                <center>
                               <!--  <a href="hapus/{{$pimpinan->username}}"> -->
                                <button class="glyphicon glyphicon-trash" type="submit" data-toggle="modal" data-target="#confirmationModal1" data-name="{{$pimpinan->nama}}" data-username="{{$pimpinan->username}}"></button>
                                <!-- </a> --> 
                                </center>
                            </td>
                           
                        </tr> 
                        @endforeach 
                        <!--<tr>
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
                                <button class="glyphicon glyphicon-trash" type="submit"></button>
                            </td>
                        
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>122222</td>
                            <td>
                                <button class="glyphicon glyphicon-trash" type="submit"></button>
                            
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>18249834</td>
                            <td>
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
  <div class="modal fade" id="confirmationModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Hapus Pimpinan</h4>
        </div>
        <div class="modal-body">
          <p id='isi1'>isinya</p>
        </div>
        <div class="modal-footer">
          <a href="#" id="link1" ><button type="button" class="btn btn-default">Yakin</button></a>
         <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        </div>
      </div>
      
    </div>
  </div>

  <div class="modal fade" id="confirm-submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#fad845">
                Tambah Pimpinan
            </div>
            <div class="modal-body">
                Apakah anda yakin untuk menambahkan <span id="a"></span> sebagai Pimpinan?
            </div>

  <div class="modal-footer">
            <button type="button" class="btn db-button-color-square btn-m round" data-dismiss="modal">Batal</button>
            <a href="#" id="linkSubmit"><button type="button" class="btn db-button-color-square btn-m round">Yakin</button></a>
        </div>
    </div>
</div>


@endsection
