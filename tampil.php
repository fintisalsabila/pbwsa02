<?php
require_once("koneksi.php")
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="bs46/css/bootstrap.min.css">
        <!-- Latest compiled JavaScript -->
        <script src="bs46/jquery-3.6.4.min.js"></script>
        <script src="bs46/popper-1.16.1.min.js"></script>
        <script src="bs46/js/bootstrap.min.js"></script>
        <style>
            table.table-striped tbody tr:nth-child(odd) {
                background-color: lightgoldenrodyellow; 
            }            

            table.table-hover tbody tr:hover {
                background-color: pink; 
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand" href="#">STMI</a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>            

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">            
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-sm">
            <div class="row">
                <div class="col-sm-12 p-2">
                    <h3>Tabel Mahasiswa</h3>
                    <a href="tambah.php" class="btn btn-primary">Tambah</a>
                    <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                        //perintah query select
                        $sql = "SELECT Nim, Nama, Tanggal_Lahir FROM mahasiswa";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                        ?>
                          <tr>
                            <td><?= $row["Nim"] ?></td>
                            <td><?= $row["Nama"] ?></td>
                            <td><?= $row["Tanggal_Lahir"] ?></td>
                          </tr>
                          <?php
                          $row["Nim"] . " ";
                          $row["Nama"] . " ";
                          $row["Tanggal_Lahir"]. "<br>";
                          }
                          } else {
                          echo "0 results";
                          }
                          $conn->close();
                          ?>
                        </tbody>
                    </table>                
                </div>
            </div>

            <div class="row">
                <div class="col-12 p-1 border text-center">
                    copyright &copy Ahmad Juniar - 2023
                </div>
            </div>

        </div>
    </body>
</html>