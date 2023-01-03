<?php
if(isset($_GET['id'])){
    include "connection_210032.php";

    $query = "DELETE FROM tempat_wisata_210032 WHERE id_wisata_210032 = '$_GET[id]'
    ";
}

$delete = mysqli_query($db_connection, $query);

if($delete){
    //echo "<p>Pet added succesfully</p>";
    echo "<script> alert('Data deleted succesfully !'); </script>";
} else {
    //echo "<p>Pet add failed</p>";
    echo "<script> alert('Data deleted failed !'); </script>";
}
  ?>
  <!--<p><a href="data_peliharaan.php">Back To Pets List</a></p> -->
  <script>window.location.replace('index.php');</script>