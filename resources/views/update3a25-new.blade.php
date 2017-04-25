@extends('layouts.headerfooter')

@section('content')

    <!-- Page Content -->

<div class="container">
  <div class="row">
      <div class="col-md-12" >
          <div class="db-wrapper">
          <h1>Update Borang 3A Standar {{$kodeStandarStr}}</h1><a href="{{ URL::previous() }}" class="btn-primary btn-lg pull-right">Kembali</a>
            <h3>{!!$standar2['standar2'][$kodeStandarStr]['judul']!!}</h3>
            <br>

            @if(isset($standar2['standar2'][$kodeStandarStr]['narasi']))
            <p>{!!$standar2['standar2'][$kodeStandarStr]['narasi']!!}</p><br>
            @endif
            <p>{!!$standar2['standar2'][$kodeStandarStr]['perintah']!!}</p><br>

            @if($nomorIsian=="0")
              <h3>Isi Umpan Balik dari Dosen:</h3>
            @elseif($nomorIsian=="1")
              <h3>Tindak Lanjut dari Dosen:</h3>
            @elseif($nomorIsian=="2")
              <h3>Isi Umpan Balik dari Mahasiswa:</h3>
            @elseif($nomorIsian=="3")
              <h3>Tindak Lanjut dari Mahasiswa:</h3>
            @elseif($nomorIsian=="4")
              <h3>Isi Umpan Balik dari Alumni:</h3>
            @elseif($nomorIsian=="5")
              <h3>Tindak Lanjut dari Alumni:</h3>
            @elseif($nomorIsian=="6")
              <h3>Isi Umpan Balik dari Pengguna Lulusan:</h3>
            @else($nomorIsian=="7")
              <h3>Tindak Lanjut dari Pengguna Lulusan:</h3>
            @endif
            <form action="{{url('3a/standar2edit/'.$kodeStandar.'/'.$nomorIsian.'/'.$kodeProdi.'/3a/submit')}}">
            {{csrf_field()}}
            <div class="form-group">
              <textarea class="form-control" id='textarea' name='textarea'>
                @if($nomorIsian=="0")
                  {!!$standar2['standar2'][$kodeStandarStr]['isian'][0]!!}
                @elseif($nomorIsian=="1")
                  {!!$standar2['standar2'][$kodeStandarStr]['isian'][1]!!}
                @elseif($nomorIsian=="2")
                  {!!$standar2['standar2'][$kodeStandarStr]['isian'][2]!!}
                @elseif($nomorIsian=="3")
                  {!!$standar2['standar2'][$kodeStandarStr]['isian'][3]!!}
                @elseif($nomorIsian=="4")
                  {!!$standar2['standar2'][$kodeStandarStr]['isian'][4]!!}
                @elseif($nomorIsian=="5")
                  {!!$standar2['standar2'][$kodeStandarStr]['isian'][5]!!}
                @elseif($nomorIsian=="6")
                  {!!$standar2['standar2'][$kodeStandarStr]['isian'][6]!!}
                @else($nomorIsian=="7")
                  {!!$standar2['standar2'][$kodeStandarStr]['isian'][7]!!}
                @endif
              </textarea>
            </div>
            <button type="submit" class="btn-primary btn-lg pull-right">Simpan</button>
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