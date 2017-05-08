@extends('layouts.headerfooter')

@section('content')

    <!-- Page Content -->

    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h3>Evaluasi Diri</h3>
            <span>  </span><br>
           
            <br><br><br>
            <div class="panel-group wrap" id="bs-collapse">

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#bs-collapse" href="#one">
         
         2.1  Sistem Tata Pamong
        </a>
      </h4>
                    </div>
                    <div id="one" class="panel-collapse collapse">
                        <div class="panel-body">
                            Sistem tata pamong berjalan secara efektif melalui mekanisme yang disepakati bersama,
                            serta dapat memelihara dan mengakomodasi semua unsur, fungsi, dan peran dalam
                            program studi. Tata pamong didukung dengan budaya organisasi yang dicerminkan
                            dengan ada dan tegaknya aturan, tatacara pemilihan pimpinan, etika dosen, etika
                            mahasiswa, etika tenaga kependidikan, sistem penghargaan dan sanksi serta pedoman
                            dan prosedur pelayanan (administrasi, perpustakaan, laboratorium, dan studio). Sistem
                            tata pamong (input, proses, output dan outcome serta lingkungan eksternal yang
                            menjamin terlaksananya tata pamong yang baik) harus diformulasikan, disosialisasikan,
                            dilaksanakan, dipantau dan dievaluasi dengan peraturan dan prosedur yang jelas.
                            <br><br>

                            Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Program Studi untuk
                            membangun sistem tata pamong yang kredibel, transparan, akuntabel, bertanggung
                            jawab dan adil. <br><br>

                            <div style="width:850px;height:200px;line-height:3em;overflow:scroll;padding:20px;background-color:#edeef9;color:#000000;scrollbar-base-color:#DEBB07;">
                                {!!$standar2['standar2']['2.1']['isian']!!}
                            </div><br>
                            @if($role=='Tim Akreditasi' || $role=='Admin' )
                              <a href="{{ url('3a/standar2edit/2-1/'. $kodeProdi) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
                            @endif

                            <br><br><h3>Komentar: </h3>
                             <div style="width:850px;height:200px;line-height:3em;overflow:scroll;padding:20px;background-color:#edeef9;color:#000000;scrollbar-base-color:#DEBB07;">
                                {!!$standar2['standar2']['2.1']['isian']!!}
                            </div><br>

                            @if($role=='Tim Reviewer' || $role=='Admin' )
                              <a href="{{ url('3a/standar2edit/2-1/'. $kodeProdi) }}" class="btn-primary btn-lg pull-right"> Beri Komentar</a>
                            @endif
                        </div>
                    </div>

                </div>
                <!-- end of panel -->

                

            </div>
            <!-- end of #bs-collapse  -->
            <br><br><br>

        </div>




    </div>
    <!-- end of container -->

    <!-- /.container -->





@endsection



