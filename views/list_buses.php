<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AKAP | Buses List</title>
    <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles/style_list.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg py-4 shadow-sm">
        <a href="" class="navbar-brand ml-5">AKAP</a>
    </nav>
    <div class="container-fluid p-5" id="div-bus-list">
        <div class="text-center">
            <h2>OUR BUSES</h2>
            <p>We provide you three classes that you could choose</p>
        </div>
        <div class="grid-container p-5">
            <?php
                include "../models/connection.php";
                $read = "SELECT * FROM bus";
                $query_read = $koneksi->query($read);
                while($data_query = $query_read->fetch_array()){?>
                    <a class="card text-dark text-decoration-none" href="<?php echo $data_query['link_detail']?>">
                        <img src="<?php echo $data_query['img_cover']?>" alt="" class="card-image-top" height="220">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $data_query['nama_bus']?></h5>
                            <p>Start from Rp <?php echo $data_query['harga_bus']?></p>
                        </div>
                    </a>
                <?php
                }
            ?>
        </div>
    </div>
</body>
</html>