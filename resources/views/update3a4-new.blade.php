@extends('layouts.headerfooter')

@section('content')

    <!-- Page Content -->

    <div class="container">
    <div class="row">
        <div class="col-md-12" >
            <div class="db-wrapper">
            <h1>Update Borang 3A Standar {{$kodeStandarStr}}</h1><a href="{{ URL::previous() }}" class="btn-primary btn-lg pull-right">Kembali</a><br><br><br>
            @if($kodeStandarStr!='4.6.2')
            <p>{{$standar4['standar4'][$kodeStandarStr]['perintah'] }}</p>
            @else
            <p>{{$standar4['standar4']['4.6'][$kodeStandarStr]['perintah'] }}</p>
            @endif

            <br>
                          <form action="{{url('3a/standar4edit/'.$kodeStandar.'/'.$kodeProdi.'/3a/submit')}}">
                          {{csrf_field()}}
                          <div class="form-group">
                            <textarea class="form-control" id='textarea' name='textarea' style='height: 600px;'>@if($kodeStandarStr!='4.6.2')
                            <p>{{rawurldecode($standar4['standar4'][$kodeStandarStr]['isian'] )}}</p>
                            @else
                            <p>{{$standar4['standar4']['4.6'][$kodeStandarStr]['isian'] }}</p>
                            @endif
                            </textarea>
                          </div>

                          <button class="btn-primary btn-lg pull-right" type="submit">Simpan</button>
                          </form>
                          <script>
                           // Replace the <textarea id="editor1"> with a CKEditor
                                // instance, using default configuration.
                            CKEDITOR.replace( 'textarea' );
                           </script>            
            </div>
        </div>
    </div>

    
   
   <br>
   <br>
   <br>
   <br>



</div>

@endsection