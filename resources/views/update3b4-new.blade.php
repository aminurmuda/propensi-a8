@extends('layouts.headerfooter')

@section('content')

    <!-- Page Content -->

    <div class="container">
    <div class="row">
        <div class="col-md-12" >
            <div class="db-wrapper">
                        @if(session()->has('success'))
            <div class="alert alert-success  alert-dismissable">
             <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
              <strong>Berhasil Tersimpan!</strong>
            </div>
            @endif

            <?php
             Session::forget('success');
            ?>
            <h1>Update Borang 3B Standar {{$kodeStandarStr}}</h1><br>
            <!-- 4.1.3,4.2 -->
            @if($kodeStandarStr!='4.1.3')
            <p>{{$standar4['standar4'][$kodeStandarStr]['perintah'] }}</p>
            @else
            <p>{{$standar4['standar4']['4.1'][$kodeStandarStr]['perintah'] }}</p>
            @endif

            <br>
                          <form action="#">
                          {{csrf_field()}}
                          <div class="form-group">
                            <textarea class="form-control" id='textarea' name='textarea'>@if($kodeStandarStr!='4.1.3')
                            <p>{{rawurldecode($standar4['standar4'][$kodeStandarStr]['isian']) }}</p>
                            @else
                            <p>{{rawurldecode($standar4['standar4']['4.1'][$kodeStandarStr]['isian']) }}</p>
                            @endif
                            </textarea>
                          </div>

                          <button class="btn-primary btn-lg pull-right" type="submit">Simpan</button>
                          </form>
                          <script>
                           // Replace the <textarea id="editor1"> with a CKEditor
                                // instance, using default configuration.
                            CKEDITOR.replace( 'textarea' );
                           </script>            
            </div>
        </div>
    </div>

    
   
   <br>
   <br>
   <br>
   <br>



</div>

@endsection