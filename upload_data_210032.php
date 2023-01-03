<?php   
if(isset($_POST['save'])){
    include "connection_210032.php";

    $folder
    if(move_uploaded_file($_FILES['new_photo']['tmp_name'],$folder . $_FILES['new_photo']['name'] )){
        $photo=$_FILES['new_photo']['name'];
        $query = "UPDATE tempat_wisata_210032 SET foto_wisata = '$photo' WHERE id_wisata_210032 = '$_POST[id_wisata_210032]'";
    $upload = mysqli_query($db_connection, $query);
    if($upload){
        if($_POST['photo_wisata'] !== 'default.png') unlink($folder . $_POST['photo_wisata']);
        echo "<script>alert('Update Data Successed');window.location.replace('index.php')</script>";
    } else {
        echo "<script>alert('Update Data Failed');window.location.replace('edit_data_210032.php?id=$_POST[id_wisata_210032]');</script>";
    }
    } else {
    echo "<script>alert('Upload Photo Failed');window.location.replace('edit_data_210032.php?id=$_POST[id_wisata_210032]');</script>";
    }
}
