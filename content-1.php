<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Place</title>
    <link rel="stylesheet" href="style/style.css" />
</head>
<body>
<div class="container">
    <!-- NAVIGATION BAR     -->
    <div class="container-navbar">
        <img src="style/AAEF07544.jpg" class="img-navbar">
        <h1 class="logo-text" style="text-align: center;">WONDERFUL ACEH</h1>
          <ul class="ul-navbar">
              <li class="li-navbar">
                  <a href="index.php" class="a-navbar">HOME</a>
              </li>
              <!-- <li class="li-navbar">
                  <a href="ticket.html" class="a-navbar">TICKET</a>
              </li> -->
              <li class="li-navbar">
                  <a href="booking.php" class="a-navbar">BOOKING</a>
              </li>
              <li class="li-navbar">
                    <a href="report.php" class="a-navbar">MONTHLY REPORT</a>
                </li>
          </ul>
      </div>
    <!-- NAVIGATION BAR FINISH -->

    <!-- CONTENT 1 -->
    <?php
          include "connection_210032.php";
          $query = "SELECT * FROM tempat_wisata_210032 WHERE id_wisata_210032='$_GET[id]'";
          $wisata = mysqli_query($db_connection, $query); 
          $data = mysqli_fetch_assoc($wisata);
        ?>
        <div class="container-content-b">
            <a href="#"
            class="b-content">
                <img src="uploads/<?php echo $data['photo_wisata']; ?>" class="img-content"/>
                <h3 class="card-title-b"><?php echo $data['nama_tempat_210032']; ?></h3>
            </a>
            
         
        </div>
        <!-- <br> -->
            <div class="content-text-b">
                <h1><?php echo $data['nama_tempat_210032']; ?></h1>
                <p>Alamat: <?php echo $data['kota_210032']; ?></p>
                <br>
                <p><?php echo $data['deskripsi_210032']; ?></p><br>
                <p>Harga: <?php echo $data['harga_tiket_210032']; ?></p>
                <p>Jam Operasional: <?php echo $data['jam_operasional_210032']; ?></p>
          </div>
          <div class="btn-data">
                <a button class= "button2" style="background-color:#00D17E;" href="booking.php?id=<?php echo $data['id_wisata_210032']?>">Pesan Sekarang</a></>
                    <a class= "button2"  style = "color: white" href="edit_data_210032.php?id=<?php echo $data['id_wisata_210032']?>">Edit Data</a>
                    <a class= "button1" style = "color: white" href="delete_data_210032.php?id=<?php echo $data['id_wisata_210032']?>">Delete Data</a>
                    <a class= "button3" style = "color: white" href="index.php">Cancel</a>
                    <input type="hidden" name="id_wisata_210032" value="<?=$data['id_wisata_210032']; ?>">
                    </div>
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