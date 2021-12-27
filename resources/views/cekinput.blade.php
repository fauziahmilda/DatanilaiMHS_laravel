<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>Data Nilai Mahasiswa | Input Data Nilai</title>

    <!-- Bootstrap -->
    <link href={{ asset('gentelella-bootstrap/vendors/bootstrap/dist/css/bootstrap.min.css') }} rel="stylesheet">
    <!-- Font Awesome -->
    <link href={{ asset('gentelella-bootstrap/vendors/font-awesome/css/font-awesome.min.css') }} rel="stylesheet">
    <!-- NProgress -->
    <link href={{ asset('gentelella-bootstrap/vendors/nprogress/nprogress.css') }}rel="stylesheet">
    <!-- iCheck -->
    <link href={{ asset('gentelella-bootstrap/vendors/iCheck/skins/flat/green.css') }} rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href={{ asset('gentelella-bootstrap/vendors/google-code-prettify/bin/prettify.min.css') }} rel="stylesheet">
    <!-- Select2 -->
    <link href={{ asset('gentelella-bootstrap/vendors/select2/dist/css/select2.min.css') }}rel="stylesheet">
    <!-- Switchery -->
    <link href={{ asset('gentelella-bootstrap/vendors/switchery/dist/switchery.min.css') }} rel="stylesheet">
    <!-- starrr -->
    <link href={{ asset('gentelella-bootstrap/vendors/starrr/dist/starrr.css') }} rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href={{ asset('gentelella-bootstrap/vendors/bootstrap-daterangepicker/daterangepicker.css') }} rel="stylesheet">

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

              @auth
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    {{ Auth()->user()->name }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="/main"> Profile</a></li>
                    <form action="/logout" method="post">
                      @csrf
                      <button type="submit" class="dropdown-item"><i class="fa fa-sign-out pull-right"></i> Log Out</button>
                    </form>
                  </ul>
                </li>
              </ul>
              @endauth
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>NIM</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                </div>
              </div>
            </div>
            <div class="clearfix">
              <div class="container">
                <form action="/input" method="get" enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="text"
                        class="form-control" name="NIM" id="NIM" aria-describedby="helpId" placeholder="Masukan NIM">
                    </div>
                    <button type="submit" class="btn btn-success">Cek NIM</button>
            <div class="row">
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
    <!-- bootstrap-progressbar -->
    <script src={{ asset('gentelella-bootstrap/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}></script>
    <!-- iCheck -->
    <script src={{ asset('gentelella-bootstrap/vendors/iCheck/icheck.min.js') }}></script>
    <!-- bootstrap-daterangepicker -->
    <script src={{ asset('gentelella-bootstrap/vendors/moment/min/moment.min.js') }}></script>
    <script src={{ asset('gentelella-bootstrap/vendors/bootstrap-daterangepicker/daterangepicker.js') }}></script>
    <!-- bootstrap-wysiwyg -->
    <script src={{ asset('gentelella-bootstrap/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}></script>
    <script src={{ asset('gentelella-bootstrap/vendors/jquery.hotkeys/jquery.hotkeys.js') }}></script>
    <script src={{ asset('gentelella-bootstrap/vendors/google-code-prettify/src/prettify.js') }}></script>
    <!-- jQuery Tags Input -->
    <script src={{ asset('gentelella-bootstrap/vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}></script>
    <!-- Switchery -->
    <script src={{ asset('gentelella-bootstrap/vendors/switchery/dist/switchery.min.js') }}></script>
    <!-- Select2 -->
    <script src={{ asset('gentelella-bootstrap/vendors/select2/dist/js/select2.full.min.js') }}></script>
    <!-- Parsley -->
    <script src={{ asset('gentelella-bootstrap/vendors/parsleyjs/dist/parsley.min.js') }}></script>
    <!-- Autosize -->
    <script src={{ asset('gentelella-bootstrap/vendors/autosize/dist/autosize.min.js') }}></script>
    <!-- jQuery autocomplete -->
    <script src={{ asset('gentelella-bootstrap/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}></script>
    <!-- starrr -->
    <script src={{ asset('gentelella-bootstrap/vendors/starrr/dist/starrr.js') }}></script>
    <!-- Custom Theme Scripts -->
    <script src={{ asset('gentelella-bootstrap/build/js/custom.min.js') }}></script>
	
  </body>
</html>
