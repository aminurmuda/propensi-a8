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
                        <li><a href="#" class="">Home</a></li>
                        
                        <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Borang Standar <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Standar 2</a></li>
                                <li><a href="#">Standar 4</a></li>
                                <li><a href="#">Standar 7</a></li>
                            </ul>
                        </li>


                        <li><a href="#">Riwayat Akreditasi</a></li>
                        <li class="dropdown"><a href="{{ url('timakreditasi/$kode_fakultas') }}" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kelola Tim Akreditasi <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                                <li><a href="#">Tambah Pengguna</a></li>
                               <li><a href="{{ url('timakreditasi/$kode_fakultas') }}">Lihat dan Hapus Pengguna</a></li>
    
                            </ul>
                        </li>
                       
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                        <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Signed in as  {{$role}}<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                
                                <li><a href="{{ url('profil/$user') }}">My Profile</a></li>
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
            <div  class="col-md-8 col-md-offset-2" id="kontenkelola">

                <div id="titlekelola"> 
                     <img class="img-responsive" src="{{ url('images/kelolatim.png') }}" alt="" >
                     
                     <br>
                </div>

                


                 <!-- <img class="img-responsive center-block" id="kotakbiru" src="images/kotakdaftarpengguna.png" alt="" > -->

                 <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Edit</th>
                    
                        </tr>
                    </thead>
                  
                    <tbody>
                        @foreach($timAkreditasi as $pegawai)
                        <tr>
                            <td>{{$pegawai->nama}}</td>
                            <td>{{$pegawai->no_pegawai}}</td>
                            <td>
                                <center>
                                <!-- <a href="hapus/{{$pegawai->username}}"> -->
                                <button class="glyphicon glyphicon-trash" type="submit" data-toggle="modal" data-target="#confirmationModal" data-username="{{$pegawai->username}}"></button>
                                <!-- </a> -->
                                </center>
                            </td>
                           
                        </tr>
                        @endforeach
<!--                         <tr>
                            <td>Ani nini</td>
                            <td>123333</td>
                            <td><button class="glyphicon glyphicon-trash" type="submit"></button>
                            </td>
                           
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>156352</td>
                            <td>
                                <button class="glyphicon glyphicon-trash" type="submit"></button>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>18249834</td>
                            <td>
                                <button class="glyphicon glyphicon-trash" type="submit"></button>
                            </td>
                        
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>122222</td>
                            <td>
                                <button class="glyphicon glyphicon-trash" type="submit"></button>
                            </td>
                           
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>1256362</td>
                            <td>
                                <button class="glyphicon glyphicon-trash" type="submit"></button>
                            </td>
                           
                        </tr> -->

                    </tbody>
                </table> 

                <br>

              
                <br>
                <br>

            </div>
        </div>
    </div>
    <!-- /.container -->

    <!-- Modal -->
  <div class="modal fade" id="confirmationModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Hapus Tim Akreditasi</h4>
        </div>
        <div class="modal-body">
          <p id='isi'>isinya</p>
        </div>
        <div class="modal-footer">
          <a href="#" id="link" ><button type="button" class="btn btn-default">Yakin</button></a>
        </div>
      </div>
      
    </div>
  </div>

<footer>
  <div class="container">
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

            $('#confirmationModal').on('show.bs.modal', function(e) {
          var username = e.relatedTarget.dataset.username;
          document.getElementById("isi").innerHTML="Anda yakin ingin menghapus "+username+ " dari tim akreditasi?";
          var link = document.getElementById("link");
          var linkHapus = "hapus/"+username;
        link.setAttribute("href", linkHapus);
      });
    </script>

</body>

</html>
