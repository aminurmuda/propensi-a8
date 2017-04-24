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
                                {{ $standar2['standar2']['2.1']['judul'] }}
                            </a>
                        </h4>
                    </div>

                    <div id="one" class="panel-collapse collapse">
                        <div class="panel-body">
                        {{ $standar2['standar2']['2.1']['narasi'] }}<br><br>
                        {{ $standar2['standar2']['2.1']['perintah'] }}<br><br>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" readonly>
                                    {{ $standar2['standar2']['2.1']['isian'] }}
                                </textarea>
                            </div>
                            <a href="{{ url('3a/standar2edit/2.1/'.$kode_fakultas) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
                            <br><br>
                        </div>
                    </div>
                </div>
                <!-- end of panel -->

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#bs-collapse" href="#two"> 
                                {{ $standar2['standar2']['2.2']['judul'] }}
                            </a>
                        </h4>
                    </div>

                    <div id="two" class="panel-collapse collapse">
                        <div class="panel-body">
                        {{ $standar2['standar2']['2.2']['narasi'] }}<br><br>
                        {{ $standar2['standar2']['2.2']['perintah'] }}<br><br>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" readonly>
                                    {{ $standar2['standar2']['2.2']['isian'] }}
                                </textarea>
                            </div>
                            <a href="{{ url('3a/standar2edit/2.2/'.$kode_fakultas) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
                            <br><br>
                        </div>
                    </div>
                </div>
                <!-- end of panel -->

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#bs-collapse" href="#three"> 
                                {{ $standar2['standar2']['2.3']['judul'] }}
                            </a>
                        </h4>
                    </div>

                    <div id="three" class="panel-collapse collapse">
                        <div class="panel-body">
                        {{ $standar2['standar2']['2.3']['narasi'] }}<br><br>
                        {{ $standar2['standar2']['2.3']['perintah'] }}<br><br>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" readonly>
                                    {{ $standar2['standar2']['2.3']['isian'] }}
                                </textarea>
                            </div>
                            <a href="{{ url('3a/standar2edit/2.3/'.$kode_fakultas) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
                            <br><br>
                        </div>
                    </div>
                </div>
                <!-- end of panel -->

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#bs-collapse" href="#four"> 
                                {{ $standar2['standar2']['2.4']['judul'] }}
                            </a>
                        </h4>
                    </div>

                    <div id="four" class="panel-collapse collapse">
                        <div class="panel-body">
                        {{ $standar2['standar2']['2.4']['perintah'] }}<br><br>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" readonly>
                                    {{ $standar2['standar2']['2.4']['isian'] }}
                                </textarea>
                            </div>
                            <a href="{{ url('3a/standar2edit/2.4/'.$kode_fakultas) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
                            <br><br>
                        </div>
                    </div>
                </div>
                <!-- end of panel -->


                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#bs-collapse" href="#five">
                                {{ $standar2['standar2']['2.5']['judul'] }}
                            </a>
                        </h4>
                    </div>

                    <div id="five" class="panel-collapse collapse">
                        <div class="panel-body">
                            {{ $standar2['standar2']['2.5']['perintah'] }}
                            <br><br>

                            <table>
                                <tr>
                                    <th>Umpan Balik dari</th>
                                    <th>Isi Umpan Balik</th>
                                    <th>Tindak Lanjut</th>
                                </tr>
                                <tr>
                                    <th>(1)</td>
                                    <th>(2)</td>
                                    <th>(3)</td>
                                </tr>
                                <tr>
                                    <td>Dosen</td>
                                    <td><textarea readonly>{{ $standar2['standar2']['2.5']['isian']['Dosen']['Isi Umpan Balik'] }}</textarea></td>
                                    <td><textarea readonly>{{ $standar2['standar2']['2.5']['isian']['Dosen']['Tindak Lanjut'] }}</textarea></td>
                                </tr>
                                <tr>
                                    <td>Mahasiswa</td>
                                    <td><textarea readonly>{{ $standar2['standar2']['2.5']['isian']['Mahasiswa']['Isi Umpan Balik'] }}</textarea></td>
                                    <td><textarea readonly>{{ $standar2['standar2']['2.5']['isian']['Mahasiswa']['Tindak Lanjut'] }}</textarea></td>
                                </tr>
                                <tr>
                                    <td>Alumni</td>
                                    <td><textarea readonly>{{ $standar2['standar2']['2.5']['isian']['Alumni']['Isi Umpan Balik'] }}</textarea></td>
                                    <td><textarea readonly>{{ $standar2['standar2']['2.5']['isian']['Alumni']['Tindak Lanjut'] }}</textarea></td>
                                </tr>
                                <tr>
                                    <td>Pengguna lulusan</td>
                                    <td><textarea readonly>{{ $standar2['standar2']['2.5']['isian']['Pengguna lulusan']['Isi Umpan Balik'] }}</textarea></td>
                                    <td><textarea readonly>{{ $standar2['standar2']['2.5']['isian']['Pengguna lulusan']['Tindak Lanjut'] }}</textarea></td>
                                </tr>
                            </table>
                            <br>
                            <a href="{{ url('3a/standar2edit/2.5/'.$kode_fakultas) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
                            <br><br>

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
                                {{ $standar2['standar2']['2.6']['judul'] }}
                            </a>
                        </h4>
                    </div>

                    <div id="six" class="panel-collapse collapse">
                        <div class="panel-body">
                        {{ $standar2['standar2']['2.6']['perintah'] }}<br> <br>
                        {{ $standar2['standar2']['2.6']['pertanyaan'][0] }}<br>
                        {{ $standar2['standar2']['2.6']['pertanyaan'][1] }}<br>
                        {{ $standar2['standar2']['2.6']['pertanyaan'][2] }}<br>
                        {{ $standar2['standar2']['2.6']['pertanyaan'][3] }}<br>
                        {{ $standar2['standar2']['2.6']['pertanyaan'][4] }}<br><br>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" readonly>
                                    {{ $standar2['standar2']['2.6']['isian'] }}
                                </textarea>
                            </div>
                            <a href="{{ url('3a/standar2edit/2.6/'.$kode_fakultas) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
                            <br><br>
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

