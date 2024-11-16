<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/Dhome.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/pakuwon.png" alt="" width="60" height="55">
            </a>
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                <ul class="navbar-nav gap-5 ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Booking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">News</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                </ul>
            </div>

            <button type="button" class="btn btn-login">Log in / Sign Up</button>
        </div>
    </nav>


    <section class="container-hero">
        <div class="row gap-5 ms-5">
            <div class="col">

                <div class="text-hero">
                    <h1>PAKUWON</h1>
                    <h1>MINI SOCCER</h1>
                    <p>Pakuwon Minni Soccer menyediakan lapangan yang berkualitas tinggi dan berstandar nasional. Tersedia juga beragam fasilitas pendukung yang membuat permainan Mini Soccer-mu menjadi lebih menyenangkan.</p>
                </div>
          
            </div>

            <div class="col ms-5 mt-5">
                <img src="img/goat.png" alt="">
            </div>

        </div>
    </section>


    <section class="container-fasilitas">
        <div class="row d-flex justify-content-center gap-4 ">
            <div class="col-6 col-sm-3 text-center mt-2 text-fasilitas">
                <h2 class="fasilitas-judul">FASILITAS</h2>
                <p class="fasilitas-artikel">Banyak Fasilitas yang bisa kamu dapatkan di Pakuwon Mini Soccer</p>
            </div>

            <div class="col-6 col-sm-3  card-fasilitas">
                <div class="icon-fasilitas">
                    <img  src="img/icon/masjid.png" alt="">
                </div>
                <div>
                    <h2 class="judul-fasilitas">Mushola</h2>
                </div>

            </div>

           <div class="col-6 col-sm-3  card-fasilitas">
                <div class="icon-fasilitas" >
                    <img  src="img/icon/shower.png" alt="">
                </div>
                <div>
                    <h2 class="judul-fasilitas" >Kamar Mandi</h2>
                </div>

            </div>

            <!-- Force next columns to break to new line -->
            <div class="w-100"></div>


            <div class="col-6 col-sm-3  card-fasilitas">
                <div class="icon-fasilitas">
                    <img  src="img/icon/kantin.png" alt="">
                </div>
                <div>
                    <h2 class="judul-fasilitas">Kantin</h2>
                </div>

            </div>


            <div class="col-6 col-sm-3  card-fasilitas">
                <div class="icon-fasilitas">
                    <img  src="img/icon/lapang.png" alt="">
                </div>
                <div>
                    <h2 class="judul-fasilitas">Berstandar Nasional</h2>
                </div>

            </div>


            <div class="col-6 col-sm-3  card-fasilitas">
                <div class="icon-fasilitas">
                    <img  src="img/icon/toilet.png" alt="">
                </div>
                <div>
                    <h2 class="judul-fasilitas">Toilet</h2>
                </div>

            </div>



        </div>
    </section>



    <section class="card-service d-flex justify-content-center mt-5 gap-5">

        <div class="card" style="width: 14rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>

        <div class="card" style="width: 14rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>

        <div class="card" style="width: 14rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>


        <div class="card" style="width: 14rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>