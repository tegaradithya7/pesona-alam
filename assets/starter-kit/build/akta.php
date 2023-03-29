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

              <?php include 'ui-elements/_container.php' ?>

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
