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
    <div class="container-form">
        <div class="title">Registration</div>
    <div class="content">
      <form method="post" action="create_booking_210032.php">
      <?php
        include "connection_210032.php";
        $query = "SELECT * FROM tempat_wisata_210032 WHERE id_wisata_210032 = '$_GET[id]'";
        $tiket = mysqli_query($db_connection,$query);
        $data = mysqli_fetch_assoc($tiket);
        ?>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nama</span>
            <input type="text" placeholder="Masukan Nama" name="nama_210032" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Masukan Email" name="email_210032" required>
          </div>
          <div class="input-box">
            <span class="details">No.Telephone</span>
            <input type="number" placeholder="Masukan No.Telephone" name="no_tlp_210032" required>
          </div>

          <div class="input-box">
            <span class="details">Tanggal</span>
            <input type="date" placeholder="Masukan No.Telephone" name="tanggal_210032" required>
          </div>

          <div class="input-box">
            <span class="details">Destinasi</span>
            <input type="text" placeholder="Masukan Destinasi" name="id_wisata_210032"value="<?=$data['nama_tempat_210032']?>" required>
            </input>  
          </div>
          <div class="input-box">
            <span class="details">Harga</span>
            <input type="number" placeholder="Harga Tiket" id="harga" name="id_wisata_210032"value="<?=$data['harga_tiket_210032']?>" required>
          </div>
          <div class="input-box">
            <span  class="details">Jumlah Tiket</span>
            <input type="number" placeholder="Masukan Jumlah Tiket" id="jumlah" name="jumlah_tiket_210032" required onchange=(hitung());>
          </div>
          <div class="input-box">
            <span class="details">Total harga</span>
            <input type="text" placeholder="Total Harga" id="total" name="total_harga_210032" required>
          </div>
          
        </div>
        
        <div class="button">
          <input type="submit" name="save" value="Pesan">
          <input type="hidden" name="id_wisata_210032" value="<?=$data['id_wisata_210032']?>">
        </div>
      </form>
    </div>
    

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
<script>
  function hitung(){
            var x = document.getElementById('harga').value;
            var y = document.getElementById('jumlah').value;
            var ht = parseInt(x) * parseInt(y);
            document.getElementById('total').value = ht;
          }
</script>
</html>