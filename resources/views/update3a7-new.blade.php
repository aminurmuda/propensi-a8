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
            <h1>Update Borang 3A Standar {{$kodeStandarStr}}</h1><a href="{{ url('3A/'.$kodeProdi.'/'.$tahun.'/standar7') }}" class="btn-primary btn-lg pull-right">Kembali Ke Standar 7</a>
            <br><br><br>
            @if($kodeStandarStr=='7.1.2')
            <p>
              {{$standar7['standar7']['7.1'][$kodeStandarStr]['perintah'] }}
              {{$standar7['standar7']['7.1'][$kodeStandarStr]['perintah2'] }}
            </p>
            @else
            <p>
              {{$standar7['standar7']['7.2'][$kodeStandarStr]['perintah'] }}
              {{$standar7['standar7']['7.2'][$kodeStandarStr]['perintah2'] }}
            </p>
            @endif
            <br>          
            <form action="{{url('3a/standar7edit/'.$kodeStandar.'/'.$idHistori.'/3a/submit')}}">
            {{csrf_field()}}
            <div class="form-group">
              <textarea class="form-control" id='textarea' name='textarea'>
              @if($kodeStandarStr=='7.1.2')
              <p>{!!rawurldecode($standar7['standar7']['7.1'][$kodeStandarStr]['isian'])!!}</p>
              @else
              <p>{!!rawurldecode($standar7['standar7']['7.2'][$kodeStandarStr]['isian'])!!}</p>
              @endif
              </textarea>
            </div>

            @if($status==0)<button class="btn-primary btn-lg pull-right" type="submit">Simpan</button>
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