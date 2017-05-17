@extends('layouts.headerfooter')

@section('content')

{!! Charts::assets() !!}

    <!-- Page Content -->

    <div class="container">
    <div class="row">

     <center><h3>Grafik Akreditasi Program Studi</h3></center><br><br>
    <div class="pull-right">
      {!! $chart2->render() !!}<br><br>
       </div>
     {!! $chart1->render() !!} <br><hr>

     <center>
    <h3>Pilih Jenis Borang</h3>
    <span>Program Studi {{ $nama_prodi }}, Tahun {{ $tahun }} </span><br></center>

        <div class="col-md-4 col-md-offset-0" >
            
           
            <div class="db-wrapper">
                <div class="db-pricing-eleven db-bk-color-one">
                    <div class="price">
                       <!-- <p class="plan-name"></p> -->
                       <br>
                        <p> Borang 3A </p>
                        
                    </div>
                    <div class="plan-div">
                        <p class="plan-text">
                            <br>
                            Borang Akreditasi yang diisi oleh program studi
                        </p><br><br><br>

                        <a href="{{ url('3A/'.$kode_prodi.'/'.$tahun) }}" class="btn db-button-color-square btn-m round">Pilih</a>

                            
                    </div>
                    <div class="pricing-footer">

                        <br><br><br><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-md-offset-0">
            <div class="db-wrapper">
                <div class="db-pricing-eleven db-bk-color-one">
                    <div class="price">
                        <br>
                        <p>Borang 3B</p>
                        

                    </div>
                    <div class="plan-div">
                        <p class="plan-text">
                            <br>Borang Institusi yang diisi oleh fakultas
                        </p><br><br><br>

                        <a href="{{ url('3B/'.$id_histori.'/'.$tahun) }}" class="btn db-button-color-square btn-m round">Pilih</a>
               
                    </div>
                    <div class="pricing-footer">

                        <br><br><br><br>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-md-offset-0">
            <div class="db-wrapper">
                <div class="db-pricing-eleven db-bk-color-one">
                    <div class="price">
                        <br>
                        <p>Evaluasi Diri</p>
                        

                    </div>

                    <div class="plan-div">
                        <p class="plan-text">
                            <br>Evaluasi Diri Program Studi
                        </p> <br> <br> <br><br>
                        <a href="{{ url('evaluasidiri/'.$id_histori.'/'.$tahun) }}" class="btn db-button-color-square btn-m round">Pilih</a>
                    </div>
                    <div class="pricing-footer">
                        <br><br><br><br>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>



    
   
   <br>
   <br>
   <br>
   <br>



</div>

@endsection