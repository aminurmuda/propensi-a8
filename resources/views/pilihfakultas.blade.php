@extends('layouts.headerfooter')

@section('content')

    <!-- Page Content -->

    <div class="container">
    <div class="row">
        @if($role=='Pimpinan Universitasi' || $role=='BPMA')
        <center><h3>Selamat Datang!</h3>
        @else
        <center><h3>Riwayat Akreditasi</h3>
        @endif
      
        <span>Silahkan pilih fakultas.</span></center>
        <div class="col-md-9 col-md-offset-1" >
            <div class="db-wrapper">
                <div class="db-pricing-eleven db-bk-color-one">
                    <div class="price">
                       <!-- <p class="plan-name"></p> -->
                       <br>
                        <p> Pilih Fakultas </p>
                        
                    </div>
                    <div class="plan-div">
                      <form action="" method="post" id='formFakultas'>
                      {{ csrf_field() }}
                            <div class="form-group" >
                              <select class="form-control" id="selectFakultasGeneral" name='selectFakultasGeneral' required>
                                <option value='' disabled selected>--Pilih Fakultas--</option>
                                @foreach($fakultas as $fakultas)
                                <option value='{{$fakultas->kode_fakultas}}'>{{$fakultas->nama_fakultas}}</option>
                                @endforeach
                              </select>
                            </div>
                            <div>
                             <button class="btn db-button-color-square btn-m round" type="submit">Pilih</button>
                            </div>
                      </form>
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