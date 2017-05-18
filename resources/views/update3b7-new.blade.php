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
            <h1>Update Borang 3B Standar {{$kodeStandarStr}}</h1><a href="{{ url('3B/'.$idHistori.'/'.$tahun.'/standar7') }}" class="btn-primary btn-lg pull-right">Kembali Ke Standar 7</a><br><br><br>
            <!-- 4.1.3,4.2 -->
            @if($kodeStandarStr=='7.1.2')
            <p>{{$standar7['standar7']['7.1'][$kodeStandarStr]['perintah'] }}</p>
            @else
            <p>{{$standar7['standar7']['7.2'][$kodeStandarStr]['perintah'] }}</p>
            @endif

            <br>
                          <form action="{{url('3b/standar7edit/'.$kodeStandar.'/'.$idHistori.'/3b/submit')}}">
                          {{csrf_field()}}
                          <div class="form-group">
                            <textarea class="form-control" id='textarea' name='textarea'>
                            @if($kodeStandarStr=='7.1.2')
                            <p>{{rawurldecode($standar7['standar7']['7.1'][$kodeStandarStr]['isian']) }}</p>
                            @else
                            <p>{{rawurldecode($standar7['standar7']['7.2'][$kodeStandarStr]['isian']) }}</p>
                            @endif
                            </textarea>
                          </div>

                          @if($status==0)<button class="btn-primary btn-lg pull-right" type="submit">Simpan</button>
                          @endif
                          </form>
                        
            </div>
        </div>
    </div>

    
   
   <br>
   <br>
   <br>
   <br>



</div>

@endsection