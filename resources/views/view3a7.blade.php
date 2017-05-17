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
            <h3>Borang 3A, Standar 7</h3>
            <span> Penelitian, Pelayanan/Pengabdian Kepada Masyarakat, dan Kerjasama</span><br>
            <span> Program Studi {{$prodiBorang->nama_prodi}}, Universitas Indonesia </span><br>

            <span> Tahun {{$tahun}} </span>
            <br><br><br>
            <div class="panel-group wrap" id="bs-collapse">

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#bs-collapse" href="#one">
         
         7.1 Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS
        </a>
      </h4>
                    </div>
                    <div id="one" class="panel-collapse collapse">
                        <div class="panel-body">
                            7.1.1   Tuliskan jumlah judul penelitian* yang sesuai dengan bidang keilmuan PS, yang dilakukan oleh dosen tetap yang bidang keahliannya sesuai dengan PS selama tiga tahun terakhir dengan mengikuti format tabel berikut:
                             <br><br>

                            <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                            <tr>
                                <th>Sumber Pembiayaan</th>
                                @for($i = $tahun-2; $i<=$tahun; $i++)
                                <th>{{$i}}</th>
                                @endfor
                            </tr>

                            <tr>
                                <td>(1)</td>
                                <td>(2)</td>
                                <td>(3)</td>
                                <td>(4)</td>
                            </tr>

                            <tr>
                                <td>Pembiayaan sendiri oleh peneliti</td>
                                 @foreach($arrA as $arrA_value)
                                 <td>{{$arrA_value}}</td>
                                @endforeach
                            </tr>

                            <tr>
                                <td>PT yang bersangkutan</td>
                                 @foreach($arrB as $arrB_value)
                                 <td>{{$arrB_value}}</td>
                                @endforeach
                            </tr>

                            <tr>
                                <td>Depdiknas</td>
                                @foreach($arrC as $arrC_value)
                                 <td>{{$arrC_value}}</td>
                                @endforeach
                               
                            </tr>

                            <tr>
                                <td>Institusi dalam negeri di luar Depdiknas</td>
                                 @foreach($arrD as $arrD_value)
                                 <td>{{$arrD_value}}</td>
                                @endforeach
                            </tr>

                            <tr>
                                <td>Institusi luar negri</td>
                                 @foreach($arrE as $arrE_value)
                                 <td>{{$arrE_value}}</td>
                                @endforeach
                            </tr>
                             

                            </table>
                            </div>
                            Catatan: (*) sediakan data pendukung pada saat asesmen lapangan<br><br>

                            7.1.2   Adakah mahasiswa tugas akhir yang dilibatkan dalam penelitian dosen dalam tiga tahun terakhir?
                            <br>


							Jika ada, banyaknya mahasiswa PS yang ikut serta dalam penelitian dosen adalah  ... orang, dari ... mahasiswa yang melakukan tugas akhir melalui skripsi<br><br>

                            <div style="width:850px;height:200px;line-height:3em;overflow:scroll;padding:5px;background-color:#edeef9;color:#000000;scrollbar-base-color:#DEBB07;">
                            {!!rawurldecode($standar7['standar7']['7.1']['7.1.2']['isian'])!!}
                    
                            </div><br>

                             @if($role=='Tim Akreditasi' || $role=='Admin' )
                             @if($status==0 || $role=='Admin')
                             <a href="{{ url('3a/standar7edit/7-1-2/'. $idHistori) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a><br>
                             @else
                             <a href="#" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a><br>
                              @endif
                            @endif

                            <br><h3>Komentar: </h3>
                             

                            @if($role=='Tim Reviewer' || $role=='Admin' )
                            <div>
                            @if($status==1 || $role=='Admin')
                             <form action="{{url('3a/standar7/7-1/'.$kodeProdi.'/'.$idHistori.'/3A/submitkomentar')}}">
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



							<br><br><br><br>7.1.3  Tuliskan judul artikel ilmiah/karya ilmiah/karya seni/buku yang dihasilkan selama tiga tahun terakhir oleh dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format tabel berikut:<br>

                            <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                            <tr>
                                <th rowspan="2">No.</th>
                                <th rowspan="2">Judul</th>
                                <th rowspan="2">Nama-nama Dosen</th>
                                <th rowspan="2">Dihasilkan/Dipublikasikan pada</th>
                                <th rowspan="2">Tahun Penyajian/Publikasi</th>
                                <th colspan="3">Tingkat*</th>
                            </tr>

                            <tr>
                                    <th>Lokal</th>
                                    <th>Nasional</th>
                                    <th>Internasional</th>
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

                            <?php 
                            $i=1;
                            $jumlahLokal=0;
                            $jumlahNasional=0;
                            $jumlahInternasional=0;
                            ?>
                            @foreach($standar7_1_3 as $standar7_1_3)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$standar7_1_3->nama}}</td>
                                <td>{{$standar7_1_3->Pengaju}}</td>
                                <td>{{$standar7_1_3->lokasi}}</td>
                                <td>{{$standar7_1_3->tanggal_selesai}}</td>
                                @if($standar7_1_3->tingkat=='Lokal')
                                <td>V</td>
                                 <?php
                                $jumlahLokal+=1?>
                                @else
                                <td></td>
                                @endif
                                @if($standar7_1_3->tingkat=='Nasional')
                                <td>V</td>
                                <?php
                                $jumlahNasional+=1?> 
                                @else
                                <td></td>
                                @endif
                                 @if($standar7_1_3->tingkat=='Internasional')
                                <td>V</td> 
                                <?php
                                $jumlahInternasional+=1?>
                                @else
                                <td></td>
                                @endif  
                            </tr>
                            <?php
                            $i++;
                            ?>
                            @endforeach
                            <tr>
                                <td colspan="5">Jumlah</td>
                                <td>{{$jumlahLokal}}</td>
                                <td>{{$jumlahNasional}}</td>
                                <td>{{$jumlahInternasional}}</td>
                            </tr>

                            </table>
                            </div>
                            Catatan: * = Tuliskan banyaknya dosen pada sel yang sesuai
                            <br><br>

                            7.1.4  Sebutkan karya dosen dan atau mahasiswa Program Studi yang telah memperoleh/sedang memproses perlindungan Hak atas Kekayaan Intelektual (HaKI) selama tiga tahun terakhir.<br><br>

                             <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                            <tr>
                                <th>No.</th>
                                <th>Karya*</th>
                            </tr>

                            <tr>
                                <td>(1)</td>
                                <td>(2)</td>
                              
                            </tr>

                            <?php 
                            $i=1;
                            ?>
                            @foreach($standar7_2_3 as $standar7_2_3)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$standar7_2_3->nama}}</td>
                               
                            </tr>
                             <?php
                            $i++;
                            ?>
                            @endforeach
                           
                            </table>
                            </div>
                            * Lampirkan surat paten HaKI atau keterangan sejenis.<br>

                           
                        </div>
                    </div>

                </div>
                <!-- end of panel -->

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#bs-collapse" href="#two">
       7.2  Kegiatan Pelayanan/Pengabdian kepada Masyarakat (PKM)
        </a>
      </h4>
                    </div>
                    <div id="two" class="panel-collapse collapse">
                        <div class="panel-body">


                             7.2.1  Tuliskan jumlah kegiatan Pelayanan/Pengabdian kepada Masyarakat (*) yang sesuai dengan bidang keilmuan PS selama tiga tahun terakhir yang dilakukan oleh dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format tabel berikut:<br><br>

                             <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                            <tr>
                                <th>Sumber Dana Kegiatan Pelayanan/Pengabdian kepada Masyarakat</th>
                                @for($i = $tahun-2; $i<=$tahun; $i++)
                                <th>{{$i}}</th>
                                @endfor
                            </tr>

                            <tr>
                                <td>(1)</td>
                                <td>(2)</td>
                                <td>(3)</td>
                                <td>(4)</td>
                               
                            </tr>

                            <tr>
                                <td>Pembiayaan sendiri oleh dosen</td>
                                 @foreach($arr1 as $arr1_value)
                                 <td>{{$arr1_value}}</td>
                                @endforeach
                
                            </tr>

                            <tr>
                                <td>PT yang bersangkutan</td>
                                @foreach($arr2 as $arr2_value)
                                 <td>{{$arr2_value}}</td>
                                @endforeach
                               
                            </tr>

                            <tr>
                                <td>Depdiknas</td>
                                @foreach($arr3 as $arr3_value)
                                 <td>{{$arr3_value}}</td>
                                @endforeach
                            </tr>

                            <tr>
                                <td>Institusi dalam negeri di luar Depdiknas</td>
                                @foreach($arr4 as $arr4_value)
                                 <td>{{$arr4_value}}</td>
                                @endforeach
                               
                            </tr>

                            <tr>
                                <td>Institusi luar negeri</td>
                                 @foreach($arr5 as $arr5_value)
                                 <td>{{$arr5_value}}</td>
                                @endforeach
                               
                            </tr>

                            </table>
                            </div>
                           Catatan: (*) Pelayanan/Pengabdian kepada Masyarakat adalah penerapan bidang ilmu untuk menyelesaikan masalah di masyarakat (termasuk masyarakat industri, pemerintah, dsb.)<br><br>

                           7.2.2   Adakah mahasiswa yang dilibatkan dalam kegiatan pelayanan/pengabdian kepada masyarakat dalam tiga tahun terakhir?<br>

						  Jika Ya, jelaskan tingkat partisipasi dan bentuk keterlibatan mahasiswa dalam kegiatan pelayanan/pengabdian kepada masyarakat.

                        <div style="width:850px;height:200px;line-height:3em;overflow:scroll;padding:5px;background-color:#edeef9;color:#000000;scrollbar-base-color:#DEBB07;">
                        {!!rawurldecode($standar7['standar7']['7.2']['7.2.2']['isian'])!!}
                        </div><br>
                             @if($role=='Tim Akreditasi' || $role=='Admin' )
                             @if ($status==0 || $role=='Admin')
                             <a href="{{ url('3a/standar7edit/7-2-2/'. $idHistori) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a><br>
                             @else
                             <a href="#" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a><br>
                              @endif
                            @endif

                            <br><h3>Komentar: </h3>
                            

                            @if($role=='Tim Reviewer' || $role=='Admin' )
                            <div>
                            @if($status==1 || $role=='Admin')
                             <form action="{{url('3a/standar7/7-2/'.$kodeProdi.'/'.$idHistori.'/3A/submitkomentar')}}">
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


                             7.3.1  Tuliskan instansi dalam negeri yang menjalin kerjasama* yang terkait dengan program studi/jurusan dalam tiga tahun terakhir.<br><br>

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
                             <?php 
                            $i=1;
                            ?>
                            @foreach($standar7_3_1 as $standar7_3_1)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$standar7_3_1->nama_instansi}}</td>
                                <td>{{$standar7_3_1->jenis_kegiatan}}</td>
                                <td>{{$standar7_3_1->tgl_mulai}}</td>
                                <td>{{$standar7_3_1->tgl_akhir}}</td>
                                <td>{{$standar7_3_1->manfaat}}</td>
                            </tr>
                            <?php
                            $i++;
                            ?>
                            @endforeach
                            </table>
                            </div>
                           Catatan : (*) dokumen pendukung disediakan pada saat asesmen lapangan<br><br>

                          
							7.3.2  Tuliskan instansi luar negeri yang menjalin kerjasama* yang terkait dengan program studi/jurusan dalam tiga tahun terakhir.<br>
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
                             <?php 
                            $i=1;
                            ?>
                            @foreach($standar7_3_2 as $standar7_3_2)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$standar7_3_2->nama_instansi}}</td>
                                <td>{{$standar7_3_2->jenis_kegiatan}}</td>
                                <td>{{$standar7_3_2->tgl_mulai}}</td>
                                <td>{{$standar7_3_2->tgl_akhir}}</td>
                                <td>{{$standar7_3_2->manfaat}}</td>
                            </tr>
                            <?php
                            $i++;
                            ?>
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