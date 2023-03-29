<!DOCTYPE html>
<html lang="en">
<head>
    <title>Starter Kit</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.min.css" />
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/all.css" />
</head>
<body>
  
  <nav class="navbar">

    <div class="navbar-brand">

      <div class="navbar-item logo">

        <img src="assets/img/PGN_logo.png" alt="" height="50px">

      </div>

     <div class="navbar-item" style="display: none">

        <a role="button" class="navbar-burger has-sidebar">

          <span aria-hidden="true"></span>

          <span aria-hidden="true"></span>

          <span aria-hidden="true"></span>

        </a>

     </div>

    </div>

    <div class="navbar-menu">

      <div class="navbar-start">

        <div class="navbar-item">

          <div class="search-bar">

            <span class="icon"><i class="fa fa-search"></i></span>

            <input type="text" class="input" placeholder="Search">

          </div>

        </div>

      </div>

      <div class="navbar-end">

        <div class="navbar-item account has-dropdown">

          <img src="assets/img/avatar.jpg" alt="">

          <p>Account</p>

          <span class="icon"><i class="fa fa-angle-down"></i></span>

          <div class="navbar-dropdown is-dropdown">

            <a href="#" class="navbar-item">

              <span class="icon"><i class="fas fa-sign-out-alt"></i></span>

              Logout

            </a>

          </div>

        </div>

      </div>

    </div>

  </nav>

  <section class="main-content"> 

    <div class="wrapper">

      <div class="col col-2">
        
        <div class="sidenav">

          <ul>

            <?php 
              $name = ["beranda", "administrasi", "akta", "domisili perusahaan", "TDP", "pengurus perusahaan", "pemilik modal", "izin usaha", "pengalaman", "pabrikan / keagenan / distributor", "aspek k3", "auction"]; 
              $length = count($name);
              for ($i = 0; $i < $length; $i++) {
            ?>

            <li class="sidenav-item">

              <img src="assets/img/icon-simple.png" alt="" height="20px">

              <a href=""><?= ucwords($name[$i]) ?></a>

            </li>

            <?php 
              }     
            ?>

          </ul>

        </div>

      </div>

      <div class="col col-10">
        
        <div class="content">

          <div class="wrapper">

            <div class="col col-12">

              <nav class="breadcrumb" aria-label="breadcrumbs">

                <ul>

                  <li><a href="#">Vendor</a></li>

                  <li class="is-active"><a href="#">Dashboard</a></li>

                </ul>

              </nav>

            </div>

            <div class="col col-12">

              <div class="notification is-danger">

                <p>
                  
                  Harap melengkapi data administrasi vendor.Pilih menu Administrasi di samping atau klik di sini.

                </p>

                <button class="delete">X</button>

              </div>

            </div>
            
            <div class="col col-12">

              <div class="container">

                <ul>

                  <?php

                    for($i = 1; $i <= 12; $i++) {

                  ?>

                  <li class="col-4">

                    <div class="view view-box">

                      <div class="view-item">

                        <img src="assets/img/folder.png" alt="" height="50px">

                        <img src="assets/img/down-arrow-inside-a-circle.png" alt="">

                        <div class="caption">

                          <p>Akta Pembangunan</p>

                          <p>Inggrit Linnawaty, SH</p>

                          <p>12 September 2015</p>

                        </div>

                      </div>

                    </div>

                  </li>

                  <?php 

                    }

                  ?>

                </ul>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

  <script type="text/javascript" src="../source/js/vendors/jquery-3.3.1.js">
  </script>
  <script type="text/javascript" src="../source/js/app.js"></script>
</body>
</html>
