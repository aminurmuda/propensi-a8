@extends('layouts.headerfooter')

@section('content')

    <!-- Page Content -->

    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
        @if($status!=0 && $role=='Tim Akreditasi')
              <div class="alert alert-info">
                Borang tidak dalam masa atau sudah habis masa pengisian
              </div>
            @endif
            <h3>Borang 3B, Standar 2</h3>
            <span> Tata Pamong, Kepemimpinan, Sistem Pengelolaan, dan Penjaminan Mutu </span><br>
            <span> {{ $nama_fakultas}} , Universitas Indonesia </span>
            <br>
            <span> Tahun {{ $tahun}} </span>
            <a href="{{ url('3B/'.$idHistori.'/'.$tahun) }}" class="btn-primary btn-lg pull-right">Kembali Ke Borang 3B</a>
            <br><br><br>
            <div class="panel-group wrap" id="bs-collapse">

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#bs-collapse" href="#one">
         {!!$standar2['standar2']['2.1']['judul']!!}
        </a>
      </h4>
                    </div>
                    <div id="one" class="panel-collapse collapse">
                        <div class="panel-body">
                            {!!$standar2['standar2']['2.1']['narasi']!!}
                             <br><br>


                              {!!$standar2['standar2']['2.1']['perintah']!!}<br><br>


                           
                          
                            <div style="width:850px;height:200px;line-height:3em;overflow:scroll;padding:5px;background-color:#edeef9;color:#000000;scrollbar-base-color:#DEBB07;">
                              {!!rawurldecode($standar2['standar2']['2.1']['isian'])!!}
                            </div>


                            <br>


                            @if($role=='Admin' || $role=='Tim Akreditasi')
                            @if($status==0 || $role=='Admin')
                            <a href="{{ url('3b/standar2edit/2-1/'.$kode_fakultas) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
                            @endif
                            @endif

                            <br><br><h3>Komentar: </h3>
                            

                            @if($role=='Tim Reviewer' || $role=='Admin' )
                            <div>
                            @if($status==4 || $role=='Admin')
                             <form action="{{url('3b/standar2/2-1/'.$kodeProdi.'/'.$idHistori.'/3B/submitkomentar')}}">
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
                            <br>
                            @if(count($komentar2_1)>0)
                            <br><br>@foreach($komentar2_1 as $komentar2_1)
                            <div class="row">
                              <div class="col-sm-2">
                              <div class="thumbnail">
                              <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                              </div><!-- /thumbnail -->
                              </div><!-- /col-sm-1 -->

                              <div class="col-sm-10">
                              <div class="panel panel-default">
                              <div class="panel-heading">
                              <strong>{{$komentar2_1->nama}}</strong> <span class="text-muted">commented:</span><br>
                              <strong>{{$komentar2_1->date}}</strong>
                              </div>
                              

                              <div class="panel-body">
                             {!!$komentar2_1->isi!!}
                              </div><!-- /panel-body -->
                              </div><!-- /panel panel-default -->
                              </div><!-- /col-sm-5 -->
                            </div><br>
                            @endforeach
                            @else
                            <i>Belum ada komentar</i>
                            @endif
                        </div>
                    </div>

                </div>
                <!-- end of panel -->

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#bs-collapse" href="#two">
       {!!$standar2['standar2']['2.2']['judul']!!}
        </a>
      </h4>
                    </div>
                    <div id="two" class="panel-collapse collapse">
                        <div class="panel-body">


                             {!!$standar2['standar2']['2.2']['perintah']!!} <br><br>

                             <div style="width:850px;height:200px;line-height:3em;overflow:scroll;padding:5px;background-color:#edeef9;color:#000000;scrollbar-base-color:#DEBB07;">
                              {!!rawurldecode($standar2['standar2']['2.2']['isian'])!!}

                             </div>
                             <br>

                               @if($role=='Admin' || $role=='Tim Akreditasi')
                               @if($status==0 || $role=='Admin')
                              <a href="{{ url('3b/standar2edit/2-2/'.$kode_fakultas) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
                              @endif
                              @endif

                              <br><br><h3>Komentar: </h3>
                            

                            @if($role=='Tim Reviewer' || $role=='Admin' )
                            <div>
                            @if($status==1 || $role=='Admin')
                             <form action="{{url('3b/standar2/2-2/'.$kodeProdi.'/'.$idHistori.'/3B/submitkomentar')}}">
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
                            <br>
                            @if(count($komentar2_2)>0)<br><br>@foreach($komentar2_2 as $komentar2_2)
                            <div class="row">
                              <div class="col-sm-2">
                              <div class="thumbnail">
                              <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                              </div><!-- /thumbnail -->
                              </div><!-- /col-sm-1 -->

                              <div class="col-sm-10">
                              <div class="panel panel-default">
                              <div class="panel-heading">
                              <strong>{{$komentar2_2->nama}}</strong> <span class="text-muted">commented:</span><br>
                              <strong>{{$komentar2_2->date}}</strong>
                              </div>
                              

                              <div class="panel-body">
                             {!!$komentar2_2->isi!!}
                              </div><!-- /panel-body -->
                              </div><!-- /panel panel-default -->
                              </div><!-- /col-sm-5 -->
                            </div><br>
                            @endforeach
                            @else
                            <i>Belum ada komentar</i>
                            @endif

                            

                        </div>


                    </div>
                </div>
                <!-- end of panel -->

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#bs-collapse" href="#three">
          {!!$standar2['standar2']['2.3']['judul']!!}
        </a>
      </h4>
                    </div>
                    <div id="three" class="panel-collapse collapse">
                        <div class="panel-body">
                            {!!$standar2['standar2']['2.3']['narasi']!!}
                            <br><br>


                            {!!$standar2['standar2']['2.3']['perintah']!!} <br><br>


                            <div style="width:850px;height:200px;line-height:3em;overflow:scroll;padding:5px;background-color:#edeef9;color:#000000;scrollbar-base-color:#DEBB07;">
                              {!!rawurldecode($standar2['standar2']['2.3']['isian'])!!}
                            </div>
                            <br>

                               @if($role=='Admin' || $role=='Tim Akreditasi')
                               @if($status==0 || $role == 'Admin')
                              <a href="{{ url('3b/standar2edit/2-3/'.$kode_fakultas) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
                              @endif
                              @endif

                             <br><br><h3>Komentar: </h3>
                            

                            @if($role=='Tim Reviewer' || $role=='Admin' )
                            <div>
                            @if($status==4 || $role=='Admin')
                             <form action="{{url('3b/standar2/2-3/'.$kodeProdi.'/'.$idHistori.'/3B/submitkomentar')}}">
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
                            <br>
                            @if(count($komentar2_3)>0)<br><br>@foreach($komentar2_3 as $komentar2_3)
                            <div class="row">
                              <div class="col-sm-2">
                              <div class="thumbnail">
                              <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                              </div><!-- /thumbnail -->
                              </div><!-- /col-sm-1 -->

                              <div class="col-sm-10">
                              <div class="panel panel-default">
                              <div class="panel-heading">
                              <strong>{{$komentar2_3->nama}}</strong> <span class="text-muted">commented:</span><br>
                              <strong>{{$komentar2_3->date}}</strong>
                              </div>
                              

                              <div class="panel-body">
                             {!!$komentar2_3->isi!!}
                              </div><!-- /panel-body -->
                              </div><!-- /panel panel-default -->
                              </div><!-- /col-sm-5 -->
                            </div><br>
                            @endforeach
                            @else
                            <i>Belum ada komentar</i>
                            @endif

                            
                        </div>
                    </div>
                </div>
                <!-- end of panel -->

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#bs-collapse" href="#four">
         {!!$standar2['standar2']['2.4']['judul']!!}
        </a>
      </h4>
                    </div>
                    <div id="four" class="panel-collapse collapse ">
                        <div class="panel-body">

                            {!!$standar2['standar2']['2.4']['narasi']!!}
                            <br><br>

                             {!!$standar2['standar2']['2.4']['perintah']!!}<br><br>


                            <div style="width:850px;height:200px;line-height:3em;overflow:scroll;padding:5px;background-color:#edeef9;color:#000000;scrollbar-base-color:#DEBB07;">
                              {!!rawurldecode($standar2['standar2']['2.4']['isian'])!!}
                            </div><br>
                              

                               @if($role=='Admin' || $role=='Tim Akreditasi')
                               @if($status==0 || $role=='Admin')
                              <a href="{{ url('3b/standar2edit/2-4/'.$kode_fakultas) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
                              @endif
                              @endif

                             <br><br><h3>Komentar: </h3>
                            

                            @if($role=='Tim Reviewer' || $role=='Admin' )
                            <div>
                            @if($status==4 || $role=='Admin')
                             <form action="{{url('3b/standar2/2-4/'.$kodeProdi.'/'.$idHistori.'/3B/submitkomentar')}}">
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
                            <br>
                            @if(count($komentar2_4)>0)
                            <br><br>@foreach($komentar2_4 as $komentar2_4)
                            <div class="row">
                              <div class="col-sm-2">
                              <div class="thumbnail">
                              <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                              </div><!-- /thumbnail -->
                              </div><!-- /col-sm-1 -->

                              <div class="col-sm-10">
                              <div class="panel panel-default">
                              <div class="panel-heading">
                              <strong>{{$komentar2_4->nama}}</strong> <span class="text-muted">commented:</span><br>
                              <strong>{{$komentar2_4->date}}</strong>
                              </div>
                              

                              <div class="panel-body">
                             {!!$komentar2_4->isi!!}
                              </div><!-- /panel-body -->
                              </div><!-- /panel panel-default -->
                              </div><!-- /col-sm-5 -->
                            </div><br>
                            @endforeach
                            @else
                            <i>Belum ada komentar</i>
                            @endif

                            

                        </div>
                    </div>
                </div>
                <!-- end of panel -->


                 <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#bs-collapse" href="#five">
         {!!$standar2['standar2']['2.5']['judul']!!}
        </a>
      </h4>
                    </div>
                    <div id="five" class="panel-collapse collapse">
                        <div class="panel-body">

                            {!!$standar2['standar2']['2.5']['perintah']!!} <br> <br>


                            
                              <div style="width:850px;height:200px;line-height:3em;overflow:scroll;padding:5px;background-color:#edeef9;color:#000000;scrollbar-base-color:#DEBB07;">
                                {!!rawurldecode($standar2['standar2']['2.5']['isian'])!!}
                               </div><br>

                              

                               @if($role=='Admin' || $role=='Tim Akreditasi')
                               @if($status==0 || $role=='Admin')
                              <a href="{{ url('3b/standar2edit/2-5/'.$kode_fakultas) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
                              @endif
                              @endif

                            <br><br><h3>Komentar: </h3>
                            

                            @if($role=='Tim Reviewer' || $role=='Admin' )
                            <div>
                            @if($status==4 || $role=='Admin')
                             <form action="{{url('3b/standar2/2-5/'.$kodeProdi.'/'.$idHistori.'/3B/submitkomentar')}}">
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
                            <br>
                            @if(count($komentar2_5)>0)
                            <br><br>@foreach($komentar2_5 as $komentar2_5)
                            <div class="row">
                              <div class="col-sm-2">
                              <div class="thumbnail">
                              <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                              </div><!-- /thumbnail -->
                              </div><!-- /col-sm-1 -->

                              <div class="col-sm-10">
                              <div class="panel panel-default">
                              <div class="panel-heading">
                              <strong>{{$komentar2_5->nama}}</strong> <span class="text-muted">commented:</span><br>
                              <strong>{{$komentar2_5->date}}</strong>
                              </div>
                              

                              <div class="panel-body">
                             {!!$komentar2_5->isi!!}
                              </div><!-- /panel-body -->
                              </div><!-- /panel panel-default -->
                              </div><!-- /col-sm-5 -->
                            </div><br>
                            @endforeach
                            @else
                            <i>Belum ada komentar</i>
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