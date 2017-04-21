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
                        <p> Pilih Program Studi </p>
                        
                    </div>
                    <form action="{{url(Route::current()->getName().'/submit')}}">
                    {{csrf_field()}}
                    <div class="plan-div">
                          <div class="form-group">
                            <select class="form-control" id="selectProdi" name='selectProdi'>
                            @foreach($prodi as $prodi)
                              <option value='{{$prodi->kode_prodi}}'>{{$prodi->nama_prodi}}</option>
                              @endforeach
                            </select>
                          </div>

                    </div>
                    <div class="pricing-footer">

                        <!-- <a href="#" class="btn db-button-color-square btn-m round">Pilih</a> -->
                        <button class="btn db-button-color-square btn-m round" type="submit"> Pilih </button>                        
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