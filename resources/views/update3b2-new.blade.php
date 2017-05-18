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
            <h1>Update Borang 3B Standar {{$kodeStandarStr}}</h1><a href="{{ url('3B/'.$idHistori.'/'.$tahun.'/standar2') }}" class="btn-primary btn-lg pull-right">Kembali Ke Standar 2</a><br><br><br>
            
            <p>{{$standar2['standar2'][$kodeStandarStr]['perintah'] }}</p><br>
            
                          <form action="{{url('3b/standar2edit/'.$kodeStandar.'/'.$idHistori.'/3b/submit')}}">
                          {{csrf_field()}}
                          <div class="form-group">
                            <textarea class="form-control" id='textarea' name='textarea'>
                            <p>{{rawurldecode($standar2['standar2'][$kodeStandarStr]['isian']) }}</p>
                            
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