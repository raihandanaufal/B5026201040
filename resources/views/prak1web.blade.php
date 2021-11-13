
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="images/logo.png">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Praktikum1</title>
    <style>
        *{
            font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
        }
        .title{
            font-size: 24px;
            margin: 0 0 8px;
            color: #333;
        }
        .visible{
         opacity: 0;
        }
        .btn{
            padding: 0 12px 0 0;
            padding: 0 28px;
            border: 1px solid black;
            font-size: 16px;
        }
        .buynow{
            background: #ec0e49;
            color: white;
            width: 220px;
            margin-left: 30px;
        }
        .fa-star{
            color: rgb(255, 197, 62);
        }
        .fa-circle{
            color: rgb(172, 161, 161);
            cursor: pointer;
            font-size: 0.5em;
        }
        .share{
            cursor: pointer;
        }
        .share:hover{
            color: #ec0e49;
        }
        .small{
            font-size: 14px;
        }
        img{
            cursor: pointer;
        }
        .notice{
            color: #333;
            font-size: 14px;
        }
        .cart{
            width: 240px;
            margin-right: 20px;
        }
        .bawah{
            font-size: 12.25px;
            color: #999;
        }
    </style>
  </head>
  <body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-4">
            <img src="image/3.png" alt="" width="420px">
            <div class="row mt-3">
                <div class="col-2">
                    <img src="image/3.png" class="rounded" alt="" width="60px" height="70px"></div>
                <div class="col-2">
                    <img src="image/4.png" alt class="rounded"="" width="60px" height="70px"></div>
                <div class="col-2">
                    <img src="image/5.png" alt class="rounded"="" width="60px" height="70px"></div>
                <div class="col-2">
                    <img src="image/6.png" alt class="rounded"="" width="60px" height="70px"></div>
                <div class="col-2">
                    <img src="image/7.png" alt class="rounded"="" width="60px" height="70px"></div>
            </div>

            <div class="row mt-3 justify-content-center">
                <div class="col-4">
                    <span class="share"><i class="far fa-heart"></i> Favoritkan</span>
                </div>
                <div class="col-2">
                    <span>|</span>
                   </div>
                <div class="col-4">
                    <span class="share"><i class="fas fa-share-alt"></i> Bagikan</span>
                </div>
            </div>
            </div>

            <div class="col-6">
                <p class="title">MCDODO CH-717 TRAVEL ADAPTOR <br> CHARGER LED DISPLAY PD FAST CHARGING <br> POWER DELIVERY QUICK CHARGE QC 3.0</p> <br>

                <div class="kecil">

                <div class="row">
                    <div class="col">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>25 Ulasan</span>
                        <i class="fas fa-circle mx-1"></i>  <span> 26 Terjual </span>
                    </div>

                </div>
                </div> <br>
                <h3><p class="harga"><b>Rp125.000</b></p></h3> <br>
                <p class="barang">Tersedia > 10 stok barang</p>
                <hr>
                <div class="row">
                    <div class="col-3">
                       <b>Pengiriman</b>
                    </div>
                    <div class="col-3">
                        <p>Lokasi Pelapak</p> <br>
                       <b> Jakarta Utara</b>
                     </div>
                     <div class="col-3">
                        <p>Tujuan Pengiriman</p> <br>
                        <p><b>Pasar Minggu, Jakarta Barat</b></p>
                     </div>
                     <div class="col-3">
                       <p class="visible">PWEBITUMUDAH</p> <br>
                        <p><abbr title="">Ubah Alamat</abbr></p>
                     </div>
                </div>

                <div class="row  my-4">
                    <div class="col-md-2">
                        <button type="button" class="btn btn-outline-dark"><i class="fas fa-envelope"></i>
                            Chat</button>
                    </div>

                    <div class="col-4">
                        <button type="button" class="btn btn-outline-dark cart"><i class="fas fa-cart-plus"></i>
                            Masukkan Keranjang</button>
                    </div>

                    <div class="col-5 ms-1">
                        <button type="button" class="btn btn-outline-dark buynow">Beli Sekarang</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col"><p class="notice"><i class="fas fa-exclamation-circle"></i> Bayar sebelum jam 16.00 agar barang dikirim hari ini</p></div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <img src="image/hp.png" alt="">
                    </div>
                    <div class="col-6">
                        <p><b>Diskon Menanti Kamu di App</b></p>
                        <p class="bawah ">Ada banyak voucher untuk kamu pakai</p>
                     </div>

                </div>
            </div>
            <div class="col-2">
                <img src="image/superseller.png" alt="" width="100px">
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3c396ee398.js" crossorigin="anonymous"></script>
  </body>
</html>
