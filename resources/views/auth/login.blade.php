<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>GPS Presensi</title>
    <meta name="description" content="Mobilekit HTML Mobile UI Kit">
    <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html" />
    <link rel="icon" type="image/png" href={{ asset("assets/img/favicon.png") }} sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href={{ asset("assets/img/icon/192x192.png") }}>
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="./vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{ asset("assets/font-awesome-4.7.0/css/font-awesome.min.css") }}>
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{ asset("assets/vendor/animate/anime.css") }}>
    <link rel="stylesheet" type="text/css" href={{ asset("assets/vendor/css-hamburgers/hamburgers.min.css") }}>
    <link rel="stylesheet" type="text/css" href={{ asset("assets/vendor/animsition/css/animsition.min.css") }}>
    <link rel="stylesheet" type="text/css" href={{ asset("assets/vendor/select2/select2.min.css") }}>
    <link rel="stylesheet" type="text/css" href={{ asset("assets/vendor/daterangepicker/daterangepicker.css") }}>

  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./vendor/animate/animate.css">
  <!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href="./vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./vendor/select2/select2.min.css">
  <!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href="./vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href={{ asset("assets/css/style.css") }}>
    <link rel="stylesheet" type="text/css" href={{ asset("assets/css/util.css") }}>
    <link rel="stylesheet" type="text/css" href={{ asset("assets/css/main.css") }}>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src = "./assets/js/sweetalert.js" defer></script>
</head>

<body style="background-color: #666666"></body>
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
      @php
      $warning = Session::get('warning');
      @endphp

      @if (Session::get('warning'))
      <script>
      document.addEventListener('DOMContentLoaded', function () {
          Swal.fire({
              icon: 'warning',
              title: 'Warning',
              text: '{{ $warning }}',
              confirmButtonText: 'OK'
          });
      });
      </script>
      @endif
        <form action="/proseslogin" method="POST" class="login100-form validate-form">
        <div class="photo-container">
          <img src="assets/img/sample/photo/digitalforte.png" alt="images" class="large-image mb-5">
        </div>
            @csrf
            

          <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="nik" id="nik" />
            <span class="focus-input100"></span>
            <span class="label-input100">Email</span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input class="input100" type="password" name="password" id="password" />
            <span class="focus-input100"></span>
            <span class="label-input100">Passworsd</span>
          </div>

          <div class="flex-sb-m w-full p-t-3 p-b-32">
            <div class="contact100-form-checkbox">
              <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me" />
              <label class="label-checkbox100" for="ckb1">Remember me</label>
            </div>

            <div>
              <a href="#" class="txt1">Forgot Password?</a>
            </div>
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn">Login</button>
          </div>
        </form>

        <div class="login100-more" style="background-image: url('assets/img/sample/photo/pekerja.jpg')"></div>
      </div>
    </div>
  </div>
</body>

    <!-- * App Capsule -->

  <!--===============================================================================================-->
  <script src="./vendor/jquery/jquery-3.2.1.min.js" defer></script>
  <!--===============================================================================================-->
    <script src="./vendor/animsition/js/animsition.min.js" defer></script>
  <!--===============================================================================================-->
    <script src="./vendor/bootstrap/js/popper.js" defer></script>
    <script src="./vendor/bootstrap/js/bootstrap.min.js" defer></script>
  <!--===============================================================================================-->
    <script src="./vendor/select2/select2.min.js" defer></script>
  <!--===============================================================================================-->
    <script src="./vendor/daterangepicker/moment.min.js" defer></script>
    <script src="./vendor/daterangepicker/daterangepicker.js" defer></script>
  <!--===============================================================================================-->
    <script src="./vendor/countdowntime/countdowntime.js" defer></script>
  <!--===============================================================================================-->
    <script src="./assets/js/login.js" defer></script>
    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script src={{ asset("assets/js/lib/jquery-3.4.1.min.js") }}></script>
    <!-- Bootstrap-->
    <script src={{ asset("assets/js/lib/popper.min.js") }}></script>
    <script src={{ asset("assets/js/lib/bootstrap.min.js") }}></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
    <!-- Owl Carousel -->
    <script src={{ asset("assets/js/plugins/owl-carousel/owl.carousel.min.js") }}></script>
    <!-- jQuery Circle Progress -->
    <script src={{ asset("assets/js/plugins/jquery-circle-progress/circle-progress.min.js") }}></script>
    <!-- Base Js File -->
    <script src={{ asset("assets/js/base.js") }}></script>

    



</body>

</html>