@extends('layouts.headerfooter')

@section('content')


    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div  class="col-md-8 col-md-offset-2" id="kontenkelola">

                <div id="titlekelola"> 
                     <img class="img-responsive" src="{{ url('images/kelolatim.png') }}" alt="" >
                     <span>Tambah dan Hapus Pengguna</span>
                     <br>
                     <br>
                     <br>
                     <div class="alert alert-success">
                      <strong>{{ $pegawai -> nama }}</strong> berhasil ditambahkan menjadi Tim Akreditasi.
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
