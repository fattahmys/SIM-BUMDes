<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SIM-BUMDes - Login</title>

    <!-- Bootstrap -->
    <link href="{{asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('assets/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('assets/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('assets/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="{{route('login')}}" method="POST">
                @csrf
              <h1>Login Form</h1>
              <div>
                <input type="email" name="email" class="form-control" placeholder="email" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="submit">Login</button>
              </div>
              <div>
                {{-- <a type="submit" class="btn btn-default submit">Log in</a>
                <a class="reset_pass" href="#">Lost your password?</a> --}}
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                {{-- <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p> --}}

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1>SIM-BUMDes</h1>
                  <p>©{{date('Y')}} Badan Usaha Milik Desa. <br> Desa Baru, Kecamatan Luyo, Kab. Polewali Mandar. <br> Developed by <a href="https://www.instagram.com/fattahmys/">Fattah Mys</a></p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
         
        </div>
      </div>
    </div>
  </body>
</html>

