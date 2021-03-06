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
            @if($status!=0 && $role!='Admin')
              <div class="alert alert-info">
                Borang tidak dalam masa atau sudah habis masa pengisian
              </div>
            @endif
            <?php
             Session::forget('success');
            ?>
            <a href="{{ url('3B/'.$idHistori.'/'.$tahun.'/standar4') }}" class="btn-primary btn-lg pull-right">Kembali Ke Standar 4</a><br><br><br><h1>Update Borang 3B Standar {{$kodeStandarStr}}</h1>
            <!-- 4.1.3,4.2 -->
            @if($kodeStandarStr!='4.1.3')
            <p>{{$standar4['standar4'][$kodeStandarStr]['perintah'] }}</p>
            @else
            <p>{{$standar4['standar4']['4.1'][$kodeStandarStr]['perintah'] }}</p>
            @endif

            <br>
                          <form action="{{url('3b/standar4edit/'.$kodeStandar.'/'.$idHistori.'/3b/submit')}}">
                          {{csrf_field()}}
                          <div class="form-group">
                            <textarea class="form-control" id='textarea' name='textarea'>@if($kodeStandarStr!='4.1.3')
                            <p>{{rawurldecode($standar4['standar4'][$kodeStandarStr]['isian']) }}</p>
                            @else
                            <p>{{rawurldecode($standar4['standar4']['4.1'][$kodeStandarStr]['isian']) }}</p>
                            @endif
                            </textarea>
                          </div>

                         @if($status==0) <button class="btn-primary btn-lg pull-right" type="submit">Simpan</button>
                         @endif
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