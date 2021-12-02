<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mmembuat form validasi</title>
</head>
<body>
    <h1>Membuat form validasi dengan PHP <br> ---</h1> 
    <?php
    if(isset($_GET['nama'])){
        if($_GET['nama'] == "kosong"){
            echo "<h4 style='color:red'>Nama belum di masukkan!</h4>";
        }
    }
    ?>
    <h4>Masukkan nama anda : </h4>
    <form action="cek.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
                <td><input type="submit" value="cek"></td>
            </tr>
        </table>
    </form>
</body>
</html>