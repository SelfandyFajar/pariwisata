<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pariwisata Selfandy</title>
</head>
<body>
    <h1>Pariwisata Selfandy</h1><hr>
    <h3>Form Add tempat wisata</h3>
    <form method="post" action="create_wisata_210032.php">
        <table>
            <tr>
                <td>Nama Tempat</td>
                <td><input type="text" name="nama_tempat_210032" required></td>
            </tr>

            <tr>
                <td>Kota</td>
                <td>
                    <input type="text" name="kota_210032" required>
                </td>
            </tr>

            <tr>
                <td>Deskripsi</td>
                <td><textarea name="deskripsi_210032" required></textarea></td>
            </tr>

            <tr>
                <td>Harga Ticket</td>
                <td><input type="number" name="harga_tiket_210032" required></td>
            </tr>

            <tr>
                <td>Jam Operasional</td>
                <td><input type="text" name="jam_operasional_210032" required></td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                </td>
            </tr>
        </table>
    </form>
    <p><a href="index.php">CANCEL</a></p>
</body>
</html>