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
  
  <nav class="navbar">
    
    <div class="navbar-brand">

      <div class="navbar-item logo">

        <img src="assets/img/PGN_logo.png" alt="" height="50px">

      </div>

    </div>

    <div class="navbar-menu">
      
      <div class="navbar-end">
        
        <div class="navbar-item">
          
          <button class="button is-link">Cancel</button>

        </div>

      </div>

    </div>

  </nav>

  <section class="main-content"> 

     <?php include 'ui-elements/_context-menu.php' ?>

    <div class="wrapper">

      <div class="col col-12" style="margin-top: 5rem">
        
        <div class="notification is-white">
          <h1>Form Isian Admin</h1>
          <div class="info">
            <span></span>
              <p>*Yellow field is mandatory</p>
            <span></span>
              <p>*white field is optional</p>
            <span></span>
              <p>*grey field is read only</p>
          </div>
        </div>

      </div>

      <div class="container">
        
        <div class="wrapper">
          
          <div class="col col-6">

            <div class="form-start">
              
              <div class="field display-info">

                <label for="" class="label">
                  Lokasi
                  <p>(Location)</p>
                </label>
                <div class="control">
                  <div class="select">
                    <select name="" id="">
                      <option value="">Logistic</option>
                      <option value="">General</option>
                      <option value="">Legal</option>
                    </select>
                  </div>
                </div>

                <label for="" class="label">Badan Hukum</label>
                <div class="control">
                  <div class="select">
                    <select name="" id="">
                      <option value="">PT</option>
                      <option value="">CV</option>
                      <option value="">Firman</option>
                    </select>
                  </div>
                </div>

                <label for="" class="label">Nama Badan Usaha</label>
                <div class="control">
                  <input type="text" class="input input-mandatory" placeholder="">
                </div>

                <label for="" class="label">NPWP</label>
                <div class="control">
                  <input type="text" class="input input-disabled" placeholder="" disabled="">
                </div>

                <label for="" class="label">
                  Tanggal
                  <p>(date)</p>
                </label>
                <div class="control">
                  <div class="select date-picker">
                    <select name="" id="">
                      <option value="">18</option>
                      <option value="">Option 2</option>
                      <option value="">Option 3</option>
                    </select>
                    <select name="" id="">
                      <option value="">September</option>
                      <option value="">Option 2</option>
                      <option value="">Option 3</option>
                    </select>
                    <select name="" id="">
                      <option value="">2018</option>
                      <option value="">Option 2</option>
                      <option value="">Option 3</option>
                    </select>
                  </div>
                </div>

                <label for="" class="label">
                  Lampiran
                  <p>(attachment)</p>
                </label>
                <div class="control">
                  <input type="file"
                           id="avatar" name="avatar"
                           accept="image/png, image/jpeg" />
                </div>

                <label for="" class="label">Status</label>
                <div class="control">
                  <input type="radio" id="" 
                               name="" value="" />
                        <p>Pusat</p>
                  <input type="radio" id="" 
                               name="" value="" />
                        <p>Cabang</p>
                </div>

                <label for="" class="label">
                  Alamat
                  <p>(address)</p>
                </label>
                <div class="control">
                  <textarea name="" id="" cols="30" rows="8"></textarea>
                </div>

              </div>

            </div>
            
          </div>

          <div class="col col-6">

            <div class="form-end">
              
              <div class="field display-info">

                <label for="" class="label">
                  Kota/Kab
                  <p>(city)</p>
                </label>
                <div class="control">
                  <input type="text" class="input" placeholder="">
                </div>

                <label for="" class="label">
                  Provinsi
                  <p>(province)</p>
                </label>
                <div class="control">
                  <input type="text" class="input" placeholder="">
                </div>

                <label for="" class="label">
                  Negara
                  <p>(country)</p>
                </label>
                <div class="control">
                  <input type="text" class="input" placeholder="">
                </div>

                <label for="" class="label">
                  Kode Pos
                  <p>(post code)</p>
                </label>
                <div class="control">
                  <input type="text" class="input" placeholder="">
                </div>

                <label for="" class="label">
                  No. Telp
                  <p>(phone number)</p>
                </label>
                <div class="control">
                  <input type="text" class="input" placeholder="">
                </div>

                <label for="" class="label">Fax</label>
                <div class="control">
                  <input type="text" class="input" placeholder="">
                </div>

                <label for="" class="label">Email</label>
                <div class="control">
                  <input type="text" class="input" placeholder="">
                </div>

                <label for="" class="label">Website</label>
                <div class="control">
                  <input type="text" class="input" placeholder="">
                </div>

                <label for="" class="label">Captcha</label>
                <div class="control">
                  <input type="text" class="input" placeholder="">
                </div>

                <label for="" class="label"></label>
                <div class="control is-grouped">
                  <button onclick="location.href='layout-login.php'" class="button is-link is-wide">Cancel</button>
                  <button onclick="location.href='confirmation-page.php'" class="button is-primary is-wide">Next</button>
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
