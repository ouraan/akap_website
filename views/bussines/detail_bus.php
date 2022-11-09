<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AKAP | Detail Bus</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/styles/style_detail.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg py-4 shadow-sm">
        <a href="../list_buses.php" class="navbar-brand ml-5">AKAP</a>
    </nav>

    <?php
        include "../../models/connection.php";
        $read = "SELECT * FROM bus WHERE id_bus = 'BS'";
        $query_read = $koneksi->query($read);
        $data_query = $query_read->fetch_array();
    ?>

    <div class="container-fluid banner" id="div-banner">
        <div class="row" id="banner-text">
            <div class="col-sm-6 banner-group-text" id="col-left">
                <h2><?php echo $data_query['nama_bus']?></h2>
                <p>AKAP bussines class bus</p>
            </div>
            <div class="col-sm-4 banner-group-text" id="col-right">
                <p id="p-price">Price start from</p>
                <h3>Rp <?php echo $data_query['harga_bus']?></h3>
            </div>
            <div class="col-sm-2">
                <a href="../form_booking.php" class="btn btn-warning mt-4 text-white">Book ticket</a>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="div-content">
        <div class="card mb-5" id="card-desc">
            <div class="card-header">
                <h5>Brief description</h5>
            </div>
            <div class="card-body">
                <p>
                    <?php echo $data_query['detail_bus']?>
                </p>
            </div>
        </div>
        <div class="card" id="card-image">
            <div class="card-header">
                <h5>Images</h5>
            </div>
            <div class="card-body">
                <img src="<?php echo $data_query['img_cover']?>" alt="" class="card-img-top" height="500"/>
                <div class="image-grid pt-4">
                    <img src="<?php echo $data_query['img_cover']?>" alt="" width="300" height="170" />
                    <img src="<?php echo $data_query['img_detail_1']?>" alt="" width="300" height="170" />
                    <img src="<?php echo $data_query['img_detail_2']?>" alt="" width="300" height="170" />
                    <img src="<?php echo $data_query['img_detail_3']?>" alt="" width="300" height="170" />
                </div>
            </div>
        </div>
    </div>
</body>
</html>