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
                        <li class="active"><a href="{{ url('home') }}" class="">Home</a></li>
                        
                        <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Borang Standar <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Standar 2</a></li>
                                <li><a href="#">Standar 4</a></li>
                                <li><a href="#">Standar 7</a></li>
                            </ul>
                        </li>


                        <li><a href="#">Riwayat Akreditasi</a></li>
                        @if ($role!='Tim Akreditasi')
                        <li class="dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kelola Tim Akreditasi <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                                <li><a href="#">Tambah Pengguna</a></li>
                                <li><a href="{{ url('/timakreditasi/'.$kode_fakultas) }}">Lihat dan Hapus Pengguna</a></li>
    
                            </ul>
                        </li>
                        @endif
                       
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                        <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Signed in as {{$role}} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                
                                <li><a href="{{ url('profil/'.$user->username) }}">My Profile</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="{{ url('logout') }}">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>


    <!-- Page Content -->

    <div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-0" >
            <div class="db-wrapper">
                <div class="db-pricing-eleven db-bk-color-one">
                    <div class="price">
                       <!-- <p class="plan-name"></p> -->
                       <br>
                        <p> STANDAR 2 </p>
                        
                    </div>
                    <div class="plan-div">
                        <p class="plan-text">
                            <br>
                            Tata Pamong, Kepemimpinan, Sistem Pengelolaan, dan Penjaminan Mutu
                        </p>
                    </div>
                    <div class="pricing-footer">

                        <a href="#" class="btn db-button-color-square btn-m round">Pilih Standar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-md-offset-0">
            <div class="db-wrapper">
                <div class="db-pricing-eleven db-bk-color-one">
                    <div class="price">
                        <br>
                        <p>STANDAR 4</p>
                        

                    </div>
                    <div class="plan-div">
                        <p class="plan-text">
                            <br>Sumber Daya Manusia
                        </p>
                    </div>
                    <div class="pricing-footer">

                        <a href="#" class="btn db-button-color-square btn-m round">Pilih Standar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-md-offset-0">
            <div class="db-wrapper">
                <div class="db-pricing-eleven db-bk-color-one">
                    <div class="price">
                        <br>
                        <p>STANDAR 7</p>
                        

                    </div>

                    <div class="plan-div">
                        <p class="plan-text">
                            <br>Penelitian, Pelayanan/Pengabdian Kepada Masyarakat dan Kerjasama
                        </p>
                    </div>
                    <div class="pricing-footer">

                        <a href="#" class="btn db-button-color-square btn-m round">Pilih Standar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
   <br>
   <br>
   <br>
   <br>



</div>

    
    <!-- /.container -->


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

    <script>
      $(document).ready(function() {
        $('#example').DataTable();
    } );
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

</body>

</html>
