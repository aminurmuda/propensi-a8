@extends('layouts.headerfooter')

@section('content')

    <!-- Page Content -->

    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h3>Borang 3A, Standar 4</h3>
            <span> Sumber Daya Manusia </span><br>
            <span> Program Studi {{$prodiBorang->nama_prodi}} </span><br>
            <span> Tahun {{$tahun}} </span>
            <br><br><br>
            <div class="panel-group wrap" id="bs-collapse">

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#bs-collapse" href="#one">
         
         4.1  Sistem Seleksi dan Pengembangan
        </a>
      </h4>
                    </div>
                    <div id="one" class="panel-collapse collapse">
                        <div class="panel-body">

                        Sistem seleksi/perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan untuk menjamin mutu penyelenggaraan program akademik.  <br><br>                          
                        <div style="width:850px;height:200px;line-height:3em;overflow:scroll;padding:5px;background-color:#edeef9;color:#000000;scrollbar-base-color:#DEBB07;">
                        {!!$standar4['standar4']['4.1']['isian']!!}
                        </div><br>

                        @if($role=='Tim Akreditasi' || $role=='Admin' )
                          <a href="{{ url('3a/standar4edit/4-1/'. $kodeProdi) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
                        @endif

                        </div>
                    </div>

                </div>
                <!-- end of panel -->

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#bs-collapse" href="#two">
       4.2  Monitoring dan Evaluasi
        </a>
      </h4>
                    </div>
                    <div id="two" class="panel-collapse collapse">
                        <div class="panel-body">


                              Jelaskan sistem monitoring dan evaluasi, serta rekam jejak kinerja akademik dosen dan kinerja tenaga kependidikan (termasuk informasi tentang ketersediaan pedoman tertulis, dan monitoring dan evaluasi kinerja dosen dalam tridarma serta dokumentasinya). <br><br>

                              <div style="width:850px;height:200px;line-height:3em;overflow:scroll;padding:5px;background-color:#edeef9;color:#000000;scrollbar-base-color:#DEBB07;">
                             {!!$standar4['standar4']['4.2']['isian']!!}
                             </div><br>
                          @if($role=='Tim Akreditasi' || $role=='Admin' )
                          <a href="{{ url('3a/standar4edit/4-2/'. $kodeProdi) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
                          @endif

                        </div>


                    </div>
                </div>
                <!-- end of panel -->

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#bs-collapse" href="#three">

          4.3 Dosen Tetap

        </a>
      </h4>
                    </div>
                    <div id="three" class="panel-collapse collapse">
                        <div class="panel-body">

                            Dosen tetap dalam borang akreditasi BAN-PT adalah dosen yang diangkat dan ditempatkan sebagai tenaga tetap pada Perguruan Tinggi yang bersangkutan; termasuk dosen penugasan Kopertis, dan dosen yayasan pada Perguruan Tinggi Swasta dalam bidang yang relevan dengan keahlian bidang studinya. Seorang dosen hanya dapat menjadi dosen tetap pada satu perguruan tinggi, dan mempunyai penugasan kerja minimum 20 jam/minggu.
                            <br><br>

                            Dosen tetap dipilah dalam 2 kelompok, yaitu:<br>

                            1) Dosen tetap yang bidang keahliannya sesuai dengan Program Studimanajemen.<br>
                            2) Dosen tetap yang bidang keahliannya di luar Program Studi manajemen <br>

                            <br>
                            4.3.1 Data dosen tetap yang bidang keahliannya sesuai dengan bidang Program Studi:
                            <br><br>
                            <div class="table-responsive">
                              <table class="table table-striped table-bordered">                            
                              <tr>
                                <th>#</th>
                                <th>Nama Dosen Tetap</th>
                                <th>NIDN**</th>
                                <th>Tgl. Lahir</th>
                                <th>Jabatan Akademik</th>
                                <th>Gelar Akademik</th>
                                <th colspan="2">Pendidikan S1, S2, S3, Asal Universitas</th>
                                <th>Bidang Keahlian untuk Setiap Jenjang Pendidikan</th>
                              </tr>
                              <tr>
                                <th scope="row">(1)</th>
                                <td>(2)</td>
                                <td>(3)</td>
                                <td>(4)</td>
                                <td>(5)</td>
                                <td>(6)</td>
                                <td colspan="2">(7)</td> 
                                <td>(8)</td>                         
                              </tr>

                          <?php $i=1; $lastrow=''; ?>
                            @foreach($standar4_3_1 as $standar4_3_1 )
                              <tr>
                              <?php
                              $jumlahrow = $standar4_3_1_occurences[$standar4_3_1 -> namaPegawai];

                              if($standar4_3_1 -> namaPegawai!=$lastrow) {
                                $belumdiprint=true;
                              }
                              ?>
                              @if($belumdiprint)
                                <th scope="row" rowspan="{{$jumlahrow}}">{{$i}}</th>
                                <td rowspan="{{$jumlahrow}}">{{$standar4_3_1 -> namaPegawai}}</td>
                                <td rowspan="{{$jumlahrow}}">{{$standar4_3_1 -> NIDN}}</td>
                                <td rowspan="{{$jumlahrow}}">{{$standar4_3_1 -> tanggal_lahir}}</td>
                                <td rowspan="{{$jumlahrow}}">{{$standar4_3_1 -> nama}}</td>
                                <?php $belumdiprint=false;?>
                              @endif
                                <td>{{$standar4_3_1 -> riwayat_pendidikan}}</td>
                                <td>{{$standar4_3_1 -> gelar_pendidikan}}</td>                          
                                <td>{{$standar4_3_1 -> instansi_pendidikan}}</td>
                                <td>{{$standar4_3_1 ->bidang_keahlian}}</td>
                              </tr>
                              <?php $i++; $lastrow=$standar4_3_1 -> namaPegawai;?>
                              @endforeach                                                                                       
                              </table>
                            </div>
                            * Fotokopi ijazah agar disiapkan saat visitasi. <br>

                            ** NIDN : Nomor Induk Dosen Nasional <br>

                            *** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***) danfotocopy sertifikatnya agar dilampirkan <br><br><br>
                            
                            
                                                        
                            4.3.2 Data dosen tetap yang bidang keahliannya di luar bidang Program Studi :
                            <br><br>
                            <div class="table-responsive">
                              <table class="table table-striped table-bordered">                            
                              <tr>
                                <th>#</th>
                                <th>Nama Dosen Tetap</th>
                                <th>NIDN**</th>
                                <th>Tgl. Lahir</th>
                                <th>Jabatan Akademik</th>
                                <th>Gelar Akademik</th>
                                <th colspan="2">Pendidikan S1, S2, S3, Asal Universitas</th>
                                <th>Bidang Keahlian untuk Setiap Jenjang Pendidikan</th>
                              </tr>
                              <tr>
                                <th scope="row">(1)</th>
                                <td>(2)</td>
                                <td>(3)</td>
                                <td>(4)</td>
                                <td>(5)</td>
                                <td>(6)</td>
                                <td colspan="2">(7)</td> 
                                <td>(8)</td>                         
                              </tr>
                              <?php $i=1 ?>
                           <?php $i=1; $lastrow=''; ?>
                            @foreach($standar4_3_2 as $standar4_3_2 )
                              <tr>
                              <?php
                              $jumlahrow = $standar4_3_2_occurences[$standar4_3_2 -> namaPegawai];

                              if($standar4_3_2 -> namaPegawai!=$lastrow) {
                                $belumdiprint=true;
                              }
                              ?>
                              @if($belumdiprint)
                                <th scope="row" rowspan="{{$jumlahrow}}">{{$i}}</th>
                                <td rowspan="{{$jumlahrow}}">{{$standar4_3_2 -> namaPegawai}}</td>
                                <td rowspan="{{$jumlahrow}}">{{$standar4_3_2 -> NIDN}}</td>
                                <td rowspan="{{$jumlahrow}}">{{$standar4_3_2 -> tanggal_lahir}}</td>
                                <td rowspan="{{$jumlahrow}}">{{$standar4_3_2 -> nama}}</td>
                                <?php $belumdiprint=false;?>
                              @endif
                                <td>{{$standar4_3_2 -> riwayat_pendidikan}}</td>
                                <td>{{$standar4_3_2 -> gelar_pendidikan}}</td>                          
                                <td>{{$standar4_3_2 -> instansi_pendidikan}}</td>
                                <td>{{$standar4_3_2 ->bidang_keahlian}}</td>
                              </tr>
                              <?php $i++; $lastrow=$standar4_3_2 -> namaPegawai;?>
                              @endforeach   
                              <!-- <tr>
                                <td rowspan="2">2</td>
                                <td rowspan="2">January</td>
                                <td rowspan="2">January</td>
                                <td rowspan="2">$100</td>
                                <td rowspan="2">$50</td>
                                <td >$50</td>
                                <td >$50</td>
                                <td >$50</td>
                              </tr>
                              <tr>
                                <td>February</td>
                                <td>$80</td>
                                <td>$80</td>
                              </tr> -->                                                            
                              </table>
                            </div>  
                            * Fotokopi ijazah agar disiapkan saat visitasi. <br>

                            ** NIDN : Nomor Induk Dosen Nasional <br>

                            *** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***) danfotocopy sertifikatnya agar dilampirkan <br><br><br>       
                                                                           
                            4.3.3 Aktivitas dosen tetap yang bidang bidang keahliannya sesuai dengan Program Studi dinyatakan dalam sks rata-rata per semester pada satu tahun akademik terakhir, diisi dengan perhitungan sesuai SK Dirjen DIKTI no. 48 tahun 1983 (12 sks setara dengan 36 jam kerja per minggu)
                            <br>
                            <br>
                            <div class="table-responsive">
                              <table class="table table-striped table-bordered">                            
                              <tr>
                                <th rowspan="2">#</th>
                                <th rowspan="2">Nama Dosen Tetap</th>
                                <th colspan="3">SKS Pengajaran pada</th>
                                <th rowspan="2">SKS Penelitian</th>
                                <th rowspan="2">SKS Pengabdian Masyarakat</th>
                                <th colspan="2">SKS Manajemen**</th>
                                <th rowspan="2">Jumlah SKS</th>
                              </tr>
                              <tr>
                                <th>PS sendiri</th>
                                <th>PS lain PT sendiri</th>
                                <th>PT lain</th>
                                <th>PT Sendiri</th>
                                <th>PT Lain</th>
                              </tr>                              
                              <tr>
                                <th scope="row">(1)</th>
                                <td>(2)</td>
                                <td>(3)</td>
                                <td>(4)</td>
                                <td>(5)</td>
                                <td>(6)</td>
                                <td>(7)</td> 
                                <td>(8)</td>                         
                                <td>(9)</td>                         
                                <td>(10)</td>                         
                              </tr>
                              <?php $i=1; 
                              $sksPengajaranPSSendiri=0;
                              $sksPengajaranPSLain=0;
                              $sksPengajaranPTLain=0;
                              $sksPenelitian=0;
                              $sksPengmas=0;
                              $sksManajemenPTSendiri=0;
                              $sksManajemenPTLain=0;
                              ?>
                            @foreach($standar4_3_3 as $standar4_3_3 )
                              <?php $jumlahSKS=0 ?>
                              <tr>
                                <th scope="row">{{$i}}</th>
                                <td>{{$standar4_3_3 -> namaPegawai}}</td>
                                @if($standar4_3_3 -> isProdiSendiri ==1)
                                <td>{{$standar4_3_3 -> sesi}}</td>
                                <?php $jumlahSKS+=$standar4_3_3 -> sesi;
                                $sksPengajaranPSSendiri+=$standar4_3_3 -> sesi;
                                ?>
                                @else
                                    <td></td>
                                @endif
                                @if($standar4_3_3 -> isProdiSendiri ==0)
                                  <td>{{$standar4_3_3 -> sesi}}</td>
                                  <?php $jumlahSKS+=$standar4_3_3 -> sesi;
                                  $sksPengajaranPSLain+=$standar4_3_3 -> sesi;
                                  ?>
                                @else 
                                  <td></td>
                                @endif
                                @if($standar4_3_3 -> isPT == 0)
                                  <td>{{$standar4_3_3 -> sesi}}</td>
                                  <?php $jumlahSKS+=$standar4_3_3 -> sesi;
                                  $sksPengajaranPTLain+=$standar4_3_3 -> sesi;?>
                                @else
                                  <td></td>
                                @endif
                                <td>{{$standar4_3_3 -> sks_penelitian}}</td>
                                <?php $jumlahSKS+=$standar4_3_3 -> sks_penelitian;
                                $sksPenelitian+=$standar4_3_3 -> sks_penelitian;
                                ?>

                                <td>{{$standar4_3_3 -> sks_pengmas}}</td>
                                <?php $jumlahSKS+=$standar4_3_3 -> sks_pengmas;
                                $sksPengmas+=$standar4_3_3 -> sks_pengmas?>
                                @if($standar4_3_3 -> isPTSendiri == 1)
                                  <td>{{$standar4_3_3 -> sks_manajemen}}</td>
                                  <?php $jumlahSKS+=$standar4_3_3 -> sks_manajemen;
                                  $sksManajemenPTSendiri+=$standar4_3_3 -> sks_manajemen;?>
                                @else
                                  <td></td>
                                @endif
                                @if($standar4_3_3 -> isPTSendiri == 0)
                                  <td>{{$standar4_3_3 -> sks_manajemen}}</td>
                                  <?php $jumlahSKS+=$standar4_3_3 -> sks_manajemen;
                                  $sksManajemenPTLain+=$standar4_3_3 -> sks_manajemen;?>
                                @else
                                  <td></td>
                                @endif
                                <td>{{$jumlahSKS}}</td>
                              </tr>
                              <?php $i++?>
                              @endforeach    
                              <tr>
                                <td colspan="2">Jumlah</td>
                                <td >{{ $sksPengajaranPSSendiri }}</td>
                                <td >{{ $sksPengajaranPSLain }}</td>
                                <td >{{ $sksPengajaranPTLain }}</td>
                                <td >{{ $sksPenelitian }}</td>
                                <td >{{ $sksPengmas }}</td>
                                <td >{{ $sksManajemenPTSendiri }}</td>                                
                                <td >{{ $sksManajemenPTLain }}</td>
                                <td >{{ $sksTotal = $sksPengajaranPSSendiri+$sksPengajaranPSLain+$sksPengajaranPTLain+$sksPenelitian+$sksPengmas+$sksManajemenPTSendiri+$sksManajemenPTLain }}</td>                                
                              </tr> 
                              <tr>
                                <td colspan="2">Rata-rata*</td>
                                <td >{{ $sksPengajaranPSSendiri/$i }}</td>
                                <td >{{ $sksPengajaranPSLain/$i }}</td>
                                <td >{{ $sksPengajaranPTLain/$i }}</td>
                                <td >{{ $sksPenelitian/$i }}</td>
                                <td >{{ $sksPengmas/$i }}</td>
                                <td >{{ $sksManajemenPTSendiri/$i }}</td>                                
                                <td >{{ $sksManajemenPTLain/$i }}</td>
                                <td >{{ $sksTotal/$i }}</td>
                              </tr>                                                                                            
                              </table>
                            </div>                             
                            Catatan:
                            <br>
                            SKS pengajaran sama dengan sks mata kuliah yang diajarkan. Bila dosen mengajar kelas paralel, maka beban sks pengajaran untuk satu tambahan kelas paralel adalah 1/2 kali sks mata kuliah. <br>
                            * rata-rata adalah jumlah sks dibagi dengan jumlah dosen tetap. <br>
                            ** sks manajemen dihitung sbb : <br>
                            Beban kerja manajemen untuk jabatan-jabatan ini adalah sbb.<br>
                           - rektor/direktur politeknik 12 sks<br>
                            - pembantu rektor/dekan/ketua sekolah tinggi/direktur akademi 10 sks<br>
                            - ketua lembaga/kepala UPT 8 sks <br>
                            - pembantu dekan/ketua jurusan/kepala pusat/ketua senat akademik/ketua senat fakultas 6 sks <br>
                            - sekretaris jurusan/sekretaris pusat/sekretaris senat akademik/sekretaris senat universitas/sekretaris senat<br>
                            - fakultas/ kepala lab. atau studio/kepala balai/ketua Program Studi 4 sks<br>
                            - sekretaris Program StudiS 3 sks<br><br>
                            Bagi Perguruan Tinggi yang memiliki struktur organisasi yang berbeda, beban kerja manajemen untuk jabatan baru disamakan dengan beban kerja jabatan yang setara.                            
                            <br>
                            <br>
                            <br>
                            4.3.4 Data aktivitas mengajar dosen tetap yang bidang keahliannya sesuai dengan Program Studi, dalam satu tahun akademik terakhir di Program Studi ini dengan mengikuti format tabel berikut :<br><br>
                            <div class="table-responsive">
                              <table class="table table-striped table-bordered">                            
                              <tr>
                                <th rowspan="2">#</th>
                                <th rowspan="2">Nama Dosen Tetap</th>
                                <th rowspan="2">Bidang Keahlian</th>
                                <th colspan="5">Tahun Akademik {{$tahun-1}}/{{$tahun}}</th>
                              </tr>
                              <tr>
                                <th>Kode Mata Kuliah</th>
                                <th>Nama Mata Kuliah</th>
                                <th>Jml Kelas</th>
                                <th>Jml Pertemuan yang Direncanakan</th>
                                <th>Jml Pertemuan yang Dilaksanakan</th>
                              </tr>                              
                              <tr>
                                <th scope="row">(1)</th>
                                <td>(2)</td>
                                <td>(3)</td>
                                <td>(4)</td>
                                <td>(5)</td>
                                <td>(6)</td>
                                <td >(7)</td> 
                                <td>(8)</td>                         
                              </tr>
                              <?php $i=1 ?>
                            @foreach($standar4_3_4 as $standar4_3_4 )
                              <tr>
                                <th scope="row">{{$i}}</th>
                                <td>{{$standar4_3_4 -> namaPegawai}}</td>
                                <td>{{$standar4_3_4 -> bidang_keahlian}}</td>
                                <td>{{$standar4_3_4 -> kode_mata_kuliah}}</td>
                                <td>{{$standar4_3_4 -> nama}}</td>
                                <td>{{$standar4_3_4 -> jumlah_kelas}}</td>
                                <td>{{$standar4_3_4 -> rencana_pengajaran}}</td>                          
                                <td>{{$standar4_3_4 -> realisasi_pengajaran}}</td>
                              </tr>
                              <?php $i++?>
                              @endforeach                                                              
                              </table>
                            </div>     
                            <br>                       
                            4.3.5 Data aktivitas mengajar dosen tetap yang bidang keahliannya di luar Program Studi, dalam satu tahun akademik terakhir di Program Studi ini dengan mengikuti format tabel berikut: <br><br>
                            <div class="table-responsive">
                              <table class="table table-striped table-bordered">                            
                              <tr>
                                <th rowspan="2">#</th>
                                <th rowspan="2">Nama Dosen Tetap</th>
                                <th rowspan="2">Bidang Keahlian</th>
                                <th colspan="5">Tahun Akademik 2016/2017</th>
                              </tr>
                              <tr>
                                <th>Kode Mata Kuliah</th>
                                <th>Nama Mata Kuliah</th>
                                <th>Jml Kelas</th>
                                <th>Jml Pertemuan yang Direncanakan</th>
                                <th>Jml Pertemuan yang Dilaksanakan</th>
                              </tr>                              
                              <tr>
                                <th scope="row">(1)</th>
                                <td>(2)</td>
                                <td>(3)</td>
                                <td>(4)</td>
                                <td>(5)</td>
                                <td>(6)</td>
                                <td >(7)</td> 
                                <td>(8)</td>                         
                              </tr>
                              <?php $i=1 ?>
                            @foreach($standar4_3_5 as $standar4_3_5 )
                              <tr>
                                <th scope="row">{{$i}}</th>
                                <td>{{$standar4_3_5 -> namaPegawai}}</td>
                                <td>{{$standar4_3_5 -> bidang_keahlian}}</td>
                                <td>{{$standar4_3_5 -> kode_mata_kuliah}}</td>
                                <td>{{$standar4_3_5 -> nama}}</td>
                                <td>{{$standar4_3_5 -> jumlah_kelas}}</td>
                                <td>{{$standar4_3_5 -> rencana_pengajaran}}</td>                          
                                <td>{{$standar4_3_5 -> realisasi_pengajaran}}</td>
                              </tr>
                              <?php $i++?>
                              @endforeach                                                                
                              </table>
                            </div>                             
                           

                        </div>
                    </div>
                </div>
                <!-- end of panel -->

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#bs-collapse" href="#four">

         4.4 Dosen Tidak Tetap

        </a>
      </h4>
                    </div>
                    <div id="four" class="panel-collapse collapse ">
                        <div class="panel-body">

                            4.4.1 Tuliskan data dosen tidak tetap pada Program Studi dengan mengikuti format tabel berikut: <br><br>
                            <div class="table-responsive">
                              <table class="table table-striped table-bordered">                            
                              <tr>
                                <th>#</th>
                                <th>Nama Dosen Tidak Tetap</th>
                                <th>NIDN**</th>
                                <th>Tgl. Lahir</th>
                                <th>Jabatan Akademik***</th>
                                <th>Gelar Akademik</th>
                                <th colspan="2">Pendidikan S1, S2, S3, Asal Universitas</th>
                              </tr>
                              <tr>
                                <th scope="row">(1)</th>
                                <td>(2)</td>
                                <td>(3)</td>
                                <td>(4)</td>
                                <td>(5)</td>
                                <td>(6)</td>
                                <td colspan="2">(7)</td>                          
                              </tr>
                              <?php $i=1; $lastrow=''; ?>
                            @foreach($standar4_4_1 as $standar4_4_1 )
                              <tr>
                              <?php
                              $jumlahrow = $standar4_4_1_occurences[$standar4_4_1 -> namaPegawai];

                              if($standar4_4_1 -> namaPegawai!=$lastrow) {
                                $belumdiprint=true;
                              }
                              ?>
                              @if($belumdiprint)
                                <th scope="row" rowspan="{{$jumlahrow}}">{{$i}}</th>
                                <td rowspan="{{$jumlahrow}}">{{$standar4_4_1 -> namaPegawai}}</td>
                                <td rowspan="{{$jumlahrow}}">{{$standar4_4_1 -> NIDN}}</td>
                                <td rowspan="{{$jumlahrow}}">{{$standar4_4_1 -> tanggal_lahir}}</td>
                                <td rowspan="{{$jumlahrow}}">{{$standar4_4_1 -> nama}}</td>
                                <?php $belumdiprint=false;?>
                              @endif
                                <td>{{$standar4_4_1 -> riwayat_pendidikan}}</td>
                                <td>{{$standar4_4_1 -> gelar_pendidikan}}</td>                          
                                <td>{{$standar4_4_1 -> instansi_pendidikan}}</td>
                              </tr>
                              <?php $i++; $lastrow=$standar4_4_1 -> namaPegawai;?>
                              @endforeach                                                             
                              </table>
                            </div>           
                            <br>                
                            4.4.2 Data aktivitas mengajar dosen tidak tetap pada satu tahun terakhir di Program Studi ini dengan mengikuti format tabel berikut:<br><br>
                            <div class="table-responsive">
                              <table class="table table-striped table-bordered">                            
                              <tr>
                                <th rowspan="2">#</th>
                                <th rowspan="2">Nama Dosen Tetap</th>
                                <th rowspan="2">Bidang Keahlian</th>
                                <th colspan="5">Tahun Akademik {{$tahun-1}}/{{$tahun}}</th>
                              </tr>
                              <tr>
                                <th>Kode Mata Kuliah</th>
                                <th>Nama Mata Kuliah</th>
                                <th>Jml Kelas</th>
                                <th>Jml Pertemuan yang Direncanakan</th>
                                <th>Jml Pertemuan yang Dilaksanakan</th>
                              </tr>                              
                              <tr>
                                <th scope="row">(1)</th>
                                <td>(2)</td>
                                <td>(3)</td>
                                <td>(4)</td>
                                <td>(5)</td>
                                <td>(6)</td>
                                <td >(7)</td> 
                                <td>(8)</td>                         
                              </tr>
                              <?php $i=1 ?>
                            @foreach($standar4_4_2 as $standar4_4_2 )
                              <tr>
                                <th scope="row">{{$i}}</th>
                                <td>{{$standar4_4_2 -> namaPegawai}}</td>
                                <td>{{$standar4_4_2 -> bidang_keahlian}}</td>
                                <td>{{$standar4_4_2 -> kode_mata_kuliah}}</td>
                                <td>{{$standar4_4_2 -> nama}}</td>
                                <td>{{$standar4_4_2 -> jumlah_kelas}}</td>
                                <td>{{$standar4_4_2 -> rencana_pengajaran}}</td>                  
                                <td>{{$standar4_4_2 -> realisasi_pengajaran}}</td>
                              </tr>
                              <?php $i++?>
                              @endforeach                                                             
                              </table>
                            </div>                             

                           

                        </div>
                    </div>
                </div>
                <!-- end of panel -->


                 <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#bs-collapse" href="#five">

          4.5 Upaya Peningkatan Sumber Daya Manusia (SDM) dalam tiga tahun terakhir

        </a>
      </h4>
                    </div>
                    <div id="five" class="panel-collapse collapse">
                        <div class="panel-body">
                    4.5.1 Kegiatan tenaga ahli/pakar sebagai pembicara dalam seminar/pelatihan, pembicara tamu, dsb, dari luar Perguruan Tinggi sendiri (tidak termasuk dosen tidak tetap)<br><br>
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nama Tenaga Ahli/Pakar</th>
                          <th>Nama dan Judul Kegiatan</th>
                          <th>Waktu Pelaksanaan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th >(1)</th>
                          <td >(2)</td>
                          <td>(3)</td>
                          <td>(4)</td>
                        </tr>
                        <?php $i=1 ?>
                        @foreach($standar4_5_1 as $standar4_5_1)                     
                        <tr>
                          <th scope="row">{{$i}}</th>
                          <td>{{$standar4_5_1 -> namaPegawai}}</td>
                          <td>{{$standar4_5_1 -> nama_kegiatan}}</td>
                          <td>{{$standar4_5_1 -> waktu}}</td>
                        </tr>
                        <?php $i++ ?>
                        @endforeach
                      </tbody>
                    </table>                    
                    </div>
                    <br>
                    4.5.2. Peningkatan kemampuan dosen tetap melalui program tugas belajar dalam bidang yang sesuai dengan bidang Program Studi<br><br>
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nama Dosen</th>
                          <th>Jenjang Pendidikan Lanjut</th>
                          <th>Bidang Studi</th>
                          <th>Perguruan Tinggi</th>
                          <th>Negara</th>
                          <th>Tahun Mulai Studi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <tr>
                          <th scope="row">(1)</th>
                          <td>(2)</td>
                          <td>(3)</td>
                          <td>(4)</td>
                          <td>(5)</td>
                          <td>(6)</td>
                          <td>(7)</td>                          
                        </tr>
                        <?php $i=1 ?>
                      @foreach($standar4_5_2 as$standar4_5_2 )
                        <tr>
                          <th scope="row">{{$i}}</th>
                          <td>{{$standar4_5_2 -> namaPegawai}}</td>
                          <td>{{$standar4_5_2 -> jenjang_lanjut}}</td>
                          <td>{{$standar4_5_2 -> bidang_studi}}</td>
                          <td>{{$standar4_5_2 -> perguruan_tinggi}}</td>
                          <td>{{$standar4_5_2 -> negara}}</td>
                          <td>{{$standar4_5_2 -> tahun_mulai}}</td>                          
                        </tr>
                        <?php $i++?>
                        @endforeach
                      </tbody>
                    </table>                    
                    </div>            
                    <br>        
                    4.5.3. Kegiatan dosen tetap yang bidang keahliannya sesuai dengan Program Studi dalam seminar ilmiah/ lokakarya/ penataran/ workshop/ pagelaran/ pameran/ peragaan yang tidak hanya melibatkan dosen Perguruan Tinggi sendiri.<br><br>
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th rowspan="2">#</th>
                          <th rowspan="2">Nama Dosen</th>
                          <th rowspan="2" colspan="2">Jenis Kegiatan*</th>
                          <th rowspan="2">Tempat</th>
                          <th rowspan="2">Waktu</th>
                          <th colspan="2">Sebagai</th>
                        </tr>
                        <tr>
                          <th>Penyaji</th>
                          <th>Peserta</th>
                        </tr>                        
                      </thead>
                      <tbody>
                        <tr>
                          <th >(1)</th>
                          <td >(2)</td>
                          <td colspan="2">(3)</td>
                          <td>(4)</td>
                          <td>(5)</td>
                          <td>(6)</td>                          
                          <td>(7)</td>
                        </tr>

                        <?php $i=1 ?>
                        @foreach($standar4_5_3 as $standar4_5_3)                     
                        <tr>
                          <th scope="row">{{$i}}</th>
                          <td>{{$standar4_5_3 -> namaPegawai}}</td>
                          <td>{{$standar4_5_3 -> jenis}}</td>
                          <td>{{$standar4_5_3 -> nama_kegiatan}}</td>
                          <td>{{$standar4_5_3 -> tempat}}</td>                          
                            <td>{{$standar4_5_3 -> waktu}}</td>
                            @if($standar4_5_3 ->peran=='Penyaji') 
                                <td>V</td>
                                @else
                                <td></td>
                            @endif
                            @if($standar4_5_3 ->peran=='Peserta') 
                                <td>V</td>
                                @else
                                <td></td>
                            @endif
                        </tr>
                        <?php $i++ ?>
                        @endforeach

                        <!-- <tr>
                          <th scope="row" rowspan="2">1</th>
                          <td rowspan="2">Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                          <td>Mark</td>                          
                          <td>Mark</td>
                          <td>Mark</td>
                        </tr>
                        <tr>
                          <td>Otto</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                          <td>Mark</td>                          
                          <td>Mark</td>
                          <td>Otto</td>                                                  
                        </tr>                        
                        <tr>
                          <th scope="row" colspan="6">TOTAL</th>                         
                          <td>@mdo</td>
                          <td>Mark</td>                                                    
                        </tr> -->
                      </tbody>
                    </table>                    
                    </div>  
                    <br>                   
                    4.5.4 Pencapaian prestasi/reputasi dosen (misalnya prestasi dalam pendidikan, penelitian dan pelayanan/pengabdian kepada masyarakat).<br><br>
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nama Dosen</th>
                          <th>Prestasi yang Dicapai</th>
                          <th>Waktu Pencapaian</th>
                          <th>Tingkat(Lokal, Nasional, Internasional)</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">(1)</th>
                          <td>(2)</td>
                          <td>(3)</td>
                          <td>(4)</td>
                          <td>(5)</td>                          
                        </tr> 
                        <?php $i=1 ?>
                        @foreach($standar4_5_4 as $standar4_5_4)                     
                        <tr>
                          <th scope="row">{{$i}}</th>
                          <td>{{$standar4_5_4 -> namaPegawai}}</td>
                          <td>{{$standar4_5_4 -> nama}}</td>
                          <td>{{$standar4_5_4 -> waktu}}</td>
                          <td>{{$standar4_5_4 -> tingkat}}</td>                          
                        </tr>
                        <?php $i++ ?>
                        @endforeach
                      </tbody>
                    </table>                    
                    </div>              
                    <br>        
                    4.5.5 Keikutsertaan dosen tetap dalam organisasi keilmuan atau organisasi profesi.<br><br>
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nama Dosen</th>
                          <th>Nama Organisasi Keilmuan atau Organisasi Profesi</th>
                          <th>Kurun Waktu</th>
                          <th>Tingkat(Lokal, Nasional, Internasional)</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">(1)</th>
                          <td>(2)</td>
                          <td>(3)</td>
                          <td>(4)</td>
                          <td>(5)</td>                          
                        </tr> 
                        <?php $i=1 ?>
                        @foreach($standar4_5_5 as $standar4_5_5)                     
                        <tr>
                          <th scope="row">{{$i}}</th>
                          <td>{{$standar4_5_5 -> namaPegawai}}</td>
                          <td>{{$standar4_5_5 -> nama}}</td>
                          <?php
                          if (is_null($standar4_5_5 -> tahun_selesai)) {
                          $kurun_waktu= date('Y') - $standar4_5_5 -> tahun_mulai . " tahun";  
                          } else {
                                                    $kurun_waktu= $standar4_5_5 -> tahun_selesai - $standar4_5_5 -> tahun_mulai. " tahun";}
                          ?>
                          <td>{{$kurun_waktu}}</td>
                          <td>{{$standar4_5_5 -> tingkat}}</td>
                        </tr>
                        <?php $i++ ?>
                        @endforeach
                      </tbody>
                    </table>                    
                    </div>                      

                        </div>
                    </div>
                </div>
                <!-- end of panel -->

                 <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#bs-collapse" href="#six">

          4.6 Tenaga Kependidikan

        </a>
      </h4>
                    </div>
                    <div id="six" class="panel-collapse collapse">
                        <div class="panel-body">

                    4.6.1 Tenaga kependidikan
                    <br>Tuliskan data tenaga kependidikan yang ada di Program Studi, Jurusan, Fakultas atau Perguruan Tinggi yang melayani mahasiswa Program Studi dengan mengikuti format tabel berikut:<br><br>
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th rowspan="2">#</th>
                          <th rowspan="2">Jenis Tenaga Penunjang</th>
                          <th colspan="8">Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir</th>
                          <th rowspan="2">Unit Kerja</th>
                        </tr>
                        <tr>
                          <th>S3</th>
                          <th>S2</th>
                          <th>S1</th>
                          <th>D4</th>
                          <th>D3</th>
                          <th>D2</th>
                          <th>D1</th>
                          <th>SMA/SMK</th>
                        </tr>                        
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Pustakawan*</td>
                          @foreach($arrA as $arrA_value)
                          <td>{{$arrA_value}}</td>     
                          @endforeach
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Laboran/teknisi/analis/operator/programmer</td>
                          @foreach($arrB as $arrB_value)
                          <td>{{$arrB_value}}</td>     
                          @endforeach                                                    
                        </tr>   
                        <tr>
                          <th scope="row">3</th>
                          <td>Administrasi</td>
                          @foreach($arrC as $arrC_value)
                          <td>{{$arrC_value}}</td>     
                          @endforeach                                                    
                        </tr>                           
                        <tr>
                          <th scope="row" colspan="2">Jumlah</th>
                          @foreach($arrD as $arrD_value)
                          <td>{{$arrD_value}}</td>     
                          @endforeach                                                   
                        </tr>
                      </tbody>
                    </table>                    
                    </div>   
                    <br>                 
                    4.6.2 Jelaskan upaya yang telah dilakukan Program Studi dalam meningkatkan kualifikasi dan kompetensi tenaga kependidikan. <br><br>
                          
                            <div style="width:850px;height:200px;line-height:3em;overflow:scroll;padding:5px;background-color:#edeef9;color:#000000;scrollbar-base-color:#DEBB07;">
                            {!!$standar4['standar4']['4.6']['4.6.2']['isian']!!}
                            </div><br>
                            
                            @if($role=='Tim Akreditasi' || $role=='Admin' )
                          <a href="{{ url('3a/standar4edit/4-6-2/'. $kodeProdi) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
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