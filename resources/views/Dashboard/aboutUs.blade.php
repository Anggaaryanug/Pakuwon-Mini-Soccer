<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/aboutUs.css') }}">

</head>

<body>

    <div class="card bg-dark text-white image-aboutUs">
        <img src="img/aboutus.png" class="img-fluid" alt="...">
        <div class="card-img-overlay d-flex justify-content-center align-items-center">
            <h1 class="card-title">ABOUT US</h1>
        </div>
    </div>

    <section class="container-service">
        <div class="row d-flex justify-content-center gap-4">
            <div class="col-6 col-sm-3  card-service">
                <div class="icon-service">
                    <img src="img/icon/phone.png" alt="">
                </div>
                <div>
                    <h2 class="judul-service">Phone</h2>
                    <p class="artikel-service">+62 812-9990-4546</p>
                </div>

            </div>


            <div class="col-6 col-sm-3  card-service">
                <div class="icon-service mt-5">
                    <img src="img/icon/email.png" alt="">
                </div>
                <div>
                    <h2 class="judul-service">Email</h2>
                    <p class="artikel-service">pakuwon@gmail.com</p>
                </div>

            </div>


            <div class="col-6 col-sm-3  card-service">
                <div class="icon-service">
                    <img src="img/icon/location.png" alt="">
                </div>
                <div>
                    <h2 class="judul-service">location</h2>
                    <p class="artikel-service">Ancaran, Kuningan</p>
                </div>
            </div>

        </div>
    </section>


    <div class="row d-flex justify-content-center ms-4 mt-5">
        <div class="col-5 ms-5 ">
            <div class="container-contact mt-5">
                <div class="card-contact shadow">
                    <div class="card-body p-5">
                        <h3 class="card-title mb-2">Get In Touch!</h3>
                        <p class="card-text ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.</p>

                        <form class="form-contact">
                            <div class="form-group ">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" rows="3" placeholder="Enter your message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-4">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 ">
            <div class="container-maps mt-5 ">
        
                    <h3 class="card-title mb-2">Our location </h3>
                    <p class="card-text ">Lorem ipsum dolor sit amet,<br>
                     consectetur adipiscing elit. Sed do eiusmod tempor.</p>
                    <div class="card-maps  ">
                        <iframe class="shadow" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3328206579354!2d108.51610857504423!3d-6.97000579303063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f17a006c1ae7b%3A0x16279b08348312f!2sPakuwon%20Mini%20Soccer!5e0!3m2!1sid!2sid!4v1731513136575!5m2!1sid!2sid" width="590" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                
            </div>
        </div>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>