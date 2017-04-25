@extends('layouts.headerfooter')

@section('content')

    <!-- Page Content -->

    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h3>Borang 3A, Standar 2</h3>
            <span> Tata Pamong, Kepemimpinan, Sistem Pengelolaan, dan Penjaminan Mutu </span>
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

                            @if($standar2['standar2']['2.1']['isian'] != null)
                            <style type="text/css">
                                .isian {
                                    background-color: #ecf0f1;
                                    padding: 20px;
                                }
                            </style>
                            <div class="isian">{!!$standar2['standar2']['2.1']['isian']!!}</div><br>
                            @endif
                            @if($role=='Tim Akreditasi' || $role=='Admin' )
                              <a href="{{ url('3a/standar2edit/2-1/'. $kodeProdi) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
                            @endif
                        </div>
                    </div>

                </div>
                <!-- end of panel -->

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#bs-collapse" href="#two">
       2.2  Kepemimpinan
        </a>
      </h4>
                    </div>
                    <div id="two" class="panel-collapse collapse">
                        <div class="panel-body">

                            Kepemimpinan efektif mengarahkan dan mempengaruhi perilaku
                            semua unsur dalam program studi, mengikuti nilai, norma, etika,
                            dan budaya organisasi yang disepakati bersama, serta mampu membuat
                            keputusan yang tepat dan cepat.
                            Kepemimpinan mampu memprediksi masa depan, merumuskan dan mengartikulasi 
                            visi yang realistik, kredibel, serta mengkomunikasikan visi ke depan,
                            yang menekankan pada keharmonisan hubungan manusia dan mampu 
                            menstimulasi secara intelektual dan arif bagi anggota untuk mewujudkan
                            visi organisasi, serta mampu memberikan arahan, tujuan, peran, dan 
                            tugas kepada seluruh unsur dalam perguruan tinggi. Dalam menjalankan 
                            fungsi kepemimpinan dikenal kepemimpinan operasional, kepemimpinan 
                            organisasi, dan kepemimpinan publik.  Kepemimpinan operasional 
                            berkaitan dengan kemampuan menjabarkan visi, misi ke dalam kegiatan
                            operasional program studi.  Kepemimpinan organisasi berkaitan dengan 
                            pemahaman tata kerja antar unit dalam organisasi perguruan tinggi. 
                            Kepemimpinan publik berkaitan dengan kemampuan menjalin kerjasama 
                            dan menjadi rujukan bagi publik. <br><br>

                             Jelaskan pola kepemimpinan dalam Program Studi. <br><br>
                            @if($standar2['standar2']['2.2']['isian'] != null)
                            <style type="text/css">
                                .isian {
                                    background-color: #ecf0f1;
                                    padding: 20px;
                                }
                            </style>
                            <div class="isian">{!!$standar2['standar2']['2.2']['isian']!!}</div><br>
                            @endif
                            @if($role=='Tim Akreditasi' || $role=='Admin' )
                              <a href="{{ url('3a/standar2edit/2-2/'. $kodeProdi) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
                            @endif

                        </div>


                    </div>
                </div>
                <!-- end of panel -->

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#bs-collapse" href="#three">
          2.3 Sistem Pengelolaan
        </a>
      </h4>
                    </div>
                    <div id="three" class="panel-collapse collapse">
                        <div class="panel-body">
                            Sistem pengelolaan fungsional dan operasional program studi mencakup <i>planning, organizing, staffing, leading, controlling</i> dalam kegiatan  internal maupun eksternal.

                            <br><br>

                            Jelaskan sistem pengelolaan Program Studi serta dokumen pendukungnya. <br><br>
                            @if($standar2['standar2']['2.3']['isian'] != null)
                            <style type="text/css">
                                .isian {
                                    background-color: #ecf0f1;
                                    padding: 20px;
                                }
                            </style>
                            <div class="isian">{!!$standar2['standar2']['2.3']['isian']!!}</div><br>
                            @endif
                            @if($role=='Tim Akreditasi' || $role=='Admin' )
                              <a href="{{ url('3a/standar2edit/2-3/'. $kodeProdi) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- end of panel -->

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#bs-collapse" href="#four">
         2.4 Penjaminan Mutu
        </a>
      </h4>
                    </div>
                    <div id="four" class="panel-collapse collapse ">
                        <div class="panel-body">

                            Bagaimanakah pelaksanaan penjaminan mutu pada Program Studi? Jelaskan. <br><br>
                            @if($standar2['standar2']['2.4']['isian'] != null)
                            <style type="text/css">
                                .isian {
                                    background-color: #ecf0f1;
                                    padding: 20px;
                                }
                            </style>
                            <div class="isian">{!!$standar2['standar2']['2.4']['isian']!!}</div><br>
                            @endif
                            @if($role=='Tim Akreditasi' || $role=='Admin' )
                              <a href="{{ url('3a/standar2edit/2-4/'. $kodeProdi) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
                            @endif

                        </div>
                    </div>
                </div>
                <!-- end of panel -->


                 <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#bs-collapse" href="#five">
          2.5 Umpan Balik
        </a>
      </h4>
                    </div>
                    <div id="five" class="panel-collapse collapse">
                        <div class="panel-body">
                            Apakah program studi telah melakukan kajian tentang proses pembelajaran melalui umpan balik dari dosen, mahasiswa, alumni, dan pengguna lulusan mengenai harapan dan persepsi mereka?  Jika Ya, jelaskan isi umpan balik dan tindak lanjutnya.
                            <br><br>

                            <table>
                                  <tr>
                                    <th>Umpan Balik dari</th>
                                    <th>Isi Umpan Balik</th>
                                    <th>Tindak lanjut</th>
                                  </tr>
                                  <tr>
                                    <th>(1)</td>
                                    <th>(2)</td>
                                    <th>(3)</td>
                                  </tr>
                                  <tr>
                                  
                                    <td>Dosen</td>
                                    <td>{!!$standar2['standar2']['2.5']['isian']['Dosen']['Isi_Umpan_Balik']!!}
                                    @if($role=='Tim Akreditasi' || $role=='Admin' )
                                      <a href="{{ url('3a/standar2edit/2-5/Dosen/Isi_Umpan_Balik/'. $kodeProdi) }}" class="btn-primary btn-sm pull-right glyphicon glyphicon-pencil"></a>
                                    @endif</td>
                                    <td>{!!$standar2['standar2']['2.5']['isian']['Dosen']['Tindak_Lanjut']!!}
                                    @if($role=='Tim Akreditasi' || $role=='Admin' )
                                      <a href="{{ url('3a/standar2edit/2-5/Dosen/Tindak_Lanjut/'. $kodeProdi) }}" class="btn-primary btn-sm pull-right glyphicon glyphicon-pencil"></a>
                                    @endif</td>
                                  </tr>

                                  <tr>
                                    <td>Mahasiswa</td>
                                    <td>{!!$standar2['standar2']['2.5']['isian']['Mahasiswa']['Isi_Umpan_Balik']!!}
                                    @if($role=='Tim Akreditasi' || $role=='Admin' )
                                      <a href="{{ url('3a/standar2edit/2-5/Mahasiswa/Isi_Umpan_Balik/'. $kodeProdi) }}" class="btn-primary btn-sm pull-right glyphicon glyphicon-pencil"></a>
                                    @endif</td>
                                    <td>{!!$standar2['standar2']['2.5']['isian']['Mahasiswa']['Tindak_Lanjut']!!}
                                    @if($role=='Tim Akreditasi' || $role=='Admin' )
                                      <a href="{{ url('3a/standar2edit/2-5/Mahasiswa/Tindak_Lanjut/'. $kodeProdi) }}" class="btn-primary btn-sm pull-right glyphicon glyphicon-pencil"></a>
                                    @endif</td>
                                  </tr>
                                  <tr>
                                  
                                    <td>Alumni</td>
                                    <td>{!!$standar2['standar2']['2.5']['isian']['Alumni']['Isi_Umpan_Balik']!!}
                                    @if($role=='Tim Akreditasi' || $role=='Admin' )
                                      <a href="{{ url('3a/standar2edit/2-5/Alumni/Isi_Umpan_Balik/'. $kodeProdi) }}" class="btn-primary btn-sm pull-right glyphicon glyphicon-pencil"></a>
                                    @endif</td>
                                    <td>{!!$standar2['standar2']['2.5']['isian']['Alumni']['Tindak_Lanjut']!!}
                                    @if($role=='Tim Akreditasi' || $role=='Admin' )
                                      <a href="{{ url('3a/standar2edit/2-5/Alumni/Tindak_Lanjut/'. $kodeProdi) }}" class="btn-primary btn-sm pull-right glyphicon glyphicon-pencil"></a>
                                    @endif</td>
                                  </tr>
                                  <tr>
                                  
                                    <td>Pengguna Lulusan</td>
                                    <td>{!!$standar2['standar2']['2.5']['isian']['Pengguna_lulusan']['Isi_Umpan_Balik']!!}
                                    @if($role=='Tim Akreditasi' || $role=='Admin' )
                                      <a href="{{ url('3a/standar2edit/2-5/Pengguna_lulusan/Isi_Umpan_Balik/'. $kodeProdi) }}" class="btn-primary btn-sm pull-right glyphicon glyphicon-pencil"></a>
                                    @endif</td>
                                    <td>{!!$standar2['standar2']['2.5']['isian']['Pengguna_lulusan']['Tindak_Lanjut']!!}
                                    @if($role=='Tim Akreditasi' || $role=='Admin' )
                                      <a href="{{ url('3a/standar2edit/2-5/Pengguna_lulusan/Tindak_Lanjut/'. $kodeProdi) }}" class="btn-primary btn-sm pull-right glyphicon glyphicon-pencil"></a>
                                    @endif</td>
                                  </tr>
                                
                                </table>
                                <br>
                                <!-- @if($role=='Tim Akreditasi' || $role=='Admin' )
                                  <a href="{{ url('3a/standar2edit/2-5/'. $kodeProdi) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
                                @endif -->

                                <style>
                                    table {
                                        font-family: arial, sans-serif;
                                        border-collapse: collapse;
                                        width: 100%;
                                    }

                                    td, th {
                                        border: 1px solid #dddddd;
                            
                                        padding: 8px;

                                    }

                                    th {
                                        background-color: #dddddd;
                                        text-align: center;
                                    }

                                </style>
                        </div>
                    </div>
                </div>
                <!-- end of panel -->

                 <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#bs-collapse" href="#six">
          2.6 Keberlanjutan
        </a>
      </h4>
                    </div>
                    <div id="six" class="panel-collapse collapse">
                        <div class="panel-body">
                            Jelaskan upaya untuk menjamin keberlanjutan <i>(sustainability)</i> program studi ini, khususnya dalam hal:<br> <br>
                            a. Upaya untuk peningkatan animo calon mahasiswa:<br>
                            b. Upaya peningkatan mutu manajemen: <br>

                            c. Upaya untuk peningkatan mutu lulusan:<br>

                            d. Upaya untuk pelaksanaan dan hasil kerjasama kemitraan:<br>

                            e. Upaya dan prestasi memperoleh dana hibah kompetitif: <br>

                            <br>

                            @if($standar2['standar2']['2.6']['isian'] != null)
                            <style type="text/css">
                                .isian {
                                    background-color: #ecf0f1;
                                    padding: 20px;
                                }
                            </style>
                            <div class="isian">{!!$standar2['standar2']['2.6']['isian']!!}</div><br>
                            @endif
                            @if($role=='Tim Akreditasi' || $role=='Admin' )
                              <a href="{{ url('3a/standar2edit/2-6/'. $kodeProdi) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
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



