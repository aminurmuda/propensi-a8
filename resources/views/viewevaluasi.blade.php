@extends('layouts.headerfooter')

@section('content')

    <!-- Page Content -->
    <br><br>
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <a href="{{ url('evaluasidiri/'. $idHistori.'/'.$tahun.'/print') }}" class="btn-primary btn-lg pull-left glyphicon glyphicon-print"> Print</a>
            <br>
             @if($status!=0 && $role=='Tim Akreditasi')
              <div class="alert alert-info">
                Borang tidak dalam masa atau sudah habis masa pengisian
              </div>
            @endif

            <br><br><br>
            <div class="panel-group wrap" id="bs-collapse">

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#bs-collapse" href="#one">
         
         Evaluasi Diri<br>
       
        </a>
      </h4>
                    </div>
                    <div id="one" class="panel-collapse collapse ">
                        <div class="panel-body">
                            <h5>Borang Evaluasi Diri <br><br> Program Studi {{$prodiBorang->nama_prodi}}, Tahun {{$tahun}}:</h5>
                            <div style="width:850px;height:200px;line-height:3em;overflow:scroll;padding:5px;background-color:#edeef9;color:#000000;scrollbar-base-color:#DEBB07;">
                            {!!rawurldecode($standarED['evaluasidiri']['isi'])!!}
                            </div><br>
                            @if($role=='Tim Akreditasi' || $role=='Admin' )
                            @if($status==0 || $role=='Admin')
                           <a href="{{ url('evaluasidiri/edit/isi/'. $idHistori) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
                           @endif
                           @endif
                         

                            <br><br><h3>Komentar: </h3>
                           

                            @if($role=='Tim Reviewer' || $role=='Admin' )
                            <div>
                            @if($status==1 || $role=='Admin')
                             <form action="{{url('evaluasidiri/standarED/0/'.$kodeProdi.'/'.$idHistori.'/ED/submitkomentar')}}">
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
                            @if(count($komentarED)>0)<br><br>@foreach($komentarED as $komentarED)
                            <div class="row">
                              <div class="col-sm-2">
                              <div class="thumbnail">
                              <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                              </div><!-- /thumbnail -->
                              </div><!-- /col-sm-1 -->

                              <div class="col-sm-10">
                              <div class="panel panel-default">
                              <div class="panel-heading">
                              <strong>{{$komentarED->nama}}</strong> <span class="text-muted">commented:</span><br>
                              <strong>{{$komentarED->date}}</strong>
                              </div>
                              

                              <div class="panel-body">
                             {!!$komentarED->isi!!}
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
        

        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
             @if($status!=0 && $role=='Tim Akreditasi')
              <div class="alert alert-info">
                Borang tidak dalam masa atau sudah habis masa pengisian
              </div>
            @endif
            <div class="panel-group wrap" id="bs-collapse">

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#bs-collapse" href="#two">
         
         Evaluasi Diri--Tambahan<br>
       
        </a>
      </h4>
                    </div>
                    <div id="two" class="panel-collapse collapse ">
                        <div class="panel-body">
                            <h5>Borang Evaluasi Diri--Tambahan<br><br> Program Studi {{$prodiBorang->nama_prodi}}, Tahun {{$tahun}}:</h5>
                            <div style="width:850px;height:200px;line-height:3em;overflow:scroll;padding:5px;background-color:#edeef9;color:#000000;scrollbar-base-color:#DEBB07;">
                            {!!rawurldecode($standarED['evaluasidiri']['tambahan'])!!}
                            </div><br>
                            @if($role=='Tim Akreditasi' || $role=='Admin' )
                            @if($status==0 || $role=='Admin')
                           <a href="{{ url('evaluasidiri/edit/tambahan/'. $idHistori) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
                           @endif
                           @endif
                         

                            <br><br><h3>Komentar: </h3>
                           

                            @if($role=='Tim Reviewer' || $role=='Admin' )
                            <div>
                            @if($status==1 || $role=='Admin')
                             <form action="{{url('evaluasidiri/standarED/0/'.$kodeProdi.'/'.$idHistori.'/ED/submitkomentar')}}">
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
                            @if(count($komentarED)>0)<br><br>@foreach($komentarED as $komentarED)
                            <div class="row">
                              <div class="col-sm-2">
                              <div class="thumbnail">
                              <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                              </div><!-- /thumbnail -->
                              </div><!-- /col-sm-1 -->

                              <div class="col-sm-10">
                              <div class="panel panel-default">
                              <div class="panel-heading">
                              <strong>{{$komentarED->nama}}</strong> <span class="text-muted">commented:</span><br>
                              <strong>{{$komentarED->date}}</strong>
                              </div>
                              

                              <div class="panel-body">
                             {!!$komentarED->isi!!}
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
            

        </div>

        
                  



    </div>
    <!-- end of container -->

    <!-- /.container -->





@endsection



