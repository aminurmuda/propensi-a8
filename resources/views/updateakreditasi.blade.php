@extends('layouts.headerfooter')

@section('content')

    <!-- Page Content -->

    <div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0" >
            <div class="db-wrapper">
                <h2>Update Akreditasi</h2>
                <br>
                <form action="{{url('akreditasi/edit/'.$tahun.'/'.$kodeProdi.'/submit')}}">
                {{csrf_field()}}
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <tr>
                        <th>Nama Fakultas:</th>
                        <td>{{$akreditasi_prodi -> nama_fakultas}}</td>
                    </tr>
                    <tr>
                        <th>Nama Prodi:</th>
                        <td>{{$akreditasi_prodi -> nama_prodi}}</td>
                    </tr>
                    <tr>
                         <th>Nilai Akreditasi:</th>
                         <td><input type="number" class="form-control" id="nilai_akreditasi" name="nilai_akreditasi" step=".01" value="{{$akreditasi_prodi -> nilai}}" min="0" max="400"></td>
                         <!-- <td><input type="number" class="form-control" id="nilai_akreditasi" step=".01" name="nilai_akreditasi" value="{{$akreditasi_prodi -> nilai}}" readonly="readonly" min="0" max="400"></td> -->
                    </tr>
                    <tr>
                         <th>Peringkat Akreditasi:</th>
                         <td>{{$akreditasi_prodi -> peringkat_akreditasi}}</td>
                    </tr>
                    <tr>
                         <th>Keterangan Akreditasi:</th>
                         <td>{{$akreditasi_prodi -> keterangan}}</td>
                    </tr>
                    <tr>
                         <th>Tahun Keluar:</th>
                         <!-- <td>{{$akreditasi_prodi -> tahun_keluar}}</td> -->
                         <td><input type="date" name="tahun_keluar"></td>
                    </tr>
                    <tr>
                         <th>Masa Berlaku:</th>
                         <!-- <td>{{$akreditasi_prodi -> masa_berlaku}}</td> -->
                         <td><input type="date" name="masa_berlaku"></td>
                    </tr>
                    <tr>
                         <th>Status Akreditasi:</th>
                         <td>{{$akreditasi_prodi -> nama_status}}</td>
                    </tr>
                </table>

                    <button class="btn-primary btn-lg pull-right" type="submit">Simpan</button>    

                </form>
            </div>
        </div>
        <div class="col-md-4 col-md-offset-0">
            <div class="db-wrapper">
            </div>
        </div>
        <div class="col-md-4 col-md-offset-0">
            <div class="db-wrapper">
            </div>
        </div>
    </div>
   
   <br>
   <br>
   <br>
   <br>



</div>

    
    <!-- /.container -->


@endsection
