<!DOCTYPE html>
<html lang="en">
<head>
    <title>Starter Kit</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?php echo base_url('assets/styles/main.min.css')?>" />
     <link rel="stylesheet" href="<?php echo base_url('assets/font/fontawesome-free-5.3.1-web/css/all.min.css'); ?>" type="text/css" media="screen" />
</head>
<body oncontextmenu="return false;">
  
  <nav class="navbar">

    <div class="navbar-brand">

      <div class="navbar-item logo">

        <img src="<?php echo base_url('assets/images/PGN_logo.png')?>" alt="" height="50px">

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

          <img src="<?php echo base_url('assets/images/avatar.jpg')?>" alt="">

          <p>Account</p>

          <span class="icon"><i class="fa fa-angle-down"></i></span>

          <div class="navbar-dropdown is-dropdown">

            <a href="layout-login.php" class="navbar-item">

              <span class="icon"><i class="fas fa-sign-out-alt"></i></span>

              Logout

            </a>

          </div>

        </div>

      </div>

    </div>

  </nav>

  <section class="main-content"> 

     <!-- click-menu global -->
      <ul id="click-menu-global" class="click-menu">
        <li><span class="icon"><i class="fas fa-file-upload"></span></i>Upload File</li>
        <li class="bdr-bottom"></li>
        <li><span class="icon"><i class="fas fa-info-circle"></span></i>Info</li>
      </ul>

    <!-- click-menu content -->
      <ul id="click-menu-content" class="click-menu">
        <li><span class="icon"><i class="fas fa-eye"></span></i>Overview</li>
        <li><span class="icon"><i class="fas fa-star"></span></i>Mark important</li>
            <li class="bdr-bottom"></li>
        <li><span class="icon"><i class="fas fa-file-upload"></span></i>Upload File</li>
            <li class="bdr-bottom"></li>
        <li><span class="icon"><i class="fas fa-trash"></span></i>Delete</li>
        <li><span class="icon"><i class="fas fa-info-circle"></span></i>Info</li>
      </ul>

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

              <img src="<?php echo base_url('assets/images/icon-simple.png')?>" alt="">

              <a href=""><?= ucwords($name[$i]) ?></a>

            </li>

            <?php 
              }     
            ?>

          </ul>

        </div>

      </div>

      <div class="col col-10">
        
        <div class="content" id="content" oncontextmenu="return false;">

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

                <div class="col col-12">

                  <div class="container-title">

                    <h1>Akta</h1>

                    <div class="group-button-start">

                      Menampilkan 

                      <select>

                        <option value="">25</option>

                        <option value="">50</option>

                        <option value="">75</option>

                        <option value="">100</option>

                      </select>

                      Entry

                    </div>

                    <div class="group-button-end">

                      <button class="button is-primary is-wide has-dropdown">Add</button>

                      <ul class="dropdown-menu is-dropdown">
                        <li>
                          <a href="">New file</a>
                        </li>
                        <li>
                          <a href="">New Akta</a>
                        </li>
                        <li>
                          <a href="">New Vendor</a>
                        </li>
                      </ul>

                      <button onclick="switchView('box')" class="button is-rounded"><span class="icon"><i class="fas fa-th"></i></span></button>

                      <button onclick="switchView('list')" class="button is-rounded"><span class="icon"><i class="fas fa-list"></i></span></button>

                    </div>

                  </div>

                </div>

                <ul>

                  <?php

                    for($i = 1; $i <= 25; $i++) {

                  ?>

                  <li class="col-12">

                    <div class="view view-list">

                      <div class="view-item" oncontextmenu="return false;">

                        <img src="<?php echo base_url('assets/images/folder.png')?>" alt="">

                        <img src="<?php echo base_url('assets/images/down-arrow-inside-a-circle.png')?>" alt="">

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

                <div class="container-footer">

                  <ul class="pagination">

                    <li class="disabled">

                      <a href="">

                        <span class="icon"><i class="fas fa-arrow-left"></i></span>

                      </a>

                    </li>

                    <li><a href="">1</a></li>

                    <li><a href="">2</a></li>

                    <li><a href="">3</a></li>

                    <li><a href="">4</a></li>

                    <li><a href="">5</a></li>

                    <li>

                      <a href="">

                        <span class="icon"><i class="fas fa-arrow-right"></i></span>

                      </a>

                    </li>

                  </ul>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/app.js');?>"></script>
</body>
</html>
