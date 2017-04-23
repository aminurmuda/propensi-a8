<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modul Akreditasi</title>

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

                        
                        
                        
                        @if($role!='Admin')
                        <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Borang 3A <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                @if($role!='Pimpinan Universitas' && $role!='Reviewer Universitas' && $role!='Admin')
                                <li><a href="{{ url('3a/standar2/'.$kode_fakultas) }}">Standar 2</a></li>
                                <li><a href="{{ url('3a/standar4/'.$kode_fakultas) }}">Standar 4</a></li>
                                <li><a href="{{ url('3a/standar7/'.$kode_fakultas) }}">Standar 7</a></li>
                                @endif
                                @if($role=='Pimpinan Universitas' || $role=='Reviewer Universitas')
                                <li><a href="{{ url('3a/standar2') }}">Standar 2</a></li>
                                <li><a href="{{ url('3a/standar4') }}">Standar 4</a></li>
                                <li><a href="{{ url('3a/standar7') }}">Standar 7</a></li>
                                @endif
                            </ul>
                        </li>
                        @endif

                        @if($role!='Admin')
                        <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Borang 3B <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                               @if($role!='Pimpinan Universitas' && $role!='Reviewer Universitas' && $role!='Admin')
                                <li><a href="{{ url('3b/standar2/'.$kode_fakultas) }}">Standar 2</a></li>
                                <li><a href="{{ url('3b/standar4/'.$kode_fakultas) }}">Standar 4</a></li>
                                <li><a href="{{ url('3b/standar7/'.$kode_fakultas) }}">Standar 7</a></li>
                                @endif
                                @if($role=='Pimpinan Universitas' || $role=='Reviewer Universitas')
                                <li><a href="{{ url('3b/standar2') }}">Standar 2</a></li>
                                <li><a href="{{ url('3b/standar4') }}">Standar 4</a></li>
                                <li><a href="{{ url('3b/standar7') }}">Standar 7</a></li>
                                @endif
                            </ul>
                        </li>
                        @endif

                        <li><a href="#">Evaluasi Diri</a></li>

                        @if($role!='Tim Akreditasi')
                        <li><a href="#">Riwayat Akreditasi</a></li>
                        @endif

                        <!-- role pimpinan fakultas -->
                       @if ($role=='Pimpinan Fakultas')
                        <li class="dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kelola Tim Akreditasi <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                                <li><a href="{{ url('/timakreditasi/tambah/'.$kode_fakultas) }}">Tambah Pengguna</a></li>
                                <li><a href="{{ url('/timakreditasi/kelola/'.$kode_fakultas) }}">Lihat dan Hapus Pengguna</a></li>
    
                            </ul>
                        </li>
                        @endif


                        <!-- role super admin -->
                        @if ($role=='Admin')
                        
                        <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Borang <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('3b/standar2') }}">3A, Standar 2</a></li>
                                <li><a href="{{ url('3b/standar4') }}">3A, Standar 4</a></li>
                                <li><a href="{{ url('3b/standar7') }}">3A, Standar 7</a></li>

                                <li><a href="{{ url('3b/standar2') }}">3B, Standar 2</a></li>
                                <li><a href="{{ url('3b/standar4') }}">3B, Standar 4</a></li>
                                <li><a href="{{ url('3b/standar7') }}">3B, Standar 7</a></li>

                            </ul>

                        </li>

                        <li class="dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kelola<span class="caret"></span></a>
                           <ul class="dropdown-menu">
                                <li><a href="{{ url('/timakreditasi/tambah/') }}">Tambah Tim Akreditasi</a></li>
                                <li><a href="{{ url('/timakreditasi/kelola/') }}">Lihat dan Hapus Tim Akreditasi</a></li>
                                <li><a href="{{ url('kelolapimpinan/'.$user) }}">Kelola Pimpinan</a></li>
    
                            </ul>
                        </li>
                        @endif

                        <!-- role pimpinan reviewer -->


                       
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                        <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Signed in as {{$role}} <span class="caret"></span></a>
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

@yield('content')


<footer>
  <div class="footer navbar-fixed-bottom">
    <p id="footerbawah">Copyright © 2017 Propensi A08. All Rights Reserved</p>
  </div>
</footer>



    <!-- jQuery -->
    <script src="{{ url('js/jquery.js') }}"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url('js/bootstrap.min.js') }}">
    </script>

    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"> </script>
    <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"> </script>

    <!-- Script DataTable -->

    <script>
          $(document).ready(function() {
            $('#example').DataTable();
     
            // TODO===================
            $('#username').on('change', function() {
                $('#sel1').on('change', function() {
                    $('#form-cari').attr('action', 'tambah/'+ $('#username').val() + '/' + $('#sel1').val());
                })
            });

            $('#selectFakultas').on('change', function() {
                $('#form-fakultas').attr('action', 'tambah/'+ $('#selectFakultas').val());

            });

            $('#selectFakultas1').on('change', function() {
                $('#form-fakultas1').attr('action', 'kelola/'+ $('#selectFakultas1').val());

            });
        } );
    </script>

    <!-- Script Modal -->
    <script>
            $('#confirmationModal').on('show.bs.modal', function(e) {
          var username = e.relatedTarget.dataset.username;
          document.getElementById("isi").innerHTML="Anda yakin ingin menghapus "+username+ " dari tim akreditasi?";
          var link = document.getElementById("link");
          var linkHapus = "hapus/"+username;
        link.setAttribute("href", linkHapus);
      });

        $('#confirmationModal1').on('show.bs.modal', function(e) {
              var name = e.relatedTarget.dataset.name;
              var username = e.relatedTarget.dataset.username;
              document.getElementById("isi1").innerHTML="Anda yakin ingin menghapus "+name+ " dari pimpinan?";
              var link = document.getElementById("link1");
              var linkHapus = "hapus/"+username;
            link.setAttribute("href", linkHapus);
          });
    </script>

    <!-- script untuk navigation -->
    <script> 
            $(function(){
            $('.button-checkbox').each(function(){
                var $widget = $(this),
                    $button = $widget.find('button'),
                    $checkbox = $widget.find('input:checkbox'),
                    color = $button.data('color'),
                    settings = {
                            on: {
                                icon: 'glyphicon glyphicon-check'
                            },
                            off: {
                                icon: 'glyphicon glyphicon-unchecked'
                            }
                    };

                $button.on('click', function () {
                    $checkbox.prop('checked', !$checkbox.is(':checked'));
                    $checkbox.triggerHandler('change');
                    updateDisplay();
                });

                $checkbox.on('change', function () {
                    updateDisplay();
                });

                function updateDisplay() {
                    var isChecked = $checkbox.is(':checked');
                    // Set the button's state
                    $button.data('state', (isChecked) ? "on" : "off");

                    // Set the button's icon
                    $button.find('.state-icon')
                        .removeClass()
                        .addClass('state-icon ' + settings[$button.data('state')].icon);

                    // Update the button's color
                    if (isChecked) {
                        $button
                            .removeClass('btn-default')
                            .addClass('btn-' + color + ' active');
                    } 
                    else 
                    { 
                        $button
                            .removeClass('btn-' + color + ' active')
                            .addClass('btn-default');
                    }
                }
                function init() {
                    updateDisplay();
                    // Inject the icon if applicable
                    if ($button.find('.state-icon').length == 0) {
                        $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
                    }
                }
                init();
            });
        });
    </script>

       <script> $(document).ready(function () {
            $('.collapse.in').prev('.panel-heading').addClass('active');
            $('#accordion, #bs-collapse')
                .on('show.bs.collapse', function (a) {
                    $(a.target).prev('.panel-heading').addClass('active');
                })
                .on('hide.bs.collapse', function (a) {
                    $(a.target).prev('.panel-heading').removeClass('active');
                });
        });
    </script> <!-- untuk accordion -->

</body>

</html>
