@extends('layouts.headerfooter')

@section('content')

    <!-- Page Content -->

    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <h3>Borang Evaluasi Diri</h3>
          <h4>Program Studi {{$prodiBorang->nama_prodi}}, Tahun {{$tahun}}</h4>
          <div>
            {!!$isi!!}
          </div><br>
        </div>
    </div>
    <!-- end of container -->

    <!-- /.container -->





@endsection



