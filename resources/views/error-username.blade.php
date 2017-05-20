@extends('layouts.headerfooter')

@section('content')

    <div class="container">
        <div class="row">
            <div  class="col-md-8 col-md-offset-2" id="kontenkelola">

                <div id="titlekelola"> 
                     <h2>Kelola Pimpinan</h2>
                     <span>Hapus Pimpinan</span>
                     <br>
                     <br>
                     <br>
                     <div class="alert alert-danger">
                      <strong>Mohon maaf</strong>, username yang anda masukkan tidak terdaftar.
                    </div>
                     <br>
                    <p>Anda akan kembali ke <a href="{{ URL::previous() }}">halaman sebelumnya</a> dalam waktu <span id="seconds">5</span> detik.</p>

                </div>
            </div>
        </div>
    </div>

   

    <script type="text/JavaScript">
    var seconds = 5; // seconds for HTML
    var foo; // variable for clearInterval() function

    function redirect() {
        document.location.href = '{{ URL::previous() }}';
    }

    function updateSecs() {
        document.getElementById("seconds").innerHTML = seconds;
        seconds--;
        if (seconds == -1) {
            clearInterval(foo);
            redirect();
        }
    }

    function countdownTimer() {
        foo = setInterval(function () {
            updateSecs()
        }, 1000);
    }

    countdownTimer();
    </script>

@endsection
