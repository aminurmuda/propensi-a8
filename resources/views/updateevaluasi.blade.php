@extends('layouts.headerfooter')

@section('content')

    <!-- Page Content -->

<div class="container">
  <div class="row">
      <div class="col-md-12" >
          <div class="db-wrapper">
          <h1>Update Evaluasi Diri</h1><br>
          <a href="{{ URL::previous() }}" class="btn-primary btn-lg pull-right">Kembali</a>
           <br>
           <br>
           <br>
            <form action="{{url('evaluasidiri/edit/'.$kodeProdi.'/ED/submit')}}">
            {{csrf_field()}}
            <div class="form-group">
              <textarea class="form-control" id='textarea' name='textarea'>s
              </textarea>
            </div>
            <button type="submit" class="btn-primary btn-lg pull-right">Simpan</button>
            </form>
            <br><br><br><br><br><br>
          </div>
      </div>
  </div>
</div>

@endsection