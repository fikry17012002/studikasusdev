<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Jadwal Penerbangan</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

</head>

<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid container text-center">
    <a class="navbar-brand" href="#"><h2><center>T-AIRLINE</center></h2></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <br><br><br><div class="container-fluid">
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
    <div class="container" style="margin-top: 5em !important;">
        <table class="table table-striped table-bordered" style="width:100%" id="table-flight">
        <h3><center>Jadwal Penerbangan</center></h3>
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">id_penerbangan</th>
                    <th scope="col">Nomor Penerbangan</th>
                    <th scope="col">Kedatangan</th>
                    <th scope="col">Keberangkatan</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Waktu</th>
                </tr>
            </thead>

            <?php

            include "connection.php";
            $no=1;
            $ambildata = mysqli_query($connection, "select * from tb_flights");
            while ($tampil = mysqli_fetch_array($ambildata)){

                echo"
                <tr>
                    <td>$no</td>
                    <td>$tampil[id_penerbangan]</td>
                    <td>$tampil[no_penerbangan]</td>
                    <td>$tampil[kedatangan]</td>
                    <td>$tampil[keberangkatan]</td>
                    <td>$tampil[tanggal]</td>
                    <td>$tampil[waktu]</td>
                </tr> ";

                $no++;
            }

            ?>
        </table>
    </div>
</body>
</html>