<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Place</title>
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/booking.css">
    <script src="script.js"></script>
</head>
<body>
    <div class="container">
    <!-- NAVIGATION BAR     -->
    <div class="container-navbar">
        <img src="style/AAEF07544.jpg" class="img-navbar">
        <h1 class="logo-text" style="text-align: center;">WONDERFUL ACEH</h1>
        <h1 class="logo-text-b" style="text-align: center;">PARIWISATA ACEH</h1>
          <ul class="ul-navbar">
              <li class="li-navbar">
                  <a href="index.php" class="a-navbar">HOME</a>
              </li>
              <li class="li-navbar">
                  <a href="ticket.html" class="a-navbar">TICKET</a>
              </li>
              <li class="li-navbar">
                  <a href="booking.html" class="a-navbar">BOOKING</a>
              </li>
          </ul>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
    <!-- NAVIGATION BAR FINISH -->

    <!-- CONTENT 1 -->
    <?php
    include "connection_210032.php";
    $query = "SELECT * FROM tempat_wisata_210032 WHERE id_wisata_210032 = '$_GET[id]'";
    $tiket = mysqli_query($db_connection,$query);
    $data = mysqli_fetch_assoc($tiket);
    ?>
    
    <form  method="post" action="update_data_210032.php" enctype="multipart/form-data">
        <div class="table-wrapper">
        <table class="form-edit">
        <tr>
                <td>Nama tempat</td>
                <td><input type="text" name="nama_tempat_210032"value="<?=$data['nama_tempat_210032']?>" required></td>
            </tr>
            <tr>
                <td>Kota</td>
                <td><input type="text" name="kota_210032"value="<?=$data['kota_210032']?>" required></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><textarea name="deskripsi_210032" style="width:300px;height:200px;"required><?=$data['deskripsi_210032']?></textarea></td>
            </tr>
            <tr>
                <td>Harga Tiket</td>
                <td><input type="number" name="harga_tiket_210032"value="<?=$data['harga_tiket_210032']?>" required></td>
            </tr>
            
            <tr>
                <td>Jam Operasional</td>
                <td><input type="text" name="jam_operasional_210032"value="<?=$data['jam_operasional_210032']?>" required></td>
            </tr>

            <tr>
                <td>Photo</td>
                <td><img class="gambar" src="uploads/<?php echo $data['photo_wisata']; ?>" width="30%"></td>
            </tr>

            <tr>
                <td></td>
                <td> <input type="file" name="new_photo"></td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                    <input type="hidden" name="photo_wisata" value="<?= $data['photo_wisata']; ?>" />
                    <input type="hidden" name="id_wisata_210032" value="<?=$data['id_wisata_210032']?>">
                </td>
            </tr>
        </table>
        </div>
    </form>  
    

    <div class="push"></div>
    
    <!-- CONTENT 1 END -->

    

    
    </div>
    <div class="footer">
        <h1 class="h1-footer">Tertarik Dengan Layanan Kami? </h1>
        <br>
        <p class="p-footer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <br>
        <p class="p-footer">Copyright&copy; 2022, Selfandy Fajar K.R</p>
    </div>
</body>
</html>