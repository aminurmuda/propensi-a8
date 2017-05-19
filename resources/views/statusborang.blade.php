@extends('layouts.headerfooter')

@section('content')



    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div  class="col-md-12">

                <div> 
                    <h3>Kelola Borang Akreditasi</h3>
                    @if ($role=='Admin')
                      <span>Universitas Indonesia</span>
                    @else
                      <span>Program Studi {{ $getBorang[0] -> nama_prodi}}, Universitas Indonesia </span>
                    @endif
                     
                     <br>
                     <br>
                     <br>
                </div>

                
              <br>
                 <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Jenis Borang</th>
                            <th>Tahun</th>
                            <th>Program Studi</th>
                            <th>Status</th>
                            <th>Menu</th>
                            
                    
                        </tr>
                    </thead>
                  
                    <tbody>
                       
                        <tr>
                            @foreach ($getBorang as $borang)
                            @if( $borang -> jenis == 'ED')
                            <td> Borang Evaluasi Diri</td>
                            @else
                            <td> Borang {{ $borang -> jenis}}</td>
                            @endif
                            <td>{{ $borang -> tahun}}</td>
                            <td>{{ $borang -> nama_prodi}}</td>
                            @if ($borang -> status==0)
                              <td>Dalam Pengisian</td>
                              @else
                              @if($borang -> status==1)
                                <td>Sedang direview</td>
                                @else 
                                <td>Telah dikirim ke BPMA</td>
                              @endif
                            @endif
                           
                            <td> 
                            @if($role=='Tim Akreditasi' || $role=='Admin')
                                @if($borang->status==0) 
                                    @if($borang->jenis=='3A')
                                <a href="{{ url($borang->jenis.'/'.$borang->kodeProdiFakultas.'/'.$borang -> tahun) }}" class="btn-success btn-sm"> Edit</a>
                                    @endif
                                    @if($borang->jenis=='3B')
                                <a href="{{ url($borang->jenis.'/'.$borang->id_histori.'/'.$borang -> tahun) }}" class="btn-success btn-sm"> Edit</a>
                                    @endif
                                    @if($borang->jenis=='ED')
                                <a href="{{ url('evaluasidiri/'.$borang->id_histori.'/'.$borang -> tahun) }}" class="btn-success btn-sm"> Edit</a>
                                    @endif
                                @else
                                 @if($borang->jenis=='3A')
                                <a href="{{ url($borang->jenis.'/'.$borang->kodeProdiFakultas.'/'.$borang -> tahun) }}" class="btn-info btn-sm"> Lihat</a>
                                    @endif
                                    @if($borang->jenis=='3B')
                                <a href="{{ url($borang->jenis.'/'.$borang->id_histori.'/'.$borang -> tahun) }}" class="btn-info btn-sm"> Lihat</a>
                                    @endif
                                    @if($borang->jenis=='ED')
                                <a href="{{ url('evaluasidiri/'.$borang->id_histori.'/'.$borang -> tahun) }}" class="btn-info btn-sm"> Lihat</a>
                                @endif
                            @endif
                             <!-- tim akreditasi ke reviewer -->
                            <a href="{{ url('borang/'.$borang->id_histori.'/'.$borang->jenis.'/'.$borang->kode_prodi.'/publish') }}" class="btn-warning btn-sm"> Publish</a>  

                            @endif
                            @if($role=='Tim Reviewer' || $role=='Admin')
                            <!-- reviewer ke BPMA -->
                            <a href="{{ url('borang/'.$borang->id_histori.'/'.$borang->jenis.'/'.$borang->kode_prodi.'/submit') }}" class="btn-danger btn-sm"> Submit</a>

                            <!-- reviewer borang -->
                            @if($borang->status==1) 
                            <a href="{{ url($borang->jenis.'/'.$borang->kode_prodi.'/'.$borang -> tahun) }}" class="btn-primary btn-sm"> Review</a>
                            @else
                            <a href="#" class="btn-basic btn-sm disabled"> Review</a>
                            @endif

                            <!-- reviewer ke tim akreditasi -->
                            <a href="{{ url('borang/'.$borang->id_histori.'/'.$borang->jenis.'/'.$borang->kode_prodi.'/return') }}" class="btn-info btn-sm"> Reset</a>
                            @endif
                           
                            </td>
                  
                        </tr>
                        @endforeach

                          
                        
                        

                    </tbody>
                </table> 

                <br>

              
                <br>
                <br>

            </div>
        </div>
    </div>
 
    <!-- /.container -->
     <!-- Modal -->
      <div class="modal fade" id="confirmationModal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Menambah Tim Akreditasi</h4>
            </div>
            <div class="modal-body">
              <p id='isi'>isinya</p>
            </div>
            <div class="modal-footer">
              <a href="#" id="link" ><button type="button" class="btn btn-default">Yakin</button></a>
             <button type="button" class="btn btn-default" data-dismiss="modal">batal</button>
            </div>
          </div>
          
        </div>
      </div>



@endsection
