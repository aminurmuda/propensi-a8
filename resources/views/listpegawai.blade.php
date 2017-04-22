@extends('layouts.headerfooter')

@section('content')



    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div  class="col-md-8 col-md-offset-2" id="kontenkelola">

                <div id="titlekelola"> 
                     <img class="img-responsive" src="{{ url('images/kelolatim.png') }}" alt="" >
                     
                     <br>
                </div>

                <div class="col-md-12 col-md-offset-3">
                    <form action="{username}" method="POST" id="form-cari">
                      {{ csrf_field() }}
                      <div class="input-group">
                         <input class="btn btn-md inputform" name="username" id="username" type="username" placeholder="Username" >
                        
                         <button class="btn btn-info btn-md" type="submit">Cari</button>
                    
                      </div>
                    </form>


                    <form action="#" method="POST"> 
                      <div class="input-group">
                         <input class="btn btn-md inputform" name="nip" id="nip" type="nip" placeholder="NIP" >

                         <button class="btn btn-info btn-md" type="submit">Cari</button>
                        
                      </div>
                    </form>
                </div>


                 <!-- <img class="img-responsive center-block" id="kotakbiru" src="images/kotakdaftarpengguna.png" alt="" > -->

                 <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Edit</th>
                    
                        </tr>
                    </thead>
                  
                    <tbody>
                        @foreach($pegawai as $pegawai)
                        <tr>
                            <td>{{$pegawai->nama}}</td>
                            <td>{{$pegawai->no_pegawai}}</td>
                            <td>
                                <center><button class="glyphicon glyphicon-trash" type="submit"></button></center>
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

                <div id="savetable" >
                    <button class="btn btn-info btn-md col-md-offset-4" type="submit">Save</button>
                    <button class="btn btn-info btn-md col-md-offset-1" type="submit">Cancel</button>
                </div>
                <br>
                <br>

            </div>
        </div>
    </div>
    <!-- /.container -->



@endsection
