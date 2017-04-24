@extends('layouts.headerfooter')

@section('content')

    <!-- Page Content -->

    <div class="container">
    <div class="row">
        <div class="col-md-12" >
            <div class="db-wrapper">
            <h1>Update Borang 3A Standar 2</h1>
              <br>
              <h3>
                  {{ $standar2['standar2'][$kodeStandar]['judul'] }}
              </h3>
              <br>
              {{ $standar2['standar2'][$kodeStandar]['perintah'] }}<br><br>

              <form action="{{url('3a/standar2edit/'.$kodeStandar.'/'.$kodeProdi.'/submit')}}">
              {{csrf_field()}}
              <div class="form-group">
                <textarea class="form-control" id='textarea' name='textarea'>
                  
                </textarea>
              </div>
              <button type="submit">Simpan</button>
              </form>
              <script>
               // Replace the <textarea id="editor1"> with a CKEditor
                    // instance, using default configuration.
                CKEDITOR.replace( 'textarea' );
               </script>            
            </div>
        </div>
    </div>

</div>

@endsection