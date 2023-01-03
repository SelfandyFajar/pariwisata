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
      <br><br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
    <!-- NAVIGATION BAR FINISH -->

    <!-- CONTENT 1 -->
    <div class="container-form">
        <div class="title">Monthly Report</div>
    <div class="content">
        <br>
        
    <?php 
            $months = array('January','February','March','April','May','June','July','August','September','October','November','December');
            $year = date('Y');
            ?>
            
            <form>
                <p>Select
                <select class="input-box" name="month" required>
                        <option value="">Month</option>
                        <?php for($m=1;$m<=12;$m++) { ?>
                        <option value="<?=$m?>"><?=$months[$m-1]?></option>
                        <?php } ?>
                    </select>
                    <select class="input-box" name="year" required>
                        <option value="">Year</option>
                        <?php for($y=0;$y<=2;$y++) { ?>
                        <option value="<?=$year-$y?>"><?=$year-$y?></option>
                        <?php } ?>
                    </select>
                    <input type="submit" value="View Report">
                </p>
            </form>
            <br>
            <?php
            if(isset($_GET['year'])) {
                include 'connection_210032.php';
                //$query="SELECT * FROM medicals_210032";
                $query="SELECT t.nama_210032, t.email_210032, t.no_tlp_210032, t.tanggal_210032, w.nama_tempat_210032, w.harga_tiket_210032, t.jumlah_tiket_210032, t.total_harga_210032 FROM tempat_wisata_210032 AS w, tiket_210032 AS t WHERE t.id_wisata_210032=w.id_wisata_210032 AND MONTH(t.tanggal_210032)='$_GET[month]' AND YEAR(t.tanggal_210032)='$_GET[year]'";
                $report=mysqli_query($db_connection,$query);
            ?>
            <h4>Report periode <?=$months[$_GET['month']-1]?> - <?=$_GET['year']?></h4>
            <br>
            <table class="table-content">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No.Telephone</th>
                    <th>Tanggal</th>
                    <th>Nama Tempat</th>
                    <th>Harga Tiket</th>
                    <th>Jumlah Tiket</th>
                    <th>Total</th>
                </tr>
                <?php
                if(mysqli_num_rows($report) > 0) {
                    $i=1; $total=0;
                    foreach($report as $data) :
                        $total=$total+$data['total_harga_210032']
                ?>
                <tr>
                    <td><?=$i++?></td>
                    <td><?=$data['nama_210032']?></td>
                    <td><?=$data['email_210032']?></td>
                    <td><?=$data['no_tlp_210032']?></td>
                    <td><?=$data['tanggal_210032']?></td>
                    <td><?=$data['nama_tempat_210032']?></td>
                    <td><?=$data['harga_tiket_210032']?></td>
                    <td><?=$data['jumlah_tiket_210032']?></td>
                    <td><?=$data['total_harga_210032']?></td>
                </tr>
                <?php endforeach; ?>
                <tr><th colspan="9" align="right">Total : Rp. <?=$total?></th></tr>
                <?php } else { ?>
                <tr><td colspan="9" align="center">No record !</td></tr>
                <?php } ?>
            </table>
            <?php } ?>
            <br>
          
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

</html>