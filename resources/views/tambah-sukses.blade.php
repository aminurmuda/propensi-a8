<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kelola Tim Akreditasi - Modul Akreditasi</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ url('css/akreditasi.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
      href="https://fonts.googleapis.com/css?family=Montserrat">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <div class="navbar-wrapper">
    <div class="container-fluid">
        <nav class="navbar navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img class="img-responsive" id="logonav" src="{{ url('images/logo.png') }}" alt="" >
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('home') }}" class="">Home</a></li>
                        
                        <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Borang Standar <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Standar 2</a></li>
                                <li><a href="#">Standar 4</a></li>
                                <li><a href="#">Standar 7</a></li>
                            </ul>
                        </li>

                        <li><a href="#">Riwayat Akreditasi</a></li>
                       @if ($role=='Pimpinan Fakultas')
                        <li class="dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kelola Tim Akreditasi <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                                <li><a href="{{ url('/timakreditasi/tambah/'.$kode_fakultas) }}">Tambah Pengguna</a></li>
                                <li><a href="{{ url('/timakreditasi/kelola/'.$kode_fakultas) }}">Lihat dan Hapus Pengguna</a></li>
    
                            </ul>
                        </li>
                        @endif

                       
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                        <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Signed in as  {{$role}}<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                
                                <li><a href="{{ url('profil/'.$user) }}">My Profile</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="{{ url('logout') }}">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

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

    <footer>
      <div class="footer navbar-fixed-bottom">
        <p id="footerbawah">Copyright © 2017 Propensi A08. All Rights Reserved</p>
      </div>
    </footer>

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

</body>

</html>
