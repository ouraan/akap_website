<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AKAP | Detail Booking</title>
    <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles/style_booking.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg py-4 shadow-sm">
        <a href="list_buses.php" class="navbar-brand ml-5">AKAP</a>
    </nav>
    <?php
        include "../models/connection.php";
        $read_book = "SELECT * FROM booking JOIN bus ON booking.id_bus = bus.id_bus";
        $query_book = $koneksi->query($read_book);
        $data_book = $query_book->fetch_array();
    ?>
    <div class="container-fluid py-5" id="div-detail">
        <div class="card mb-5">
            <div class="card-header">
                <h5>Detail Booking</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <p>Nama pemesan</p>
                    </div>
                    <div class="col">
                        <p>: <?php echo $data_book['nama_pemesan'];?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Nomor identitas</p>
                    </div>
                    <div class="col">
                        <p>: <?php echo $data_book['nomor_identitas'];?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>No. HP</p>
                    </div>
                    <div class="col">
                        <p>: <?php echo $data_book['no_hp'];?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Kelas penumpang</p>
                    </div>
                    <div class="col">
                        <p>: <?php echo $data_book['nama_bus'];?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Jumlah penumpang</p>
                    </div>
                    <div class="col">
                        <p>: <?php echo $data_book['penumpang_umum'];?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Jumlah penumpang lansia</p>
                    </div>
                    <div class="col">
                        <p>: <?php echo $data_book['penumpang_lansia'];?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Harga tiket</p>
                    </div>
                    <div class="col">
                        <p>: <?php echo $data_book['harga_bus'];?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Total bayar</p>
                    </div>
                    <div class="col">
                        <p>: <?php echo $data_book['total_bayar'];?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>