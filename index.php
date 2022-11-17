<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studi Kasus 1</title>
    <script src="https://kit.fontawesome.com/31d6e66403.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body class="bg-light">
    <header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand ml-7" href="#">
            <img src="bdg.airways.png" alt="Bootstrap" width="135" height="55">
          </a>
          <span class="nav-item ml-3">
            <font color="white"><strong>BDG AIRWAYS</strong></font>
          </span>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="me-auto"></div>
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="penerbangan.php"><font color="white">Home</font></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><font color="white">Check-in</font></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <font color="white">Status Penerbangan</font>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="">Pesawat</a></li>
                  <li><a class="dropdown-item" href="penerbangan.php">Jadwal Penerbangan</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">
                  <i class="fa-solid fa-magnifying-glass text-white"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <br>
    <br>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner ml-9 mb-10">
        <div class="carousel-item active">
          <div class="corousel-wrapper">
            <div class="row-8">
              <div class="col-8">
                <h1>SELAMAT DATANG</h1>
                <h2>Di Pelayanan Kami</h2>
                <br>
                <font color="white">
                <p>BDG AIRWAYS merupakan suatu pelayanan maskapai penerbangan yang berlokasi di Kota Bandung</p>
                </font>
                <button>Selengkapnya</button>
                
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item active container d-flex align-self-lg-end">
          <img class="margin-" src="" background="black" class="d-block w-10" alt="..." height="60px">
        </div>
    </div>
    <div class="text-center">
      <i class="fa fa-angle-double-down text-white" aria-hidden="true"></i>
    </div>
    <br>
    <div class="container">
      <div class="row">
        <div class="col">
          <select name="Jakarta" id="">
            <option value="1">Keberangkatan</option>
            <option value="2">Jakarta</option>
            <option value="3">Singapore</option>
          </select>
        </div>
        <div class="col order-12">
          <select name="Ke" id="">
            <option value="1">Tujuan</option>
            <option value="2">Jakarta</option>
            <option value="3">Singapore</option>
          </select>
        </div>
        <div class="col order-1">
          <select name="Jam" id="">
            <option value="1">Jam</option>
            <option value="2">12.00</option>
            <option value="3">15.00</option>
            <option value="4">19.00</option>
          </select>
        </div>
        <div class="col order-1">
          <button style="background-color: blue;">Cari</button>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="content-wrapper m-2">
        <div class="text-bg-light">
          <div class="row">
            <div class="col-2 m-2">
              <img class="navbar-brand" src="bdg.airways.png" style="width: 110px;;">
            </div>
            <div class="col-6 m-2">
              <div class="container d-flex align-items-center gap-5">
                <div>
                  <h3>Jakarta</h3>
                  <p class="col-6">12.00</p>
                </div>
                <div>
                  <i class="fa fa-angle-right" aria-hidden="true"></i>
                </div>
                <div>
                  <h3>Singapore</h3>
                  <p class="col-6">13.55</p>
                </div>
              </div>
            </div>
            <div class="col-3 m-2">
              <div class="container d-flex align-items-center gap-5">
                <div>
                  <h3>IDR 1.500.000</h3><p>/pax</p>
                </div>
                <button style="background-color: blue;">Pilih</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="content-wrapper m-2">
        <div class="text-bg-light">
          <div class="row">
            <div class="col-2 m-2">
              <img class="navbar-brand" src="bdg.airways.png" style="width: 110px;;">
            </div>
            <div class="col-6 m-2">
              <div class="container d-flex align-items-center gap-5">
                <div>
                  <h3>Jakarta</h3>
                  <p class="col-6">15.00</p>
                </div>
                <div>
                  <i class="fa fa-angle-right" aria-hidden="true"></i>
                </div>
                <div>
                  <h3>Singapore</h3>
                  <p class="col-6">17.45</p>
                </div>
              </div>
            </div>
            <div class="col-3 m-2">
              <div class="container d-flex align-items-center gap-5">
                <div>
                  <h3>IDR 1.750.000</h3><p>/pax</p>
                </div>
                <button style="background-color: blue;">Pilih</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="content-wrapper m-2">
        <div class="text-bg-light">
          <div class="row">
            <div class="col-2 m-2">
              <img class="navbar-brand" src="bdg.airways.png" style="width: 110px;;">
            </div>
            <div class="col-6 m-2">
              <div class="container d-flex align-items-center gap-5">
                <div>
                  <h3>Jakarta</h3>
                  <p class="col-6">19.00</p>
                </div>
                <div>
                  <i class="fa fa-angle-right" aria-hidden="true"></i>
                </div>
                <div>
                  <h3>Singapore</h3>
                  <p class="col-6">20.45</p>
                </div>
              </div>
            </div>
            <div class="col-3 m-2">
              <div class="container d-flex align-items-center gap-5">
                <div>
                  <h3>IDR 2.100.000</h3><p>/pax</p>
                </div>
                <button style="background-color: blue;">Pilih</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4">
      <div class="container py-4 py-md-5 px-4 px-md-3">
        <div class="row mb-0">
          <div class="col-lg-3 mb-3">
            <img class="navbar-brand" src="bdg.airways.png" style="width:110px">
            <ul class="list-unstyled text-white">
              <li class="mt-3">+62 88229046217</li>
              <li class="">Bandung, Indonesia </li>
            </ul>
          </div>
          <div class="col-9">
            <div class="row d-flex justify-content-end">
              <div class="col-2">
                <a class="nav-link text-white" href="#">Beranda</a>
              </div>
              <div class="col-2">
                <a class="nav-link text-white" href="#">voucher</a>
              </div>
              <div class="col-2">
                <a class="nav-link text-white" href="#">Berita</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <p class="col-md-4 mb-0 text-muted text-light">© 2022 BDG_Airways. All Rights Reserved</p>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>