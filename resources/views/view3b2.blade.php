@extends('layouts.headerfooter')

@section('content')

    <!-- Page Content -->

    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h3>Borang 3B, Standar 2</h3>
            <span> Tata Pamong, Kepemimpinan, Sistem Pengelolaan, dan Penjaminan Mutu </span><br>
            <span> Fakultas Ilmu Komputer, Universitas Indonesia </span>
            <br>

             

            <br><br>
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
                            <a href="{{ url('3b/standar2edit/2-1/'. $kodeFakultas) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
                            @endif

                             <br><br><h3>Komentar: </h3>
                             <div style="width:850px;height:200px;line-height:3em;overflow:scroll;padding:20px;background-color:#edeef9;color:#000000;scrollbar-base-color:#DEBB07;">
                                {!!rawurldecode($standar2['standar2']['2.1']['isian'])!!}
                            </div><br>

                            @if($role=='Tim Reviewer' || $role=='Admin' )
                              <a href="{{ url('3b/standar2edit/2-1/'. $kodeFakultas) }}" class="btn-primary btn-lg pull-right"> Beri Komentar</a>
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
                              <a href="{{ url('3b/standar2edit/2-2/'. $kodeFakultas) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
                              @endif

                              <br><br><h3>Komentar: </h3>
                             <div style="width:850px;height:200px;line-height:3em;overflow:scroll;padding:20px;background-color:#edeef9;color:#000000;scrollbar-base-color:#DEBB07;">
                                {!!rawurldecode($standar2['standar2']['2.1']['isian'])!!}
                            </div><br>

                            @if($role=='Tim Reviewer' || $role=='Admin' )
                              <a href="{{ url('3b/standar2edit/2-1/'. $kodeFakultas) }}" class="btn-primary btn-lg pull-right"> Beri Komentar</a>
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
                              <a href="{{ url('3b/standar2edit/2-3/'. $kodeFakultas) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
                              @endif

                              <br><br><h3>Komentar: </h3>
                             <div style="width:850px;height:200px;line-height:3em;overflow:scroll;padding:20px;background-color:#edeef9;color:#000000;scrollbar-base-color:#DEBB07;">
                                {!!rawurldecode($standar2['standar2']['2.1']['isian'])!!}
                            </div><br>

                            @if($role=='Tim Reviewer' || $role=='Admin' )
                              <a href="{{ url('3b/standar2edit/2-1/'. $kodeFakultas) }}" class="btn-primary btn-lg pull-right"> Beri Komentar</a>
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
                              <a href="{{ url('3b/standar2edit/2-4/'. $kodeFakultas) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
                              @endif

                              <br><br><h3>Komentar: </h3>
                             <div style="width:850px;height:200px;line-height:3em;overflow:scroll;padding:20px;background-color:#edeef9;color:#000000;scrollbar-base-color:#DEBB07;">
                                {!!rawurldecode($standar2['standar2']['2.1']['isian'])!!}
                            </div><br>

                            @if($role=='Tim Reviewer' || $role=='Admin' )
                              <a href="{{ url('3b/standar2edit/2-1/'. $kodeFakultas) }}" class="btn-primary btn-lg pull-right"> Beri Komentar</a>
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
                              <a href="{{ url('3b/standar2edit/2-5/'. $kodeFakultas) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
                              @endif

                              <br><br><h3>Komentar: </h3>
                             <div style="width:850px;height:200px;line-height:3em;overflow:scroll;padding:20px;background-color:#edeef9;color:#000000;scrollbar-base-color:#DEBB07;">
                                {!!rawurldecode($standar2['standar2']['2.1']['isian'])!!}
                            </div><br>

                            @if($role=='Tim Reviewer' || $role=='Admin' )
                              <a href="{{ url('3b/standar2edit/2-1/'. $kodeFakultas) }}" class="btn-primary btn-lg pull-right"> Beri Komentar</a>
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