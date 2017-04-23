@extends('layouts.headerfooter')

@section('content')

    <!-- Page Content -->

    <div class="container">
    <div class="row">
        <div class="col-md-12" >
            <div class="db-wrapper">
            <h1>Update Borang 3A Standar 4.1</h1>
            <p>Sistem seleksi/perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan untuk menjamin mutu penyelenggaraan program akademik.  </p>

                          <form action="{{url('3a/standar4edit/'.$kodeStandar.'/'.$kodeProdi.'/submit')}}">
                          {{csrf_field()}}
                          <div class="form-group">
                            <textarea class="form-control" id='textarea' name='textarea'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut iaculis risus condimentum eros dapibus, elementum molestie purus bibendum. Vivamus malesuada vel urna vel dapibus. Nam et ligula varius, scelerisque urna eget, blandit quam. Aliquam ex elit, sollicitudin et laoreet sit amet, tristique ac odio. Aenean dignissim justo augue, sit amet consequat mi scelerisque ac. Nam lobortis tristique est eget aliquam. Sed sit amet vestibulum lectus, in congue magna.

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

    
   
   <br>
   <br>
   <br>
   <br>



</div>

@endsection