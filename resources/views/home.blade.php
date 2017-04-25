@extends('layouts.headerfooter')

@section('content')

    <!-- Page Content -->

    <div class="container">
    <div class="row">
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
                        </p><br>

                        @if($role=='Tim Akreditasi' || $role=='Reviewer Prodi')
                                <a href="{{ url('3a/standar2/'.$selectedProdi) }}" class="btn db-button-color-square btn-m round">Standar 2</a><br><br>
                                <a href="{{ url('3a/standar4/'.$selectedProdi) }}" class="btn db-button-color-square btn-m round">Standar 4</a><br><br>
                                <a href="{{ url('3a/standar7/'.$selectedProdi) }}" class="btn db-button-color-square btn-m round">Standar 7</a>
                        @else
                             <a href="{{ url('3a/standar2') }}" class="btn db-button-color-square btn-m round">Standar 2</a><br><br>
                            <a href="{{ url('3a/standar4') }}" class="btn db-button-color-square btn-m round">Standar 4</a><br><br>
                            <a href="{{ url('3a/standar7') }}" class="btn db-button-color-square btn-m round">Standar 7</a>
                        @endif


                            
                    </div>
                    <div class="pricing-footer">

                        <br><br><br><br><br><br>
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
                        </p><br>

                        @if($role=='Tim Akreditasi' || $role=='Reviewer Prodi' || $role=='UPMAF' || $role=='Pimpinan Fakultas')
                        @if($role=='Tim Akreditasi')
                        <a href="{{ url('3b/standar2/'.$selectedProdi) }}" class="btn db-button-color-square btn-m round">Standar 2</a><br><br>
                        <a href="{{ url('3b/standar4/'.$selectedProdi) }}" class="btn db-button-color-square btn-m round">Standar 4</a><br><br>
                        <a href="{{ url('3b/standar7/'.$selectedProdi) }}" class="btn db-button-color-square btn-m round">Standar 7</a>
                        @else 
                        <a href="{{ url('3b/standar2/'.$kode_fakultas) }}" class="btn db-button-color-square btn-m round">Standar 2</a><br><br>
                        <a href="{{ url('3b/standar4/'.$kode_fakultas) }}" class="btn db-button-color-square btn-m round">Standar 4</a><br><br>
                        <a href="{{ url('3b/standar7/'.$kode_fakultas) }}" class="btn db-button-color-square btn-m round">Standar 7</a>
                        @endif
                        @else
                         <a href="{{ url('3b/standar2') }}" class="btn db-button-color-square btn-m round">Standar 2</a><br><br>
                        <a href="{{ url('3b/standar4') }}" class="btn db-button-color-square btn-m round">Standar 4</a><br><br>
                        <a href="{{ url('3b/standar7') }}" class="btn db-button-color-square btn-m round">Standar 7</a>
                        @endif
                    </div>
                    <div class="pricing-footer">

                        <br><br><br><br><br><br>
                        
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
                        </p> <br> <br> <br> <br>
                        <a href="#" class="btn db-button-color-square btn-m round">Pilih</a>
                    </div>
                    <div class="pricing-footer">
                        <br><br><br><br><br><br>

                        
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