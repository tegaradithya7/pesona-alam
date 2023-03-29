<!DOCTYPE html>
<html lang="en">
<head>
    <title>Starter Kit</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.min.css" />
    <!-- <link rel="stylesheet" href="assets/css/vendors/jquery-ui.css" /> -->
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/all.css" />
</head>
<body oncontextmenu="return false;">
  
  <?php include 'ui-elements/_nav.php' ?>

  <section class="main-content"> 

     <?php include 'ui-elements/_context-menu.php' ?>

    <div class="wrapper">

      <div class="col col-2">
        
        <?php include 'ui-elements/_sidenav.php' ?>

      </div>

      <div class="col col-10">
        
        <div class="content" id="content" oncontextmenu="return false;">

          <div class="wrapper">

            <div class="col col-12">

              <?php include 'ui-elements/_breadcrumb.php' ?>

            </div>
            
            <div class="col col-12">

              <div class="container">

                <div class="wrapper">

                  <div class="col col-6" style="overflow: scroll; height: 550px">
                    <div class="container-title">
                      <h1>Summary Data</h1>
                    </div>

                    <div class="summary">
                      <div class="summary-title">
                        Accepted
                        <span>5/15</span>
                      </div>
                      <div class="summary-bars">
                        <span class="bar-top is-success"></span>
                        <span class="bar-bottom"></span>
                      </div>
                    </div>

                    <div class="summary">
                      <div class="summary-title">
                        Pending
                        <span>5/15</span>
                      </div>
                      <div class="summary-bars">
                        <span class="bar-top is-warning"></span>
                        <span class="bar-bottom"></span>
                      </div>
                    </div>

                    <div class="summary">
                      <div class="summary-title">
                        Denied
                        <span>5/15</span>
                      </div>
                      <div class="summary-bars">
                        <span class="bar-top is-danger"></span>
                        <span class="bar-bottom"></span>
                      </div>
                    </div>

                    <div class="container-title">
                      <h1>Overview</h1>
                    </div>

                    <div class="card card-success" style="width: 94%">
                      <div class="card-title align-left">
                        5 Data telah sesuai
                      </div>
                      <div class="card-footer align-left">
                        <ul>
                          <?php for($i=0; $i <= 5; $i++) { ?>
                            <li>Akta</li>
                          <?php } ?>
                        </ul>
                      </div>
                    </div>

                    <div class="card card-warning" style="width: 94%">
                      <div class="card-title align-left">
                        5 Data belum diverifikasi
                      </div>
                      <div class="card-footer align-left">
                        <ul>
                          <?php for($i=0; $i <= 5; $i++) { ?>
                            <li>TDP</li>
                          <?php } ?>
                        </ul>
                      </div>
                    </div>

                    <div class="card card-danger" style="width: 94%">
                      <div class="card-title align-left">
                        5 Data tidak sesuai
                      </div>
                      <div class="card-footer align-left">
                        <ul>
                          <?php for($i=0; $i <= 5; $i++) { ?>
                            <li>Pengurus</li>
                          <?php } ?>
                        </ul>
                      </div>
                    </div>

                  </div>

                  <div class="col col-6" style="overflow: scroll; height: 550px">

                    <div class="container-title">
                      <h1>Notifikasi</h1>
                    </div>

                    <?php for($i=0; $i<=10; $i++) { ?>

                    <div class="notification is-warning">

                      <p>
                        
                        Selamat anda telah diikut sertakan.

                      </p>

                      <button class="delete">X</button>

                    </div>

                    <?php } ?>
                    
                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

  <script type="text/javascript" src="../source/js/vendors/jquery-3.3.1.js">
  </script>
  <script type="text/javascript" src="../source/js/vendors/jquery-ui.js">
  </script>
  <script type="text/javascript" src="../source/js/app.js"></script>
</body>
</html>
