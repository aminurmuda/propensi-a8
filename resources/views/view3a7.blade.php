@extends('layouts.headerfooter')

@section('content')

    <!-- Page Content -->

    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h3>Borang 3A, Standar 7</h3>
            <span> Penelitian, Pelayanan/Pengabdian Kepada Masyarakat, dan Kerjasama</span>

             <a href="{{ url('3b/standar7edit/'.$kode_fakultas) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>

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
                                <th>TS-2 </th>
                                <th>TS-1</th>
                                <th>TS</th>
                            </tr>

                            <tr>
                                <td>(1)</td>
                                <td>(2)</td>
                                <td>(3)</td>
                                <td>(4)</td>
                            </tr>

                            <tr>
                                <td>Pembiayaan sendiri oleh peneliti</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>PT yang bersangkutan</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>Depdiknas</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>Institusi dalam negeri di luar Depdiknas</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>Institusi luar negri</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                             

                            </table>
                            </div>
                            Catatan: (*) sediakan data pendukung pada saat asesmen lapangan<br><br>

                            7.1.2   Adakah mahasiswa tugas akhir yang dilibatkan dalam penelitian dosen dalam tiga tahun terakhir?
                            <br>

                            <form action="">
  								<input type="radio" name="answer" value="ya"> Ya<br>
  								<input type="radio" name="answerr" value="tidak"> Tidak<br><br>

							</form>




                            <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                            <tr>
                                <th>No.</th>
                                <th>Hal</th>
                                <th>PS-1</th>
                                <th>PS-2</th>
                                <th>PS-3</th>
                                <th>dst</th>
                                <th>Total di Fakultas</th>
                            </tr>

                            <tr>
                                <td>(1)</td>
                                <td>(2)</td>
                                <td>(3)</td>
                                <td>(4)</td>
                                <td>(5)</td>
                                <td>(6)</td>
                                <td>(7)</td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Banyaknya dosen pensiun/berhenti</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Banyaknya perekrutan dosen baru</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Banyaknya dosen tugas belajar S2/Sp-1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>Banyaknya dosen tugas belajar S3/Sp-2</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
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
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td bgcolor="black"></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Laboran/Teknisi/Analis/Operator/Programer</td>
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
                                <td>3</td>
                                <td>Administrasi</td>
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