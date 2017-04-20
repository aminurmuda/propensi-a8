@extends('layouts.headerfooter')

@section('content')


    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div  class="col-md-8 col-md-offset-2" id="kontenkelola">

                 <center><h2>{{$message}}</h2></center>

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
        </div>
      </div>
      
    </div>
  </div>





    <script> 

            $('#confirmationModal').on('show.bs.modal', function(e) {
          var username = e.relatedTarget.dataset.username;
          document.getElementById("isi").innerHTML="Anda yakin ingin menghapus "+username+ " dari tim akreditasi?";
          var link = document.getElementById("link");
          var linkHapus = "hapus/"+username;
        link.setAttribute("href", linkHapus);
      });
    </script>

@endsection
