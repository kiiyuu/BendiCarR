<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Menu</title>
    <link rel="stylesheet" href="asset/booking.css">
</head>
<body>
    <div class="container">
    <img src="image/carw.png" class="carw">

        <div class="card">
            <h2 class="logo">Bendi Car</h2>
            <h1 class="bok">Booking <br>Car</h1>
            <div class="input">
                <p>Masukan Nama Lengkap:</p>
                <input type="text">
            </div>
            <div class="input">
                <p>Masukan No Telp :</p>
                <input type="number">
            </div>
            <div class="area">
            <p>Masukan alamat anda :</p>
            <textarea class="alamat"></textarea>
            </div>
            <a href="content.php"><button type="submit" class="btn" onclick="pesan()">Pesan</button></a>
            <a href="content.php"><button type="reset" class="btn">Batal</button></a>
        </div>
    </div>

    <script>
        function pesan() {
            alert ("Anda berhasil memesan mobil Toyota Corrola");
            
        }
    </script>
</body>
</html>