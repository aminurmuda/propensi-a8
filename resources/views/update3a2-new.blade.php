@extends('layouts.headerfooter')

@section('content')

    <!-- Page Content -->

<div class="container">
  <div class="row">
      <div class="col-md-12" >
          <div class="db-wrapper">
          <h1>Update Borang 3A Standar {{$kodeStandarStr}}</h1>
            <h3>{!!$standar2['standar2'][$kodeStandarStr]['judul']!!}</h3>
            <br>

            @if(isset($standar2['standar2'][$kodeStandarStr]['narasi']))
            <p>{!!$standar2['standar2'][$kodeStandarStr]['narasi']!!}</p><br>
            @endif
            <p>{!!$standar2['standar2'][$kodeStandarStr]['perintah']!!}</p><br>

            <form action="{{url('3a/standar2edit/'.$kodeStandar.'/'.$kodeProdi.'/3a/submit')}}">
            {{csrf_field()}}
            <div class="form-group">
              <textarea class="form-control" id='textarea' name='textarea'>
                @if(!($kodeStandarStr == "2.5"))
                  {!!$standar2['standar2'][$kodeStandarStr]['isian']!!}
                @else
                  {!!$standar2['standar2'][$kodeStandarStr]['isian'][$dari][$jenisIsian]!!}
                @endif
              </textarea>
            </div>
            <button type="submit">Simpan</button>
            </form>
            <script>
             // Replace the <textarea id="editor1"> with a CKEditor
                  // instance, using default configuration.
              CKEDITOR.replace( 'textarea' );
             </script>            
          </div>
      </div>
  </div>
</div>

@endsection