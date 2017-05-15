@extends('layouts.headerfooter')

@section('content')

{!! Charts::assets() !!}

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div  class="col-md-12">

                <div> 
                    <h3>Riwayat Akreditasi</h3>
                     <span>Fakultas ,  Universitas Indonesia</span>
                     
                     <br>
                     <br>
                     <br>
                </div>

                <!-- content chart -->
             
                
                <div class="pull-right">
                 {!! $chart2->render() !!}<br><br>
                 </div>

                 {!! $chart1->render() !!}

                <div class="pull-right">
                 <br><br><br>{!! $chart4->render() !!}<br><br>
                 </div>

                 <div class="col-md-offset-2">
                 <br><br><br>{!! $chart3->render() !!}<br><br>
                 </div>
                 
              
                <a href="{{ url('akreditasi/tambah') }}" class="btn-primary btn-lg col-md-offest-2 pull-right"> Tambah Borang</a><br><br><br>
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
                              <center>
                              <button class="btn glyphicon glyphicon-pencil" onclick=''>Details</button>
                              @if($role=='BPMA' || $role=='Admin')
                              <a href="{{ url('akreditasi/'.$dataAkreditasi->id.'/5/submit') }}" class="btn-lg glyphicon glyphicon-pencil"> Ases</a>
                              <a href="{{ url('akreditasi/'.$dataAkreditasi->id.'/edit') }}" class="btn-lg glyphicon glyphicon-pencil"> Edit</a>
                              @endif
                              </center>
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
