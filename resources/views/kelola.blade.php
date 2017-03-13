<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home - Modul Akreditasi</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../public/css/akreditasi.css" rel="stylesheet">
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
    <nav class="navbar navbar-inverse navbar-fixed-top" id="navigation" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img class="img-responsive" id="logonav" src="../../public/images/logo.png" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Borang Standar <b class="caret"></b></a>
                        <ul class="dropdown-menu dropdownstandar">
                          <li>
                            <a href="#">Standar 2</a>
                          </li>
                          <li>
                            <a href="#">Standar 4</a>
                          </li>
                          <li>
                            <a href="#">Standar 7</a>
                          </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Riwayat Akreditasi</a>
                    </li>
                    <li>
                        <a href="#">Kelola Tim Akreditasi</a>
                    </li>
                </ul>

                <div class="nav navbar-nav  collapse navbar-collapse navbar-right">
                    

                    <a href="#">Logout</a>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container col-,d-8">
        <div class="row">
            <div  class="col-md-8 center-block" id="kontenkelola">

                <form action="#">
                  <div class="input-group">
                     <input class="btn btn-md inputform" name="username" id="username" type="username" placeholder="Username" >
                    
                     <button class="btn btn-info btn-md" type="submit">Add</button>
                
                  </div>
                </form>


                <form action="#">
                  <div class="input-group">
                     <input class="btn btn-md inputform" name="nip" id="nip" type="nip" placeholder="NIP" >

                     <button class="btn btn-info btn-md" type="submit">Add</button>
                    
                  </div>
                </form>


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
                        <tr>
                            <td>Hari Ari</td>
                            <td>12345 </td>
                            <td>
                                <button class="glyphicon glyphicon-trash" type="submit"></button>
                            </td>
                           
                        </tr>
                        <tr>
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
                           
                        </tr>

                    </tbody>
                </table> 

                <button class="btn btn-info btn-md" type="submit">Save</button>
                <button class="btn btn-info btn-md" type="submit">Cancel</button>
                <br>
                <br>

            </div>
        </div>
    </div>
    <!-- /.container -->


<footer>
  <div class="container">
    <p id="footerbawah">Copyright © 2017 Propensi A08. All Rights Reserved</p>
  </div>
</footer>



    <!-- jQuery -->
    <script src="../../public/js/jquery.js"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="../../public/js/bootstrap.min.js">
    </script>

    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"> </script>
    <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"> </script>

    <script>
      $(document).ready(function() {
        $('#example').DataTable();
    } );
    </script>

</body>

</html>
