@extends('layouts.headerfooter')

@section('content')

    <!-- Page Content -->

    <div class="container">
    	
	    	<h3>Pilih Standar Borang 3A</h3>
	    	<span>Borang Akreditasi yang diisi oleh program studi</span><br>
	    	<span>Program Studi {{$prodi->nama_prodi}}</span><br>
	    	<span>{{ $nama_fakultas }}, Universitas Indonesia</span><br>
	    	<span>Tahun {{$tahun}}</span><br><br>
	    	<!-- start content -->
	    	<div class="container">
	    	 <div class="col-md-12 col-md-offset-0" >
				<div class="row">
			        <div class="span12">
			    		<ul class="thumbnails">
			    			<li class="span5 clearfix">
			                  <div class="thumbnail clearfix">
			                    
			                    <div class="caption" class="pull-left">
			           
			                      <h3>      
			                      <a href="#" >Standar 1</a>
			                      </h3>
			                      <small>VISI, MISI, TUJUAN DAN SASARAN, SERTA STRATEGI PENCAPAIAN</small> 
			                      <a href="#" class="btn btn-primary icon  pull-right">Select</a><br>

			                    </div>
			                  </div>
			                </li>


			                <li class="span5 clearfix">
			                  <div class="thumbnail clearfix">
			                    
			                    <div class="caption" class="pull-left">
			           
			                      <h3>      
			                      <a href="#" >Standar 2</a>
			                      </h3>
			                      <small>TATA PAMONG, KEPEMIMPINAN, SISTEM PENGELOLAAN, DAN PENJAMINAN MUTU</small> 
			                       @if($role=='Tim Akreditasi' || $role=='Reviewer Prodi')
	                                

	                                <a href="{{ Request::url().'/standar2' }}" class="btn btn-primary icon  pull-right">Select</a><br>

		                       		@else
		                       		<a href="{{ Request::url().'/standar2' }}" class="btn btn-primary icon  pull-right">Select</a><br>

		                
                        			@endif


			                      

			                    </div>
			                  </div>
			                </li>

			                <li class="span5 clearfix">
			                  <div class="thumbnail clearfix">
			                    
			                    <div class="caption" class="pull-left">
			           
			                      <h3>      
			                      <a href="#" >Standar 3</a>
			                      </h3>
			                      <small>MAHASISWA DAN LULUSAN</small> 
			                      <a href="#" class="btn btn-primary icon  pull-right">Select</a><br>

			                    </div>
			                  </div>
			                </li>

			                 <li class="span5 clearfix">
			                  <div class="thumbnail clearfix">
			                    
			                    <div class="caption" class="pull-left">
			           
			                      <h3>      
			                      <a href="#" >Standar 4</a>
			                      </h3>
			                      <small>SUMBER DAYA MANUSIA</small> 
			                       @if($role=='Tim Akreditasi' || $role=='Reviewer Prodi')
	                                

	                                <a href="{{ Request::url().'/standar4' }}" class="btn btn-primary icon  pull-right">Select</a><br>

		                       		@else
		                       		<a href="{{ Request::url().'/standar4' }}" class="btn btn-primary icon  pull-right">Select</a><br>

		                
                        			@endif

			                    </div>
			                  </div>
			                </li>

			                 <li class="span5 clearfix">
			                  <div class="thumbnail clearfix">
			                    
			                    <div class="caption" class="pull-left">
			           
			                      <h3>      
			                      <a href="#" >Standar 5</a>
			                      </h3>
			                      <small>KURIKULUM, PEMBELAJARAN, DAN SUASANA AKADEMIK</small> 
			                      <a href="#" class="btn btn-primary icon  pull-right">Select</a><br>

			                    </div>
			                  </div>
			                </li>

			                <li class="span5 clearfix">
			                  <div class="thumbnail clearfix">
			                    
			                    <div class="caption" class="pull-left">
			           
			                      <h3>      
			                      <a href="#" >Standar 6</a>
			                      </h3>
			                      <small>PEMBIAYAAN, SARANA DAN PRASARANA, SERTA SISTEM INFORMASI</small> 
			                      <a href="#" class="btn btn-primary icon  pull-right">Select</a><br>

			                    </div>
			                  </div>
			                </li>

			                <li class="span5 clearfix">
			                  <div class="thumbnail clearfix">
			                    
			                    <div class="caption" class="pull-left">
			           
			                      <h3>      
			                      <a href="#" >Standar 7</a>
			                      </h3>
			                      <small>PENELITIAN, PELAYANAN/PENGABDIAN KEPADA MASYARAKAT, DAN KERJASAMA</small> 
			                       @if($role=='Tim Akreditasi' || $role=='Reviewer Prodi')
	                                

	                                <a href="{{ Request::url().'/standar7' }}" class="btn btn-primary icon  pull-right">Select</a><br>

		                       		@else
		                       		<a href="{{ Request::url().'/standar7' }}" class="btn btn-primary icon  pull-right">Select</a><br>

		                
                        			@endif

			                    </div>
			                  </div>
			                </li>

			                  
			            </ul>
			        </div>
				</div>
			</div>
			</div>

<!--end content -->
            
            
           
       
   	

    
   
   <br>
   <br>
   <br>
   <br>



</div>

@endsection