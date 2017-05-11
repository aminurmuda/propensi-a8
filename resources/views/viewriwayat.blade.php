@extends('layouts.headerfooter')

@section('content')

{!! Charts::assets() !!}

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div  class="col-md-12">

                <div> 
                    <h3>Riwayat Akreditasi</h3>
                     <span>Fakultas ,  Universitas Indonesia</span>
                     
                     <br>
                     <br>
                     <br>
                </div>

                <!-- content chart -->
                <div class="col-md-12">
                

                 {!! $chart1->render() !!}
                 {!! $chart2->render() !!}<br><br>
                 {!! $chart3->render() !!}<br><br>
                

                 </div>

                

                


                 <!-- <img class="img-responsive center-block" id="kotakbiru" src="images/kotakdaftarpengguna.png" alt="" > -->
                 <br><br>
                 <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Prodi</th>
                            <th>Tahun</th>
                            <th>Nilai</th>
                            <th>Huruf</th>
                            <th>Status</th>
                            <th>Menu</th>
                    
                        </tr>
                    </thead>
                  
                    <tbody>
                       
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td> <center><button class="btn glyphicon glyphicon-pencil" onclick=''>Details</button></center></td>
                               
                              
                           
                        </tr>
                      
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



@endsection
