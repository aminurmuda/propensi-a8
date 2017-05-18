@extends('layouts.headerfooter')

@section('content')

<div class="container">
              <div class="row">
              @foreach($pengguna as $pengguna)
                <div class="col-md-12 thumbnail" >
           
           
                  <div class="panel panel-info">
                    <div class="panel-heading">
                      <h2>{{$pengguna->nama}}</h2>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://home.iitk.ac.in/~kundua/male.png" class="img-circle img-responsive"> </div>
                        
                        <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                          <dl>
                            <dt>DEPARTMENT:</dt>
                            <dd>Administrator</dd>
                            <dt>HIRE DATE</dt>
                            <dd>11/12/2013</dd>
                            <dt>DATE OF BIRTH</dt>
                               <dd>11/12/2013</dd>
                            <dt>GENDER</dt>
                            <dd>Male</dd>
                          </dl>
                        </div>-->
                        <div class=" col-md-9 col-lg-9 "> 
                          <table class="table table-user-information">
                            <tbody>
                              <tr>
                                <td><b>Username:</b></td>
                                <td>{{$pengguna->username}}</td>
                              </tr>
                              <tr>
                                <td><b>NIP:</b></td>
                                <td>{{$pengguna->no_pegawai}}</td>
                              </tr>
                              <tr>
                                <td><b>Role:</b></td>
                                <td>{{$role}}</td>
                              </tr>
                           
                                 <tr>
                                     <tr>
                                <td><b>Program Studi:</b></td>
                                <td>{{$pengguna -> nama_prodi}}</td>
                              </tr>
                                <tr>
                                <td><b>Fakultas:</b></td>
                                <td>{{$pengguna->nama_fakultas}}</td>
                              </tr>
                              
                             
                            </tbody>
                          </table>
                          
                       
                        </div>
                      </div>
              
                </div>
      </div>
    </div>

    @endforeach



@endsection
