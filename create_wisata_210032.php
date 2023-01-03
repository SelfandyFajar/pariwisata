<?php
    // echo $_POST['pet_name_210032'] . "<br>";
    // echo $_POST['pet_type_210032'] . "<br>";
    // echo $_POST['pet_gender_210032'] . "<br>";
    // echo $_POST['pet_age_210032'] . "<br>";
    // echo $_POST['pet_owner_210032'] . "<br>";
    // echo $_POST['pet_address_210032'] . "<br>";
    // echo $_POST['pet_phone_210032'] . "<br>";
    if(isset($_POST)){
        //Call Connection php mysql
        include "connection_210032.php";
    
        // sql query INSERT INTO VALUES
        $query = "INSERT INTO tempat_wisata_210032(nama_tempat_210032, kota_210032, deskripsi_210032, harga_tiket_210032, jam_operasional_210032)
        VALUES ('$_POST[nama_tempat_210032]',' $_POST[kota_210032]',' $_POST[deskripsi_210032]',' $_POST[harga_tiket_210032]',' $_POST[jam_operasional_210032]')";
    
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