        <div class="sidebar">

          <ul class="sidebar-wrapper">

            <?php 
              $name = ["beranda", "akta", "domisili perusahaan", "TDP", "pengurus perusahaan", "pemilik modal", "izin usaha", "pengalaman", "pabrikan / keagenan / distributor", "aspek k3", "auction"]; 
              $length = count($name);
              for ($i = 0; $i < $length; $i++) {
            ?>

            <li class="sidebar-list">

              <a href="<?= $name[$i] ?>.php" class="sidebar-heading"><?= ucwords($name[$i]) ?></a>

              <span class="badge is-primary">new</span>

            </li>

            <?php 
              }     
            ?>

          </ul>

        </div>