@extends('layouts.headerfooter')

@section('content')

{!! Charts::assets() !!}

    <!-- Page Content -->
  @if($role!='Tim Akreditasi' && $role!='Tim Reviewer')
    <div class="container">
        <div class="row">
            <div  class="col-md-12">

                <div> 
                    <h3>Riwayat Akreditasi</h3>
                     <span>{{$nama_fakultas}},  Universitas Indonesia</span>
                     
                     <br>
                     <br>
                     <br>
                </div>

                <!-- content chart -->
             

                 {!! $chart1->render() !!}

                @if($role=='UPMAF' || $role=='Admin')
                <br><br><a href="{{ url('akreditasi/tambah') }}" class="btn-success btn-lg col-md-offest-2 pull-right"> Tambah Akreditasi</a>
                @endif
                <br><br><br>
                 <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Prodi</th>
                            <th>Tahun</th>
                            <th>Nilai</th>
                            <th>Huruf</th>
                            <th>Keterangan</th>
                    
                            <th>Masa Berlaku</th>
                            <th>Status</th>
                            <th>Menu</th>
                    
                        </tr>
                    </thead>
                  
                    <tbody>
                       
                        <tr>
                            @foreach ($getAllAkreditasi as $dataAkreditasi)
                            <td> {{ $dataAkreditasi -> nama_prodi}}</td>
                            <td>{{ $dataAkreditasi -> tahun_keluar}}</td>
                            <td>{{ $dataAkreditasi -> nilai }}</td>
                            <td>{{ $dataAkreditasi -> peringkat_akreditasi}}</td>
                            <td> {{ $dataAkreditasi -> keterangan}}</td>
                            <td> {{ $dataAkreditasi -> masa_berlaku}}</td>
                            @if( $dataAkreditasi -> nama_status!='Kadaluwarsa')
                            <td> {{ $dataAkreditasi -> nama_status}}</td>
                            @else
                            <td style="color:red;"> {{ $dataAkreditasi -> nama_status}}</td>
                            @endif
                            <td> 
                              
                              <a href="{{ url('akreditasi/'.$dataAkreditasi->id.'/'.$dataAkreditasi -> tahun_keluar.'/pilih') }}" class="btn-primary btn-sm" >Details</a><br><br>

                              
                              @if($role=='BPMA' || $role=='Admin')
                              <a href="{{ url('akreditasi/'.$dataAkreditasi->id.'/5/submit') }}" class="btn-danger btn-sm"> Ases</a><br><br>
                              <a href="{{ url('akreditasi/'.$dataAkreditasi->id.'/edit') }}" class="btn-success btn-sm glyphicon glyphicon-pencil"> Edit</a>
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

      @else
      <!-- view untuk role tim akreditasi atau tim reviewer-->
      <div class="container">
        <div class="row">
            <div  class="col-md-12">

                <div> 
                    <h3>Riwayat Akreditasi</h3>
                    <center><h3>Maaf, Anda tidak memiliki akses.</h3>
                    <a href="{{ url('homestatus') }}"> Kembali ke Halaman Awal</a>
                    </center>
                </div>
              </div>
          </div>

        </div>


      @endif



@endsection
