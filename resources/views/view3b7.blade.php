@extends('layouts.headerfooter')

@section('content')

    <!-- Page Content -->

    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
        @if($status!=0 && $role!='Admin')
              <div class="alert alert-info">
                Borang tidak dalam masa atau sudah habis masa pengisian
              </div>
            @endif
            <h3>Borang 3B, Standar 7</h3>
            <span> Penelitian, Pelayanan/Pengabdian Kepada Masyarakat, dan Kerjasama</span><br>
             <span> {{ $nama_fakultas}} , Universitas Indonesia </span>

            <br><br><br>
            <div class="panel-group wrap" id="bs-collapse">

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#bs-collapse" href="#one">
         
         7.1 Penelitian
        </a>
      </h4>
                    </div>
                    <div id="one" class="panel-collapse collapse">
                        <div class="panel-body">
                            7.1.1  Tuliskan jumlah dan dana penelitian yang dilakukan oleh masing-masing PS di lingkungan Fakultas/Sekolah Tinggi dalam tiga tahun terakhir dengan mengikuti format tabel berikut:
                             <br><br>

                            <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                            <tr>
                                <th rowspan="2">No.</th>
                                <th rowspan="2">Nama Program Studi</th>
                                <th colspan="3">Jumlah Judul Penelitian</th>
                                <th colspan="3">Total Dana Penelitian (Juta Rp)</th>
                            </tr>

                            <tr>
                            	<th>{{$tahun2}}</th>
                            	<th>{{$tahun1}}</th>
                            	<th>{{$tahun}}</th>
                            	<th>{{$tahun2}}</th>
                                <th>{{$tahun1}}</th>
                                <th>{{$tahun}}</th>
                            </tr>

                            <tr>
                                <td>(1)</td>
                                <td>(2)</td>
                                <td>(3)</td>
                                <td>(4)</td>
                                <td>(5)</td>
                                <td>(6)</td>
                                <td>(7)</td>
                                <td>(8)</td>
                            </tr>
                            <?php $i=1 ?>
                            @foreach($arr as $a)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$a['namaProdi']}}</td>
                                <td>{{$a['ts-2']}}</td>
                                <td>{{$a['ts-1']}}</td>
                                <td>{{$a['ts']}}</td>
                                <td>{{$a['dana2']}}</td>
                                <td>{{$a['dana1']}}</td>
                                <td>{{$a['dana']}}</td>
                            </tr>
                            <?php $i++?>
                            @endforeach
                            <tr>
                                <td></td>
                                <td>Total</td>
                                <td>{{$totalts2}}</td>
                                <td>{{$totalts1}}</td>
                                <td>{{$totalts}}</td>
                                <td>{{$totalDana2}}</td>
                                <td>{{$totalDana1}}</td>
                                <td>{{$totalDana}}</td>
                            </tr>

                            </table>
                            </div>
                           Catatan: Kegiatan yang dilakukan bersama oleh dua PS atau lebih sebaiknya dicatat sebagai kegiatan PS yang relevansinya paling dekat. <br><br>

                            7.1.2   Uraikan pandangan pimpinan  Fakultas/Sekolah Tinggi tentang data pada butir 7.1.1, dalam perspektif: kesesuaian dengan Visi dan Misi, kecukupan, kewajaran, upaya pengembangan dan peningkatan mutu. Uraikan pula kendala-kendala yang dihadapi. 
                            <br><br>

                             <div style="width:850px;height:200px;line-height:3em;overflow:scroll;padding:5px;background-color:#edeef9;color:#000000;scrollbar-base-color:#DEBB07;">
                              {!! rawurldecode($standar7['standar7']['7.1']['7.1.2']['isian']) !!}

                             </div>
                           

                            @if($role=='Tim Akreditasi' || $role=='Admin' )
                            @if($status==0 || $role=='Admin')
                           <a href="{{ url('3b/standar7edit/7-1-2/'.$kode_fakultas) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
                           @else
                           <a href="#" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
                           @endif
                           @endif


                           <br><br><h3>Komentar: </h3>
                        

                            @if($role=='Tim Reviewer' || $role=='Admin' )
                            <div>
                            @if($status==1 || $role=='Admin')
                             <form action="{{url('3b/standar7/7-1/'.$kode_fakultas.'/3b/submitkomentar')}}">
                              {{csrf_field()}}
                              <div class="form-group">
                                <textarea class="form-control" id='isi-komentar' name='isi-komentar'>
                                  
                                </textarea>
                              </div>
                              <button type="submit" class="btn-primary btn-lg pull-right">Kirim Komentar</button>
                              </form>
                              @else
                              <div class="alert alert-info">
                                Borang bukan dalam masa review. Harap ganti status akreditasi terlebih dahulu.
                              </div>
                              @endif
                            </div>
                            @endif

                             <!-- komentar -->
                            <br><br><br>@foreach($komentar7_1 as $komentar7_1)
                            <div class="row">
                              <div class="col-sm-2">
                              <div class="thumbnail">
                              <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                              </div><!-- /thumbnail -->
                              </div><!-- /col-sm-1 -->

                              <div class="col-sm-10">
                              <div class="panel panel-default">
                              <div class="panel-heading">
                              <strong>{{$komentar7_1->nama}}</strong> <span class="text-muted">commented:</span><br>
                              <strong>{{$komentar7_1->date}}</strong>
                              </div>
                              

                              <div class="panel-body">
                             {!!$komentar7_1->isi!!}
                              </div><!-- /panel-body -->
                              </div><!-- /panel panel-default -->
                              </div><!-- /col-sm-5 -->
                            </div><br>
                            @endforeach



                           
                        </div>
                    </div>

                </div>
                <!-- end of panel -->

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#bs-collapse" href="#two">
       7.2  Pelayanan/Pengabdian kepada Masyarakat
        </a>
      </h4>
                    </div>
                    <div id="two" class="panel-collapse collapse">
                        <div class="panel-body">
                        	
                        	Pelayanan/Pengabdian kepada Masyarakat adalah penerapan bidang ilmu untuk menyelesaikan masalah di masyarakat (termasuk masyarakat industri, pemerintah, dsb.<br><br>

                             7.2.1  Tuliskan jumlah dan dana kegiatan pelayanan/pengabdian kepada masyarakat yang dilakukan oleh masing-masing PS di lingkungan Fakultas dalam tiga tahun terakhir dengan mengikuti format tabel berikut:<br><br>

                              <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                            <tr>
                                <th rowspan="2">No.</th>
                                <th rowspan="2">Nama Program Studi</th>
                                <th colspan="3">Jumlah Judul Kegiatan Pelayanan/Pengabdian kepada Masyarakat</th>
                                <th colspan="3">Total Dana Kegiatan Pelayanan/Pengabdian kepada Masyarakat (Juta Rp)</th>
                            </tr>

                            <tr>
                            	<th>{{$tahun2}}</th>
                                <th>{{$tahun1}}</th>
                                <th>{{$tahun}}</th>
                                <th>{{$tahun2}}</th>
                                <th>{{$tahun1}}</th>
                                <th>{{$tahun}}</th>
                            </tr>

                            <tr>
                                <td>(1)</td>
                                <td>(2)</td>
                                <td>(3)</td>
                                <td>(4)</td>
                                <td>(5)</td>
                                <td>(6)</td>
                                <td>(7)</td>
                                <td>(8)</td>
                            </tr>

                            <?php $i=1 ?>
                            @foreach($arr1 as $b)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$b['namaProdi']}}</td>
                                <td>{{$b['pengmas2']}}</td>
                                <td>{{$b['pengmas1']}}</td>
                                <td>{{$b['pengmas']}}</td>
                                <td>{{$b['danaPengmas2']}}</td>
                                <td>{{$b['danaPengmas1']}}</td>
                                <td>{{$b['danaPengmas']}}</td>
                            </tr>
                            <?php $i++?>
                            @endforeach

                            <tr>
                                <td></td>
                                <td>Total</td>
                                <td>{{$totalPengmas2}}</td>
                                <td>{{$totalPengmas1}}</td>
                                <td>{{$totalPengmas}}</td>
                                <td>{{$totalDanaPengmas2}}</td>
                                <td>{{$totalDanaPengmas1}}</td>
                                <td>{{$totalDanaPengmas}}</td>
                            </tr>

                            </table>
                            </div>

                            
                           Catatan: Kegiatan yang dilakukan bersama oleh dua PS atau lebih agar dicatat sebagai kegiatan PS yang relevansinya paling dekat.<br><br>

                          
							7.2.2  Uraikan pandangan Fakultas/Sekolah Tinggi tentang data pada butir 7.2.1 dalam perspektif: kesesuaian dengan Visi dan Misi, kecukupan, kewajaran, upaya pengembangan dan peningkatan mutu. Uraikan pula kendala-kendala yang dihadapi.<br><br>

                           <div style="width:850px;height:200px;line-height:3em;overflow:scroll;padding:5px;background-color:#edeef9;color:#000000;scrollbar-base-color:#DEBB07;">
                              {!!rawurldecode( $standar7['standar7']['7.2']['7.2.2']['isian'])!!}

                             </div>
                            

                             @if($role=='Tim Akreditasi' || $role=='Admin' )
                             @if($status==0 || $role=='Admin')
                           <a href="{{ url('3b/standar7edit/7-2-2/'.$kode_fakultas) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
                           @else
                           <a href="#" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
                           @endif
                           @endif

                           <br><br><h3>Komentar: </h3>

                            @if($role=='Tim Reviewer' || $role=='Admin' )
                            <div>
                            @if($status==1 || $role=='Admin')
                             <form action="{{url('3b/standar7/7-2/'.$kode_fakultas.'/3b/submitkomentar')}}">
                              {{csrf_field()}}
                              <div class="form-group">
                                <textarea class="form-control" id='isi-komentar' name='isi-komentar'>
                                  
                                </textarea>
                              </div>
                              <button type="submit" class="btn-primary btn-lg pull-right">Kirim Komentar</button>
                              </form>
                              @else
                              <div class="alert alert-info">
                                Borang bukan dalam masa review. Harap ganti status akreditasi terlebih dahulu.
                              </div>
                              @endif
                            </div>
                            @endif

                             <!-- komentar -->
                            <br><br><br>@foreach($komentar7_2 as $komentar7_2)
                            <div class="row">
                              <div class="col-sm-2">
                              <div class="thumbnail">
                              <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                              </div><!-- /thumbnail -->
                              </div><!-- /col-sm-1 -->

                              <div class="col-sm-10">
                              <div class="panel panel-default">
                              <div class="panel-heading">
                              <strong>{{$komentar7_2->nama}}</strong> <span class="text-muted">commented:</span><br>
                              <strong>{{$komentar7_2->date}}</strong>
                              </div>
                              

                              <div class="panel-body">
                             {!!$komentar7_2->isi!!}
                              </div><!-- /panel-body -->
                              </div><!-- /panel panel-default -->
                              </div><!-- /col-sm-5 -->
                            </div><br>
                            @endforeach


                        </div>


                    </div>
                </div>
                <!-- end of panel -->

             <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#bs-collapse" href="#three">
       7.3  Kegiatan Kerjasama dengan Instansi Lain
        </a>
      </h4>
                    </div>
                    <div id="three" class="panel-collapse collapse">
                        <div class="panel-body">


                             7.3.1  Tuliskan instansi dalam negeri yang menjalin kerjasama*  dengan Fakultas/Sekolah Tinggi dalam tiga tahun terakhir.<br><br>

                             <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                            <tr>
                                <th rowspan="2">No.</th>
                                <th rowspan="2">Nama Instansi</th>
                                <th rowspan="2">Jenis Kegiatan</th>
                                <th colspan="2">Kurun Waktu Kerja Sama</th>
                                <th rowspan="2">Manfaat yang Telah Diperoleh</th>
                         
                            </tr>

                            <tr>
                            	<th>Mulai</th>
                            	<th>Berakhir</th>
                            </tr>

                            <tr>
                                <td>(1)</td>
                                <td>(2)</td>
                                <td>(3)</td>
                                <td>(4)</td>
                                <td>(5)</td>
                                <td>(6)</td>  
                            </tr>
                            <?php $i=1?>
                            @foreach($kerjasamaDalamNegeri as $c)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$c->nama_instansi}}</td>
                                <td>{{$c->jenis_kegiatan}}</td>
                                <td>{{$c->tgl_mulai}}</td>
                                <td>{{$c->tgl_akhir}}</td>
                               <td>{{$c->manfaat}}</td>
                            </tr>
                            <?php $i++?>
                            @endforeach
                            </table>
                            </div>
                           Catatan : (*) dokumen pendukung disediakan pada saat asesmen lapangan<br><br>

                          
							7.3.2  Tuliskan instansi luar negeri yang menjalin kerjasama*  dengan Fakultas/Sekolah Tinggi dalam tiga tahun terakhir.<br>
							 <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                            <tr>
                                <th rowspan="2">No.</th>
                                <th rowspan="2">Nama Instansi</th>
                                <th rowspan="2">Jenis Kegiatan</th>
                                <th colspan="2">Kurun Waktu Kerja Sama</th>
                                <th rowspan="2">Manfaat yang Telah Diperoleh</th>
                         
                            </tr>

                            <tr>
                            	<th>Mulai</th>
                            	<th>Berakhir</th>
                            </tr>

                            <tr>
                                <td>(1)</td>
                                <td>(2)</td>
                                <td>(3)</td>
                                <td>(4)</td>
                                <td>(5)</td>
                                <td>(6)</td>  
                            </tr>

                            <?php $i=1?>
                            @foreach($kerjasamaLuarNegeri as $d)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$d->nama_instansi}}</td>
                                <td>{{$d->jenis_kegiatan}}</td>
                                <td>{{$d->tgl_mulai}}</td>
                                <td>{{$d->tgl_akhir}}</td>
                               <td>{{$d->manfaat}}</td>
                            </tr>
                            <?php $i++?>
                            @endforeach
                            </table>
                            </div>

                           	Catatan : (*) dokumen pendukung disediakan pada saat asesmen lapangan<br>


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