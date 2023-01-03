<?php
    
    if(isset($_POST)){
        //Call Connection php mysql
        include "connection_210032.php";
    
        // sql query INSERT INTO VALUES
        $query = "INSERT INTO tiket_210032(nama_210032, email_210032, no_tlp_210032, tanggal_210032, id_wisata_210032, jumlah_tiket_210032, total_harga_210032)
        VALUES ('$_POST[nama_210032]',' $_POST[email_210032]',' $_POST[no_tlp_210032]',' $_POST[tanggal_210032]',' $_POST[id_wisata_210032]',' $_POST[jumlah_tiket_210032]',' $_POST[total_harga_210032]')";
    
        //run query
        $create = mysqli_query($db_connection, $query);
    
        if($create){
            
            echo"<script> alert('Wisata add succesfully !'); </script>";
        }else{
            
            echo"<script> alert('Wisata add failed !'); </script>";
        }
    
    }
    ?>
    <!-- <p><a href="read_pet_210032.php">Back To Pets List</a></p> -->
    <script>window.location.replace("index.php");</script>