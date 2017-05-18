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
          <h1>Update Borang 3A Standar {{$kodeStandarStr}}</h1><a href="{{ url('3A/'.$kodeProdi.'/'.$tahun.'/standar2') }}" class="btn-primary btn-lg pull-right">Kembali Ke Standar 2</a>
            <h3>{!!$standar2['standar2'][$kodeStandarStr]['judul']!!}</h3>
            <br>

            @if(isset($standar2['standar2'][$kodeStandarStr]['narasi']))
            <p>{!!$standar2['standar2'][$kodeStandarStr]['narasi']!!}</p><br>
            @endif
            <p>{!!$standar2['standar2'][$kodeStandarStr]['perintah']!!}</p><br>

            <form action="{{url('3a/standar2edit/'.$kodeStandar.'/'.$idHistori.'/3a/submit')}}">
            {{csrf_field()}}
            <div class="form-group">
              @if($status!=0)
              <textarea class="form-control" id='textarea' name='textarea' readonly="readonly">
                {!!rawurldecode($standar2['standar2'][$kodeStandarStr]['isian'])!!}
              </textarea>
              @else
              <textarea class="form-control" id='textarea' name='textarea'>
                {!!rawurldecode($standar2['standar2'][$kodeStandarStr]['isian'])!!}
              </textarea>
              @endif
            </div>
            @if($status==0)
            <button type="submit" class="btn-primary btn-lg pull-right">Simpan</button>
            @endif
            </form>
            <br><br><br><br><br><br>
            <script>
              // $('textarea').attr('contenteditable', false);
             </script>            
          </div>
      </div>
  </div>
</div>
 
@endsection