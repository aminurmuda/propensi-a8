@extends('layouts.headerfooter')

@section('content')

    <!-- Page Content -->

    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h3>Ubah Borang 3B, Standar 7</h3>
            <span> Penelitian, Pelayanan/Pengabdian Kepada Masyarakat, dan Kerjasama</span>

             <a class="btn-primary btn-lg pull-right glyphicon glyphicon-ok"> Simpan</a>

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
                            	<th>TS-2</th>
                            	<th>TS-1</th>
                            	<th>TS</th>
                            	<th>TS-2</th>
                            	<th>TS-1</th>
                            	<th>TS</th>
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

                            <tr>
                                <td>1</td>
                                <td>PS 1: ...</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>PS 2: ...</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>..</td>
                                <td>...</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>Total</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            </table>
                            </div>
                           Catatan: Kegiatan yang dilakukan bersama oleh dua PS atau lebih sebaiknya dicatat sebagai kegiatan PS yang relevansinya paling dekat. <br><br>

                            7.1.2   Uraikan pandangan pimpinan  Fakultas/Sekolah Tinggi tentang data pada butir 7.1.1, dalam perspektif: kesesuaian dengan Visi dan Misi, kecukupan, kewajaran, upaya pengembangan dan peningkatan mutu. Uraikan pula kendala-kendala yang dihadapi. 
                            <br><br>


                            @if($role=='Tim Akreditasi' || $role=='Admin' )
                           <a href="{{ url('3b/standar4edit/7-1-2/'.$kode_fakultas) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
                           @endif



                           
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
                            	<th>TS-2</th>
                            	<th>TS-1</th>
                            	<th>TS</th>
                            	<th>TS-2</th>
                            	<th>TS-1</th>
                            	<th>TS</th>
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

                            <tr>
                                <td>1</td>
                                <td>PS 1: ...</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>PS 2: ...</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>..</td>
                                <td>...</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>Total</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            </table>
                            </div>

                            
                           Catatan: Kegiatan yang dilakukan bersama oleh dua PS atau lebih agar dicatat sebagai kegiatan PS yang relevansinya paling dekat.<br><br>

                          
							7.2.2  Uraikan pandangan Fakultas/Sekolah Tinggi tentang data pada butir 7.2.1 dalam perspektif: kesesuaian dengan Visi dan Misi, kecukupan, kewajaran, upaya pengembangan dan peningkatan mutu. Uraikan pula kendala-kendala yang dihadapi.<br><br>

                           
                             @if($role=='Tim Akreditasi' || $role=='Admin' )
                           <a href="{{ url('3b/standar4edit/7-2-2/'.$kode_fakultas) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
                           @endif

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

                            <tr>
                                <td>1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                             <tr>
                                <td>2</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                             <tr>
                                <td>3</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                             <tr>
                                <td>dst.</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            

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

                            <tr>
                                <td>1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                             <tr>
                                <td>2</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                             <tr>
                                <td>3</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                             <tr>
                                <td>dst.</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            

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