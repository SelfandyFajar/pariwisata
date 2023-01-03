<!DOCTYPE html>
<html>

<head>
    <title>Pariwisata Selfandy</title>
</head>

<body>
    <h1>Pariwisata Selfandy</h1>
    <hr>
    <h3>List Wisata</h3>
    <p><a href="add_wisata_210032.php">Add New Wisata</a></p>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Tempat</th>
            <th>Kota</th>
            <th>Deskripsi</th>
            <th>Harga Ticket</th>
            <th>Jam Operasional</th>
            
        </tr>
        <?php
            //call connection
            include "connection_210032.php";
            //make a sql query
            $query = "SELECT * FROM tempat_wisata_210032";
            //run query
            $wisata = mysqli_query($db_connection, $query);

            $i=1;
            foreach ($wisata as $data) :
        ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $data['nama_tempat_210032']; ?></td>
            <td><?php echo $data['kota_210032']; ?></td>
            <td><?=  $data['deskripsi_210032']; ?></td>
            <td><?php echo $data['harga_tiket_210032']; ?></td>
            <td><?=  $data['jam_operasional_210032']; ?></td>
            
            
        </tr>
        <?php endforeach; ?>

</body>

</html>