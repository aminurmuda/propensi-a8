@extends('layouts.headerfooter')

@section('content')

    <!-- Page Content -->

    <div class="container">
    <div class="row">
        <div class="col-md-12" >
            <div class="db-wrapper">
            <h1>Update Borang 3B Standar {{$kodeStandarStr}}</h1><br>
            <!-- 4.1.3,4.2 -->
            @if($kodeStandarStr=='7.1.2')
            <p>{{$standar7['standar7']['7.1'][$kodeStandarStr]['perintah'] }}</p>
            @else
            <p>{{$standar7['standar7']['7.2'][$kodeStandarStr]['perintah'] }}</p>
            @endif

            <br>
                          <form action="{{url('3b/standar7edit/'.$kodeStandar.'/'.$kodeFakultas.'/3b/submit')}}">
                          {{csrf_field()}}
                          <div class="form-group">
                            <textarea class="form-control" id='textarea' name='textarea'>
                            @if($kodeStandarStr=='7.1.2')
                            <p>{{$standar7['standar7']['7.1'][$kodeStandarStr]['isian'] }}</p>
                            @else
                            <p>{{$standar7['standar7']['7.2'][$kodeStandarStr]['isian'] }}</p>
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