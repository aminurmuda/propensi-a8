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
                        <p> Pilih Fakultas </p>
                        
                    </div>
                    <div class="plan-div">
                      <form action="" method="POST" id="form-fakultas">
                      {{ csrf_field() }}
                            <div class="form-group" >
                              <select class="form-control" id="selectFakultas" name='selectFakultas' required>
                                <option value='' disabled selected>--Pilih Fakultas--</option>
                                @foreach($fakultas as $fakultas)
                                <option value='{{$fakultas->kode_fakultas}}'>{{$fakultas->nama_fakultas}}</option>
                                @endforeach
                              </select>
                            </div>
                            <div>
                             <button class="btn btn-primary col-md-offset-4" type="submit">Pilih</button>
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