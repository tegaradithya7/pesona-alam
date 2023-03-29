<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ****** CDN ****** -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.css"> -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- ****** CSS ****** -->
    <link rel="stylesheet" href="<?= base_url().'assets/styles/template.css' ?>">

    <title>Go-Block</title>
    <script type="text/javascript"></script>
  </head>
  <body oncontextmenu="return false;" class="s-noselect">
    <section>
      <div class="header">
        <ul>
          <li>
            <div class="logo"><div class="boxOne"></div><div class="boxTwo"></div></div>
          </li>
          <li>
            <div class="box">
              <div class="container-1">
                <span class="icon"> <i class="fa fa-search"></i> </span>
                <input type="text" class="saring" id="search" placeholder="Search...">
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <section>
      <div class="sidebar">
        <ul class="side-nav">
          <li id="not"> <h1>MAIN</h1> </li>
          <li class="active">
            <span class="icon"> <i class="fa fa-hdd"></i> </span><a href="#">Drive </a>
          </li>
          <li>
            <span class="icon"> <i class="fa fa-laptop"></i> </span><a href="#">Komputer </a>
          </li>
          <li>
            <span class="icon"> <i class="fa fa-users"></i> </span><a href="#">Bagikan </a>
          </li>
          <li id="not" class="dropdown">
            <span class="icon"> <i class="fa fa-bookmark"></i> </span><a href="#">  Terbaru </a>
            <ul class="drop">
              <li id="not"> <a href="#">Latest</a> </li>
              <li id="not"> <a href="#">Important</a> </li>
              <li id="not"> <a href="#">Spam</a> </li>
            </ul>
          </li>
          <li id="not"> <h1>Action</h1> </li>
          <li id="not">
            	<a class="dropbtn">Add</a>
          	  <div id="myDropdown" class="dropdown-content">
          	    <a href="#">Folder</a>
          	    <a href="#">Upload file</a>
          	    <a href="#">Upload folder</a>
          	  </div>
          </li>
        </ul>
        <!-- click-menu global -->
        <ul id ="click-menu-global"class="click-menu">
          <li><span class="icon"><i class="fas fa-file-upload"></span></i>Upload File</li>
          <li class="bdr-bottom"></li>
          <li><span class="icon"><i class="fas fa-info-circle"></span></i>Info</li>
        </ul>

        <!-- click-menu content -->
        <ul id ="click-menu-content"class="click-menu">
          <li><span class="icon"><i class="fas fa-eye"></span></i>Overview</li>
          <li><span class="icon"><i class="fas fa-star"></span></i>Mark important</li>
          <li class="bdr-bottom"></li>
          <li><span class="icon"><i class="fas fa-file-upload"></span></i>Upload File</li>
          <li class="bdr-bottom"></li>
          <li><span class="icon"><i class="fas fa-trash"></span></i>Delete</li>
          <li><span class="icon"><i class="fas fa-info-circle"></span></i>Info</li>
      </ul>
      </div>
    </section>
    <section id="content" oncontextmenu="return false;">
      <div class="content">
        <div class="title">
          <a href="#">My Data</a>
          <div class="icon">
            <span id="box-view" class="icon"><i class="fa fa-th"></i></span>
            <span id="list-view" class="icon on"><i class="fa fa-list"></i></span>
            <span id="reloader" class="icon"><i class="fa fa-sync-alt"></i></span>
          </div>
        </div>
        <div class="container">
          <ul id="zone1">
            <?php 
            for ($i=1; $i <= 20; $i++) { 
            ?>
            <li class="view list-view" oncontextmenu="return false;">
                <div class="view-item">
                  <span class="icon">
                    <i class="fa fa-file"></i>
                  </span>
                  <p>File <?= $i ?></p>
                </div>
            </li>
            <?php 
            }
            ?>
          </ul>

          <!-- <?php 
            for ($i=1; $i <= 20; $i++) { 
          ?>
            <div class="view list-view" oncontextmenu="return false;">
              <div class="view-item">
                <span class="icon"><i class="fa fa-file"></i></span>
                <p class="s short-me">Fileeeeeeeee <?= $i ?></p>
              </div>
            </div>
          <?php   
            }
           ?> -->
      </div>
    </section>
     

    <script type="text/javascript" src="<?= base_url('assets/js/jquery-3.3.1.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/template.js')?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/selectables.js')?>"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {

      var foo = new Selectables({
        elements: 'li',
        selectedClass: 'on',
        zone: '#zone1',
      })
    });
    
    </script>
    


  </body>
</html>
