<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Booking</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/booking.css') }}">
    </head>



    <body>

        <section class="booking">

            <div class="container-booking mt-5">
                <div class=" >
                    <div class="card-body">
                        <h2 class="text-center mb-4">FORM BOOKING</h2>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="noTelp">No Telepon</label>
                                    <input type="text" class="form-control" id="noTelp" placeholder="Nomor Telepon">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" class="form-control" id="tanggal">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="waktu">Waktu</label>
                                    <input type="time" class="form-control" id="waktu">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="pembayaran">Pembayaran</label>
                                    <input type="file" class="form-control " id="pembayaran" id="formFileSm" placeholder="Metode Pembayaran">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lapangan">Pilih Lapangan</label>
                                    <select class="form-control" id="lapangan">
                                        <option value="Lapangan 1">Lapangan 1</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>



            <div class="container-infobooking">
                <h3 class="text-center mb-4">UNTUK PEMBAYARAN MINIMUN 50% DARI HARGA PEMESANAN</h3>
                <div class="payment-option">
                    <h5>BCA</h5>
                    <input type="text" class="form-control" placeholder="989XXXXXXXX" readonly>
                </div>
                <div class="payment-option">
                    <h5>DANA</h5>
                    <input type="text" class="form-control" placeholder="089XXXXXXXX" readonly>
                </div>
                <div class="payment-option">
                    <h5>BRI</h5>
                    <input type="text" class="form-control" placeholder="2123XXXXXXXX" readonly>
                </div>
            </div>

        </section>

    </body>

    </html>