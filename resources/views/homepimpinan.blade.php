@extends('layouts.headerfooter')

@section('content')

{!! Charts::assets() !!}

    <!-- Page Content -->
  @if($role!='Tim Akreditasi' && $role!='Tim Reviewer')
    <div class="container">
        <div class="row">
            <div  class="col-md-12">

                <div> 
                    <center><h3>Selamat Datang!</h3></center>
                    
                     
                     <br>
                     <br>
                     <br>
                </div>

                <!-- content chart -->
             

                 {!! $chart1->render() !!}

                
               

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

      @else
      <!-- view untuk role tim akreditasi atau tim reviewer-->
      <div class="container">
        <div class="row">
            <div  class="col-md-12">

                <div> 
                    <h3>Riwayat Akreditasi</h3>
                    <center><h3>Maaf, Anda tidak memiliki akses.</h3>
                    <a href="{{ url('homestatus') }}"> Kembali ke Halaman Awal</a>
                    </center>
                </div>
              </div>
          </div>

        </div>


      @endif



@endsection
