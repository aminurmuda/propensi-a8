@extends('layouts.headerfooter')

@section('content')

    <!-- Page Content -->

    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h3>Borang 3B, Standar 4</h3>
            <span> Sumber Daya Manusia</span>

             <a href="{{ url('3b/standar4edit/'.$kode_fakultas) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>

            <br><br><br>
            <div class="panel-group wrap" id="bs-collapse">

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#bs-collapse" href="#one">
         
         4.1 Dosen Tetap
        </a>
      </h4>
                    </div>
                    <div id="one" class="panel-collapse collapse">
                        <div class="panel-body">
                            Dosen tetap dalam borang akreditasi BAN-PT adalah dosen yang diangkat dan ditempatkan sebagai tenaga tetap pada PT yang bersangkutan; termasuk dosen penugasan Kopertis, dan dosen yayasan pada PTS dalam bidang yang relevan dengan keahlian bidang studinya. Seorang dosen hanya dapat menjadi dosen tetap pada satu perguruan tinggi, dan mempunyai penugasan kerja minimum 20 jam/minggu.
                             <br><br>

                             Dosen tetap dipilah dalam 2 kelompok, yaitu:<br>
							1. dosen tetap yang bidang keahliannya sesuai dengan PS<br>
							2. dosen tetap yang bidang keahliannya di luar PS<br><br>


                            4.1.1  Tuliskan jumlah dosen tetap yang bidang keahliannya sesuai dengan masing-masing PS di lingkungan Fakultas/Sekolah Tinggi, berdasarkan jabatan fungsional dan pendidikan tertinggi, dengan mengikuti format tabel berikut:<br><br>

                            <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                            <tr>
                                <th rowspan="2">No.</th>
                                <th rowspan="2">Hal </th>
                                <th colspan={{$jumlahProdi}}>Jumlah Dosen Tetap yang Bertugas pada Program Studi:</th>
                                <th rowspan="2">Total di Fakultas</th>
                            </tr>

                            <tr>
                                @foreach($listProdi as $listProdi)
                                <th>{{$listProdi->nama_prodi}}</th>
                                @endforeach
                                
                            </tr>

                            <tr>
                                <td>(1)</td>
                                <td>(2)</td>
                                @for($i = 3; $i <= 3+$jumlahProdi; $i++)
                                <td>({{$i}})</td>
                                @endfor
                            </tr>

                             <tr>
                                <td><b>A</b></td>
                                <td><b>Jabatan Fungsional:</b></td>
                                @for($i = 3; $i <= 3+$jumlahProdi; $i++)
                                <td></td>
                                @endfor
                            </tr>
                            

                            <tr>

                                <td>1</td>
                                <td>Asisten Ahli/Tenaga Pengajar</td>
                                @foreach($arr as $b)
                                <td>{{$b['asistenAhli']}}</td>
                                @endforeach
                                <td></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Lektor</td>
                                @foreach($arr as $c)
                                <td>{{$c['lektor']}}</td>
                                @endforeach
                                <td></td>
                            </tr>

                              <tr>
                                <td>3</td>
                                <td>Lektor Kepala</td>
                                @foreach($arr as $c)
                                <td>{{$c['lektorKepala']}}</td>
                                @endforeach
                                <td></td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>Guru Besar/Profesor</td>
                                @foreach($arr as $c)
                                <td>{{$c['guruBesar']}}</td>
                                @endforeach
                                <td></td>
                            </tr>

                            <tr>
                                <td colspan="2"><b>Total</b></td>
                                @foreach($arr as $c)
                                <td><b>{{$c['total']}}</b></td>
                                @endforeach
                                <td><b>{{$totalFakultas}}</b></td>
                            </tr>

                            <tr>
                                <td><b>B</b></td>
                                <td><b>Pendidikan Tertinggi</b></td>
                                @for($i = 3; $i <= 3+$jumlahProdi; $i++)
                                <td></td>
                                @endfor
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>S1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>S2/Profesi/Sp-1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>S3/Sp-2</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td colspan="2"><b>Total</b></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            </table>
                            </div>


                            <br><br>
                            4.1.2   Tuliskan banyaknya penggantian dan perekrutan serta pengembangan dosen tetap yang bidang keahliannya sesuai dengan program studi pada Fakultas/Sekolah Tinggi dalam tiga tahun terakhir dengan mengikuti format tabel berikut:<br>

                            <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                            <tr>
                                <th>No.</th>
                                <th>Hal</th>
                                @foreach($listProdi1 as $listProdi1)
                                <th>{{$listProdi1->nama_prodi}}</th>
                                @endforeach
                                <th>Total di Fakultas</th>
                            </tr>

                            <tr>
                                <td>(1)</td>
                                <td>(2)</td>
                                @for($i = 3; $i <= 3+$jumlahProdi; $i++)
                                <td>({{$i}})</td>
                                @endfor
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Banyaknya dosen pensiun/berhenti</td>
                                @for($i = 3; $i <= 3+$jumlahProdi; $i++)
                                <td></td>
                                @endfor
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Banyaknya perekrutan dosen baru</td>
                                @for($i = 3; $i <= 3+$jumlahProdi; $i++)
                                <td></td>
                                @endfor
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Banyaknya dosen tugas belajar S2/Sp-1</td>
                                @for($i = 3; $i <= 3+$jumlahProdi; $i++)
                                <td></td>
                                @endfor
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>Banyaknya dosen tugas belajar S3/Sp-2</td>
                                @for($i = 3; $i <= 3+$jumlahProdi; $i++)
                                <td></td>
                                @endfor
                            </tr>

                            </table>
                            </div>
                            <br>

                            4.1.3    Uraikan pandangan Fakultas/Sekolah Tinggi tentang data pada butir 4.1.1 dan 4.1.2, yang mencakup aspek: kecukupan, kualifikasi, dan pengembangan karir. Jelaskan kendala yang ada dalam pengembangan tenaga dosen tetap<br><br>

                            <div class="form-group">
                              <textarea class="form-control" rows="5" readonly>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut iaculis risus condimentum eros dapibus, elementum molestie purus bibendum. Vivamus malesuada vel urna vel dapibus. Nam et ligula varius, scelerisque urna eget, blandit quam. Aliquam ex elit, sollicitudin et laoreet sit amet, tristique ac odio. Aenean dignissim justo augue, sit amet consequat mi scelerisque ac. Nam lobortis tristique est eget aliquam. Sed sit amet vestibulum lectus, in congue magna.

                              </textarea>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end of panel -->

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#bs-collapse" href="#two">
       4.2  Tenaga kependidikan
        </a>
      </h4>
                    </div>
                    <div id="two" class="panel-collapse collapse">
                        <div class="panel-body">


                             Tuliskan data tenaga kependidikan  yang ada di Fakultas atau PT yang melayani mahasiswa PS dengan mengikuti format tabel berikut: <br><br>

                             <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                            <tr>
                                <th rowspan="2">No.</th>
                                <th rowspan="2">Jenis Tenaga Kependidikan</th>
                                <th colspan="8">Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir </th>
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

                            <tr>
                                <td>(1)</td>
                                <td>(2)</td>
                                <td>(3)</td>
                                <td>(4)</td>
                                <td>(5)</td>
                                <td>(6)</td>
                                <td>(7)</td>
                                <td>(8)</td>
                                <td>(9)</td>
                                <td>(10)</td>
                                <td>(11)</td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Pustakawan *</td>
                                @foreach($arrA as $arrA_value)
                                <td>{{$arrA_value}}</td>     
                                @endforeach
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Laboran/Teknisi/Analis/Operator/Programer</td>
                                @foreach($arrB as $arrB_value)
                                <td>{{$arrB_value}}</td>     
                                @endforeach
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Administrasi</td>
                                @foreach($arrC as $arrC_value)
                                <td>{{$arrC_value}}</td>     
                                @endforeach
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>Lainnya</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td colspan="2"><b>Total</b></td>
                                @foreach($arrD as $arrD_value)
                                <td>{{$arrD_value}}</td>     
                                @endforeach
                            </tr>

                            </table>
                            </div>
                            *Hanya yang memiliki pendidikan formal dalam bidang perpustakaan<br><br>


                             Uraikan pandangan Fakultas tentang data di atas yang mencakup aspek: kecukupan, dan kualifikasi. Jelaskan kendala yang ada dalam pengembangan tenaga kependidikan.<br><br>

                             <div class="form-group">
                              <textarea class="form-control" rows="5" readonly>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut iaculis risus condimentum eros dapibus, elementum molestie purus bibendum. Vivamus malesuada vel urna vel dapibus. Nam et ligula varius, scelerisque urna eget, blandit quam. Aliquam ex elit, sollicitudin et laoreet sit amet, tristique ac odio. Aenean dignissim justo augue, sit amet consequat mi scelerisque ac. Nam lobortis tristique est eget aliquam. Sed sit amet vestibulum lectus, in congue magna.

                              </textarea>
                            </div>

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