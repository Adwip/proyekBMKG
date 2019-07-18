<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html lang="en">
  <head>
    <?php $this->load->view("part/head.php") ?>
  </head>
  <header class="header">
    <?php $this->load->view("part/header.php") ?>
  </header>
  <body>
    <div class="breadcrumbs breadcrumbs-light">
      <div class="container">
        <h1 class="pull-left">UPT BMKG DIY</h1>
      </div>
    </div>
    <div class="container" style="text-align: center;">
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Stasiun/UPT</th>
            <th scope="col" colspan="2">Informasi</th>
            <th scope="col">Nama Kepala</th>
          </tr>
        </thead>
        <tbody>
        <?php $i=1;
         foreach ($upt as $upt) {?>
          <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $upt->kantor ?></td>
            <td style="width:100px;">
              <ul style="list-style-type: none; padding: 0px;">
                <li><img src="<?php echo base_url();?>asset/img/upt/alamat.png" style="width: 40px;"></li><br>
                <li><img src="<?php echo base_url();?>asset/img/upt/telp.jpg" style="width: 40px;"></li><br>
                <li><img src="<?php echo base_url();?>asset/img/upt/faks.jpg" style="width: 40px;"></li><br>
                <li><img src="<?php echo base_url();?>asset/img/upt/email.jpg" style="width: 40px;"></li>
              </ul>
            </td>
            <td>
              <ul style="padding:0px; list-style-type: none;">
                <li><?php echo $upt->Alamat ?></li><br><br>
                <li><?php echo $upt->telepon ?></li><br><br>
                <li><?php echo $upt->faksimili ?></li><br><br>
                <li><?php echo $upt->email ?></li>
              </ul>
            </td>
            <td><?php echo $upt->kepala ?></td>
          </tr>
      <?php $i++; } ?>
      <!--  <tr>
          <td>1</td>
          <td>Stasiun Geofisika Yogyakarta</td>
          <td>
            <div>
              <img src="<?php echo base_url();?>asset/img/upt/alamat.png" style="width: 40px;">
            </div>
            <div>
              <img src="<?php echo base_url();?>asset/img/upt/telp.jpg" style="width: 40px;">
            </div>
            <div>
              <img src="<?php echo base_url();?>asset/img/upt/faks.jpg" style="width: 40px;">
            </div>
            <div>
              <img src="<?php echo base_url();?>asset/img/upt/email.jpg" style="width: 40px;">
            </div>     
            </ul>
          </td>
          <td>
            <div >
              Jalan Wates Km.8 Jitengan, Balecatur, Gamping, Sleman, Daerah Istimewa Yogyakarta 55294
            </div>
            <div  style="margin-top: 8px;">
              0274 – 6498383
            </div>
            <div style="margin-top: 15px;">
              0274 – 6498382 
            </div>
            <div style="margin-top: 18px;">
              stageof.yogya@bmkg.go.id   
            </div>
          </td>
          <td>Dr. I Nyoman Sukanta, S.Si., M.T.</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Stasiun Klimatologi Mlati</td>
          <td>
            <div>
              <img src="<?php echo base_url();?>asset/img/upt/alamat.png" style="width: 40px;">
            </div>
            <div>
              <img src="<?php echo base_url();?>asset/img/upt/telp.jpg" style="width: 40px;">
            </div>
            <div>
              <img src="<?php echo base_url();?>asset/img/upt/faks.jpg" style="width: 40px;">
            </div>
            <div>
              <img src="<?php echo base_url();?>asset/img/upt/email.jpg" style="width: 40px;">
            </div>     
            </ul>
          </td>
          <td>
            <div >
            Jalan Kabupaten Km. 5,5 Jaten, Sendangadi, Mlati, Sleman, Daerah Istimewa Yogyakarta 55285
            </div>
            <div  style="margin-top: 8px;">
            0274 – 2880151
            </div>
            <div style="margin-top: 15px;">
            0274 – 2880151
            </div>
            <div style="margin-top: 18px;">
            staklim.yogya@gmail.com   
            </div>
          </td>
          <td>Agus Sudaryatno, S.Kom., M.M.</td>
        </tr>-->
        </tbody>
      </table>
    </div>
  </body>
  <footer class="footer">
    <?php $this->load->view("part/footer.php") ?>
  </footer>
</html>