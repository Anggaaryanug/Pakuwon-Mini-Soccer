<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    
    <!-- LINK BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    <!-- Favicons -->
    <link href="../assets/img/favicon.ico" rel="icon" />
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- FONT POPPINS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

    <!-- FONT INTER -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('css/login.css') }}"/>
  </head>

  <body>
    

    <section class="container">
      <div class="gambar">
        <h1>
          Ayo Kelola Keuangan <span><br />Anda bersama kami </span>
        </h1>
        <img src="img/loginimg.png" alt="" />
      </div>

      <div class="form" >
        <h1>Masuk</h1>
        <form  action=" ">
          <button name="btnGoogle" class="btnGoogle"><img src="img/icon/Google.png " class="logo-google" alt="" />Lanjutkan dengan google</button>
          <br />
          <button name="btnFacebook" class="btnFacebook"><img src="img/icon/Facebook.png" class="logo-facebook" />Lanjutkan dengan facebook</button>
          <br />
          <br />
          <label>Email atau Nama pengguna</label><br />
          <input type="text" name="username" class="field-email" /><br />
          <label>Kata Sandi</label><br />
          <input type="password" name="password" class="field-kataSandi" />
          <div class="checkbox">
            <input type="checkbox" />
            <label for="">Ingat Saya</label>
          </div>
          <br />
          <button name="login" class="btnLogin">Masuk</button>
          <p>
            Belum punya akun? Yuk Buat sekarang!
            <br />
            <a href=" ">Buat akun</a>
          </p>
        </form>
      </div>
    </section>
  </body>
</html>