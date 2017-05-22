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
          <h1>Update Evaluasi Diri</h1><br>
          <a href="{{ url('evaluasidiri/'.$idHistori.'/'.$tahun) }}" class="btn-primary btn-lg pull-right">Kembali</a>
           <br>
           <br>
           <br>
            <form action="{{url('evaluasidiri/edit/'.$idHistori.'/ED/submit')}}">
            {{csrf_field()}}
            <div class="form-group">
              <textarea class="form-control" id='textarea' name='textarea'>
              <p>{!!rawurldecode($standarED['evaluasidiri']['tambahan'])!!}</p>
              </textarea>
            </div>
            @if($status==0)
            <button type="submit" class="btn-primary btn-lg pull-right">Simpan</button>
            @endif
            </form>
            <br><br><br><br><br><br>
          </div>
      </div>
  </div>
</div>

@endsection