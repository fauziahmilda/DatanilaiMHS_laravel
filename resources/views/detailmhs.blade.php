
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Data Nilai Mahasiswa | Daftar Mahasiswa</title>

    <!-- Bootstrap -->
    <link href={{ asset('gentelella-bootstrap/vendors/bootstrap/dist/css/bootstrap.min.css') }} rel="stylesheet">
    <!-- Font Awesome -->
    <link href={{ asset('gentelella-bootstrap/vendors/font-awesome/css/font-awesome.min.css') }} rel="stylesheet">
    <!-- NProgress -->
    <link href={{ asset('gentelella-bootstrap/vendors/nprogress/nprogress.css') }} rel="stylesheet">
    <!-- iCheck -->
   <link href={{ asset('gentelella-bootstrap/vendors/iCheck/skins/flat/green.css') }} rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href={{ asset('gentelella-bootstrap/build/css/custom.min.css') }} rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-institution"></i> <span>Data Nilai MHS</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <br>
                <h2>{{ Auth()->user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                  <h3>General</h3>
                  <ul class="nav side-menu">
                    <li><a href="/cekinput"><i class="fa fa-edit"></i>Input Data Nilai</a>
                    </li>
                    <li><a href="/daftarmhs"><i class="fa fa-table"></i> Daftar Mahasiswa</a>
                    </li>
                  </ul>
                </div>
              </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    {{ Auth()->user()->name }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="/main"> Profile</a></li>
                    <li>
                    <li><a href="/login"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                </div>
              </div>
            </div>

            <div class="clearfix"></div>


              <div class="clearfix"></div>


              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="x_panel">
                          <div class="x_title">
                            <h2><b>Detail Data Mahasiswa: {{ $ambil->name_mhs }}</b></h2>
                            <ul class="nav navbar-right panel_toolbox">
                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                              </li>
                              <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="#">Settings 1</a>
                                  </li>
                                  <li><a href="#">Settings 2</a>
                                  </li>
                                </ul>
                              </li>
                              <li><a class="close-link"><i class="fa fa-close"></i></a>
                              </li>
                            </ul>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
        
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th scope="row">Id</th>
                                  <td>{{ $ambil->id }}</td>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">Nama</th>
                                  <td>{{ $ambil->name_mhs }}</td>
                                </tr>
                                <tr>
                                  <th scope="row">NIM</th>
                                  <td>{{ $ambil->NIM }}</td>
                                </tr>
                                <tr>
                                  <th scope="row">Kelas</th>
                                  <td>{{ $ambil->kelas }}</td>
                                </tr>
                                <tr>
                                  <th>Status</th>
                                  <td>{{ $ambil->status }}</td>
                                </tr>
                                <tr>
                                  <th>Nilai Tugas</th>
                                  <td>{{ $ambil->nilai_tugas }}</td>
                                </tr>
                                <tr>
                                  <th>Nilai UTS </th>
                                  <td>{{ $ambil->nilai_uts }}</td>
                                </tr>
                                <tr>
                                  <th>Nilai UAS </th>
                                  <td>{{ $ambil->nilai_uas }}</td>
                                </tr>
                                <tr>
                                  <th>Nilai Total </th>
                                  <td>{{ $ambil->nilai_total }}</td>
                                </tr>
                                <tr>
                                  <th>Grade </th>
                                  <td>{{ $ambil->grade }}</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src={{ asset('gentelella-bootstrap/vendors/jquery/dist/jquery.min.js') }}></script>
    <!-- Bootstrap -->
    <script src={{ asset('gentelella-bootstrap/vendors/bootstrap/dist/js/bootstrap.min.js') }}></script>
    <!-- FastClick -->
    <script src={{ asset('gentelella-bootstrap/vendors/fastclick/lib/fastclick.js') }}></script>
    <!-- NProgress -->
    <script src={{ asset('gentelella-bootstrap/vendors/nprogress/nprogress.js') }}></script>
    <!-- iCheck -->
    <script src={{ asset('gentelella-bootstrap/vendors/iCheck/icheck.min.js') }}></script>

    <!-- Custom Theme Scripts -->
    <script src={{ asset('gentelella-bootstrap/build/js/custom.min.js') }}></script>
  </body>
</html>