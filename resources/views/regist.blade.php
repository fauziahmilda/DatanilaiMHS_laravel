<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Nilai Mahasiswa | Regist Form</title>
    <!-- Bootstrap -->
    <link href="{{ asset('gentelella-bootstrap/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('gentelella-bootstrap/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('gentelella-bootstrap/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('gentelella-bootstrap/vendors/animate.css/animate.min.css') }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset('gentelella-bootstrap/build/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <h1><i class="fa fa-institution"></i></h1>
                  <h1>Data Nilai Mahasiswa</h1>
            
            <form action="/regist" method="POST">
                @csrf
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Full Name" name="name" id="name" required="required" />
              </div>
              <div>
                <input type="text" class="form-control"  placeholder="Username" name="username" id="username" required="required" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" name="email" id="email" required="required" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" id="password" required="required" />
              </div>
              <div>
                <button class="btn btn-default submit">submit</button>
              </div>
              <div class="clearfix"></div>
              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="/login" class="to_register"> Log in </a>
                </p>
                <div class="clearfix"></div>
                <br />
                <div>
                  <p>©2021 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
