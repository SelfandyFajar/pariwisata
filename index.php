<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <title>Pariwisata Selfandy</title>
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/booking.css" />
</head>
<body>
  <div class="container">
    <!-- NAVIGATION BAR     -->
        <div class="container-navbar">
          <img src="style/gabut-production--Al50GvdjxE-unsplash.jpg" class="img-navbar">
            <h1 class="logo-text" style="text-align: center;">WONDERFUL ACEH</h1>
            <h1 class="logo-text-b" style="text-align: center;">PARIWISATA ACEH</h1>
            <ul class="ul-navbar">
                <li class="li-navbar">
                    <a href="#" class="a-navbar">HOME</a>
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

    <!-- CONTENT CARD 1 -->
        
      <div class="container-content">
      
        <!-- <table class="table-card"> -->
          <div class="container-card">
          <?php
          include "connection_210032.php";
          $query = "SELECT * FROM tempat_wisata_210032";
          $wisata = mysqli_query($db_connection, $query); 
          $i=1;
          foreach ($wisata as $data):
            
            ?>
          <div class="card-a">
            <a href="content-1.php?id=<?=$data['id_wisata_210032']?>" class="a-content">
              <img src="uploads/<?php echo $data['photo_wisata']; ?>" class="img-content"/>
              <h3 class="card-title"><?php echo $data['nama_tempat_210032']; ?></h3>
              <p class="card-text"><?php echo $data['deskripsi_210032']; ?></p> 
            </a>
          </div>      
        <?php endforeach;?> 
        </div>
        <!-- </table> -->
        <a class="button2" style="margin: 80px; background-color:#7c7866; margin-bottom: 30px;" href="add_wisata_210032.php" >Tambah Wisata</a>
    </div>
    
    
    <!-- CONTENT CARD 1 END -->
    

    <!-- SIDEBAR -->
    <div class="layout-sidebar">
      <div class="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <!-- insert your sidebar items here -->
            <h3>Update Terkini</h3>
            <h4>Modifikasi website</h4>
            <h5>Oktober 19, 2022</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.<br /><a href="#">Read more</a></p>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Rekomendasi link</h3>
            <ul>
              <li><a href="report.php">Monthly Report</a></li>
              <li><a href="#">Bali</a></li>
              <li><a href="#">bandung</a></li>
              <li><a href="#">Yogyakarta</a></li>
            </ul>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Search</h3>
            <form method="post" action="#" id="search_form">
              <p>
                <input class="search" type="text" name="search_field" value="Enter keywords....." />
                
              </p>
            </form>
          </div>
          <div class="sidebar_base"></div>
        </div>
      </div>
    </div>
    
    <!-- CONTENT 1 -->
        <!-- insert the page content here -->
        <div class="content-text">
          <br>
          <h1>Selamat Datang di Wonderful Aceh</h1>
        <p>Aceh adalah provinsi paling barat di Indonesia. Letaknya di ujung utara pulau Sumatera dan Pulau Sabang, sebagai bagian dari provinsi Aceh menjadikannya sebagai titik paling barat di Indonesia. Ibu kota Provinsi Aceh adalah Kota Banda Aceh. Sempat disebut sebagai Aceh Darussalam (1511–1959) dan kemudian berganti menjadi Daerah Istimewa Aceh (1959–2001), Nanggroë Aceh Darussalam (2001–2009) dan saat ini Aceh (2009–sekarang)
          <br>

Aceh berbatasan dengan Samudera Hindia di bagian Barat, berbatasan dengan Teluk Benggala di sebelah utara, , Selat Malaka di sisi timur, dan Sumatera Utara di bagian tenggara dan selatan. 
<br>

Aceh dikenal sebagai salah satu titik tempat dimulainya penyebaran Islam di Indonesia dan memainkan peran penting dalam penyebaran Islam di Asia Tenggara. Pada awal abad ke-17, Kesultanan. Aceh adalah bangsa terkuat dan termaju di kawasan Selat Malaka pada masanya. Hingga saat ini masyarakat Aceh masih memegang teguh syariat Islam, dibuktikan dengan dijalankannya pemerintahan dan tata sosial sesuai syariah Islam. <br>

Manjabat selaku Gubernur Aceh saat ini adalah Plt Gubernur Mayjen TNI (Purn) Soedarmo. Provinsi Aceh terdiri dari 23 Kabupaten dan Kota. Aceh sempat menjadi pusat perhatian dunia saat bencana tsunami Samudera Hindia pada 26 Desember 2004 dimana ratusan ribu jiwa tewas dalam bencana tersebut. Negara – negara maju beserta tokoh – tokoh ternama berdatangan untuk memberikan dukungan kepada warga Aceh. Pasca bencana ini, konflik pemerintah RI dengan Gerakan Aceh Merdeka mereda sehingga saat ini Aceh telah pulih kembali. 
<br>

Aceh memiliki sumber daya alam yang kaya, termasuk gas alam dan minyak bumi. Hutan Aceh di sepanjang jajaran Bukit Barisan dari Kutacane di Aceh Tenggara sampai Ulu Masen di Aceh Jaya juga merupakan salah satu hutan yang cukup populer di Indonesia. Sebuah taman nasional bernama Taman Nasional Gunung Leuser (TNGL) didirikan di Aceh Tenggara. Aktor Peraih Oscar, Leonardo Di Caprio sempat mengunjungi Aceh dalam rangka produksi film dokumenternya yang mengangkat isu Pemanasan Global dan Perubahan Iklim. Kopi Aceh dan Budayanya merpuakan salah satu yang terbaik di dunia.</p>
        <br>
        
        </div>
        <div class="push"></div>
  </div>

  <!-- footer -->
  <div class="footer">
    <h1 class="h1-footer">Tertarik Dengan Layanan Kami? </h1>
    <br>
    <p class="p-footer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <br>
    <p class="p-footer">Copyright&copy; 2022, Selfandy Fajar K.R</p>
</div>
</body>
</html>