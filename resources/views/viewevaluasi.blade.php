@extends('layouts.headerfooter')

@section('content')

    <!-- Page Content -->

    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            
           
           
            <div class="panel-group wrap" id="bs-collapse">

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#bs-collapse" href="#one">
         
         Evaluasi Diri<br>
       
        </a>
      </h4>
                    </div>
                    <div id="one" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <br><br>

                            <br>
                            <div style="width:850px;height:200px;line-height:3em;overflow:scroll;padding:5px;background-color:#edeef9;color:#000000;scrollbar-base-color:#DEBB07;">
                            {!!$isi!!}
                            </div><br>
                            @if($role=='Tim Akreditasi' || $role=='Admin' )
                           <a href="{{ url('evaluasidiri/edit/'. $kodeProdi) }}" class="btn-primary btn-lg pull-right glyphicon glyphicon-pencil"> Edit</a>
                           @endif
                         

                            <br><br><h3>Komentar: </h3>
                             <div style="width:850px;height:200px;line-height:3em;overflow:scroll;padding:20px;background-color:#edeef9;color:#000000;scrollbar-base-color:#DEBB07;">
                              
                            </div><br>

                            @if($role=='Tim Reviewer' || $role=='Admin' )
                              <a href="#}" class="btn-primary btn-lg pull-right"> Beri Komentar</a>
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



