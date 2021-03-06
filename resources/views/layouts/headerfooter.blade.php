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
<!--     <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
                         -->

                          <!-- Include external CSS. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">

    <!-- Include Editor style. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0/css/froala_style.min.css" rel="stylesheet" type="text/css" />
    
    <!-- <script src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>


    <style>
    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu> .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -6px;
        margin-left:-1px;
        -webkit-border-radius: 0 6px 6px 6px;
        -moz-border-radius: 0 6px 6px 6px;
        border-radius: 0 6px 6px 6px;

    }

    .dropdown-submenu>a:after{
        display: block;
        content: " ";
        float: right;
        width: 0;
        height: 0;
        border-color: transparent;
        border-style: solid;
        border-width: 5px 0 5px 5px;
        border-left-color: black;
        margin-top:5px;
        margin-right: -10px;
    }

    .dropdown-submenu:hover>a:after{
        border-left-color: #555;
    }

    .dropdown-submenu.pull-left{
        float: none:
    }

    .dropdown-submenu.pull-left>.dropdown-menu{
        left: 100%
        margin-left:1-0px;
        -webkit-border-radius: 6px 0 6px 6px;
        -moz-border-radius: 6px 0 6px 6px;
        border-radius: 6px 0 6px 6px;

    }

    </style>

    <script lang="javascript">
        (function($){
            $(document).ready(function(){
                $('ul.dropdown-menu[data-toggle=dropdown]').on('click',function(event){
                    event.preventDefault();
                    event.stopPropagation();
                    $(this).parent().siblings().removeClass('open');
                    $(this).parent().toggleClass('open');
                });
            });
        })(jQuery);
    </script>


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
                        @if($role=='Tim Akreditasi' || $role=='Tim Reviewer' || $role=='Admin')
                        <li><a href="{{ url('homestatus') }}" class="">Kelola Borang Akreditasi</a></li>
                        @else 
                            @if($role=='Pimpinan Universitas' || $role=='BPMA')
                                <li></li>
                            @else
                                 <li><a href="{{ url('home') }}" class="">Home</a></li>
                            @endif
                       
                        @endif
                                @if($role!='Tim Akreditasi' && $role!='Tim Reviewer')
                                    @if($role=='Admin' || $role=='Pimpinan Universitas' || $role=='BPMA')
                                    <li><a href="{{url('akreditasi/riwayat')}}">Riwayat Akreditasi</a></li>
                                    @else
                                    <li><a href="{{url('akreditasi/riwayat/'.$kode_fakultas)}}">Riwayat Akreditasi</a></li>
                                    @endif
                                @endif
                                
                                 @if($role=='Admin')
                                    <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kelola<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/timakreditasi/tambah/') }}">Kelola Pegawai</a></li>
                                        <li><a href="{{ url('/timakreditasi/kelola/') }}">Kelola Tim</a></li>
                                        <li><a href="{{ url('kelolapimpinan/'.$user) }}">Kelola Pimpinan</a></li>
                                    </ul>
                                    </li>
                                @endif

                                    @if($role=='Pimpinan Fakultas')
                                    <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kelola<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/timakreditasi/tambah/'.$kode_fakultas) }}">Kelola Pegawai</a></li>
                                        <li><a href="{{ url('/timakreditasi/kelola/'.$kode_fakultas) }}">Kelola Tim</a></li>


                                       
                                    </ul>
                                    </li>
                                    @endif



                        <!-- end navbar baru -->









                        <!--
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
                        @endif
                        
                        @if($role!='Admin' && $role!='Pimpinan Universitas' && $role!='Pimpinan Fakultas')
                        <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Borang 3A <span class="caret"></span></a>
                            <ul class="dropdown-menu">

                                @if($role=='Tim Akreditasi' || $role=='Reviewer Prodi')

                                <li><a href="{{ url('3a/standar2/'.$kode_fakultas) }}">Standar 2</a></li>
                                <li><a href="{{ url('3a/standar4/'.$kode_fakultas) }}">Standar 4</a></li>
                                <li><a href="{{ url('3a/standar7/'.$kode_fakultas) }}">Standar 7</a></li>
                                @else
                                <li><a href="{{ url('3a/standar2') }}">Standar 2</a></li>
                                <li><a href="{{ url('3a/standar4') }}">Standar 4</a></li>
                                <li><a href="{{ url('3a/standar7') }}">Standar 7</a></li>
                                @endif
                            </ul>
                        </li>
                        @endif

                        @if($role!='Admin' && $role!='Pimpinan Universitas' && $role!='Pimpinan Fakultas')
                        <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Borang 3B <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                               @if($role=='Tim Akreditasi' || $role=='Reviewer Prodi')
                                <li><a href="{{ url('3b/standar2/'.$kode_fakultas) }}">Standar 2</a></li>
                                <li><a href="{{ url('3b/standar4/'.$kode_fakultas) }}">Standar 4</a></li>
                                <li><a href="{{ url('3b/standar7/'.$kode_fakultas) }}">Standar 7</a></li>
                                @else 
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

                        <!-- role pimpinan fakultas 
                       @if ($role=='Pimpinan Fakultas')
                        <li class="dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kelola Tim Akreditasi <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                                <li><a href="{{ url('/timakreditasi/tambah/'.$kode_fakultas) }}">Tambah Pengguna</a></li>
                                <li><a href="{{ url('/timakreditasi/kelola/'.$kode_fakultas) }}">Lihat dan Hapus Pengguna</a></li>
    
                            </ul>
                        </li>
                        @endif


                        <!-- role super admin
                        @if ($role=='Admin')
                        
                        <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Borang <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('3a/standar2') }}">3A, Standar 2</a></li>
                                <li><a href="{{ url('3a/standar4') }}">3A, Standar 4</a></li>
                                <li><a href="{{ url('3a/standar7') }}">3A, Standar 7</a></li>

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

                        <!-- role pimpinan reviewer

                        -->
                       
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                        <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$role}} : <b>{{$user}}</b>  <span class="caret"></span></a>
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

            $('#selectProdi').on('change', function() {
                $('#formProdi').attr('action', $(location).attr('pathname')+'/'+ $('#selectProdi').val());
            });

            $('#selectFakultasGeneral').on('change', function() {
                $('#formFakultas').attr('action', $(location).attr('pathname')+'/'+ $('#selectFakultasGeneral').val());
            });

            // $('#kodeProdi').on('change', function() {
            //     // $('#tahun').on('change', function() {
            //         $('#formTambahAkreditasi').attr('action', $(location).attr('pathname')+'/'+ $('#tahun').val()+'/'+ $('#kodeProdi').val());
            //     // });
            // });
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

        $('#submitBtn').click(function() {
            $('#a').text($('#username').val());
            var username = $('#username').val();
            var value = $('#sel1').val();
            if(username == "") {
                document.getElementById('isiSubmit').innerHTML="Tolong lengkapi data yang diperlukan";
                document.getElementById('linkSubmit').style.visibility = 'hidden';
            }
            var link = document.getElementById("linkSubmit");
            var linkTambah = "tambah/"+username+"/"+value;
            link.setAttribute("href", linkTambah);
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


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>

    <!-- Include Editor JS files. -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0/js/froala_editor.pkgd.min.js"></script>

    <!-- Initialize the editor. -->
    <script> $(function() { $('textarea').froalaEditor() }); </script>

</body>

</html>
