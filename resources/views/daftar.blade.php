<!DOCTYPE html>
<html>
  <head>
    <title>Daftar</title>
     <!-- LINK BOOTSTRAP -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
     <!-- Favicons -->
     <link href="assets/img/favicon.ico" rel="icon" />
     <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
 
   
      <!-- FONT POPPINS -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  
    <!-- FONT INTER -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />

    <!-- LINK FOTN AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="{{ asset('css/daftar.css') }}" />
  </head>

  <body>

    <div class="container">
      <div class="gambar">
        <h1>
          Ayo Kelola Keuangan <span><br />Anda bersama kami </span>
        </h1>
        <img src="techny-data-privacy-and-security-on-laptop 1.png" alt="" />
      </div>

      <div class="form">
        <h1>Daftar</h1>
        <form method=" " action="">
          <div class="Field-User">
            <label class="label-namaPengguna"  >Nama Pengguna</label><br />
            <input type="text" name="username" placeholder="Nama lengkap" />
            <img src="img/icon/User.png" class="img-field" alt="" />
          </div>

          <div class="field-email">
            <label class="label-email">Alamat Email</label><br />
            <input type="email" name="username" placeholder="Email" />
            <img src="img/icon/email1.png" class="img-field" alt="" />
          </div>

          <div class="field-telepon">
            <label class="label-telepon">Nomer Telepon</label><br />
            <input type="text" name="" placeholder="Nomer Telepon" />
            <img src="img/icon/telepn.png" class="img-field" alt="" />
          </div>

          <div class="field-kataSandi">
            <label class="label-kataSandi">Kata Sandi</label><br />
            <input type="password" name="" placeholder="Password" />
            <img src="img/icon/password.png" class="img-field" alt="" />
          </div>

          <button name="login" class="btnDaftar">Daftar</button>
       
        </form>
      </div>
    </div>

  </body>
</html>