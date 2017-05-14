@extends('layouts.headerfooter')

@section('content')



    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div  class="col-md-12">

                <div> 
                    <h3>Status Borang Akreditasi</h3>
                     <span>Fakultas ,  Universitas Indonesia</span>
                     
                     <br>
                     <br>
                     <br>
                </div>

                
              <br>
                 <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Jenis Borang</th>
                            <th>Standar</th>
                            <th>Status</th>
                            <th>Menu</th>
                            
                    
                        </tr>
                    </thead>
                  
                    <tbody>
                       
                        <tr>
                            @foreach ($getBorang as $borang)
                            <td> {{ $borang -> jenis}}</td>
                            <td>{{ $borang -> standar}}</td>
                            <td></td>
                           
                            <td> <center><button class="btn" onclick=''>Edit</button><button class="btn" onclick=''>Publish</button></center></td>

                           
                        </tr>
                        @endforeach

                          
                        
                        

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
