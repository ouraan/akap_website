<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AKAP | Form Booking</title>
    <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles/style_form.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg py-4 shadow-sm">
        <a href="list_buses.php" class="navbar-brand ml-5">AKAP</a>
    </nav>

    <div class="container-fluid my-5"  id="div-reserv">
        <?php
            include "../models/connection.php";
            $read_book = "SELECT * FROM booking JOIN bus ON booking.id_bus = bus.id_bus";
            $query_book = $koneksi->query($read_book);
            $data_book = $query_book->fetch_array();
        ?>
        <form action="../models/insert_booking.php" method="POST">
            <div class="card mb-5">
                <div class="card-header">
                    <h5>Booking</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Nama lengkap</label>
                        <input type="text" class="form-control mt-1 py-4" placeholder="Nama lengkap" name="nama_pemesan" value="<?php if($data_book > 0){echo $data_book['nama_pemesan'];}?>"/>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nomor identitas</label>
                        <input type="text" class="form-control mt-1 py-4" placeholder="Nomor identitas" name="nomor_identitas" value="<?php if($data_book > 0){echo $data_book['nomor_identitas'];}?>"/>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">No. HP</label>
                        <input type="text" class="form-control mt-1 py-4" placeholder="No. HP" name="no_hp" value="<?php if($data_book > 0){echo $data_book['no_hp'];}?>"/>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Kelas penumpang</label>
                        <select name="id_bus" id="" class="form-control">
                            <?php
                                include "../models/connection.php";
                                $read = "SELECT * FROM bus";
                                $read_query = $koneksi->query($read);
                                while($data_query = $read_query->fetch_array()){?>
                                    <option value="<?php echo $data_query['id_bus']?>"><?php echo $data_query['nama_bus']?></option>
                                <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jadwal keberangkatan</label>
                        <input type="date" class="form-control mt-1 py-4" placeholder="DD/MM/YYYY" name="jadwal" value="<?php if($data_book > 0){echo $data_book['jadwal'];}?>"/>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jumlah penumpang</label>
                        <span class="text-muted form-text">Bukan lansia (usia < 60)</span>
                        <input type="number" class="form-control mt-1 py-4" placeholder="Jumlah penumpang" name="penumpang_umum" value="<?php if($data_book > 0){echo $data_book['penumpang_umum'];}?>"/>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jumlah penumpang lansia</label>
                        <span class="text-muted form-text mt-0">Usia 60 tahun ke atas</span>
                        <input type="number" class="form-control mt-1 py-4" placeholder="Jumlah penumpang" name="penumpang_lansia" value="<?php if($data_book > 0){echo $data_book['penumpang_lansia'];}?>"/>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Harga tiket</label>
                        <span class="form-text">Rp <?php if($data_book > 0){echo $data_book['harga_bus'];}?></span>
                    </div>
                    <div class="button-group">
                        <button type="submit" name="count" class="btn btn-warning text-white" id="btn-count">Hitung total bayar</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Payment</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Total bayar</label>
                        <span class="form-text">Rp <?php if($data_book > 0){echo $data_book['total_bayar'];}?></span>
                    </div>
                    <div class="mb-5 form-check">
                        <input type="checkbox" class="form-check-input" id="check">
                        <label class="form-check-label" for="check">Saya dan/ atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan</label>
                    </div>
                    <div class="button-group d-flex float-right">
                        <a href="detail_booking.php" class="btn btn-warning text-white mr-2" id="btn-book">Pesan tiket</a>
                        <a href="list_buses.php" class="btn btn-danger text-white" id="btn-cancel">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>