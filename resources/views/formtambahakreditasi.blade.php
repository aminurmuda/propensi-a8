@extends('layouts.headerfooter')

@section('content')

    <!-- Page Content -->

    <div class="container">
    <div class="row">
        <div class="col-md-12" >
            <div class="db-wrapper">
                <div class="db-pricing-eleven db-bk-color-one">
                    <div class="price">
                       <!-- <p class="plan-name"></p> -->
                       <br>
                        <p> Tambah Akreditasi </p>
                        
                    </div>

                    <form action="{{Request::url().'/submit'}}" method="get" id='formTambahAkreditasi'>
                    <!-- <form action="" onsubmit="submitProdi()"> -->
                    {{csrf_field()}}
                    <div class="plan-div">
                          <div class="form-group">
                            <label style="color:black;">Program Studi:</label>
                            <select class="form-control" id="kodeProdi" name='kodeProdi'>
                            <option>--Pilih Prodi--</option>
                            @foreach($prodi as $prodi)
                              <option value='{{$prodi->kode_prodi}}'>{{$prodi->nama_prodi}}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="form-group">
                            <label style="color:black;">Tahun Keluar Akreditasi:</label>
                            <input type="number" class="form-control" id="tahun" name="tahun">
                          </div>
                    </div>
                    <br>
                    <br>
                    <div class="pricing-footer">

                        <!-- <a href="#" class="btn db-button-color-square btn-m round">Pilih</a> -->
                        <button class="btn db-button-color-square btn-m round" type="submit"> Tambah </button>
                        <br><br>                        
                    </div>
                    </form> 
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