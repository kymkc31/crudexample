<?php
include("dtbs.php");

$sql = "SELECT * FROM araclar";
$query = $db->query($sql);

$data = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARAÇ CRUD</title>
    <style>
        th {
            font-family: "Audiowide", sans-serif;
            text-align: center;
            font-size: large;
            color: whitesmoke;
            text-transform: uppercase;
            vertical-align: center;
        }
        thead {
            text-align: center;
            font-family: "Audiowide", sans-serif;
            color: whitesmoke;
            text-transform: uppercase;
            vertical-align: center;
        }

        h1 {
            font-family: "Audiowide", sans-serif;
            color: whitesmoke;
            text-shadow: 1px 1px 2px black, 0 0 15px darkgray, 0 0 40px black;
            text-transform: uppercase;
            text-align: center;
            vertical-align: center;

        }

        td {
            font-family: "Audiowide", sans-serif;
            color: black;
            font-style: italic;
            font-weight: bold;
            text-align: center; 
        }



        .btn {
            font-family: "Audiowide", sans-serif;
            text-shadow: 1px 1px 3px black, 0 0 13px darkgray, 0 0 15px black;
            text-transform: uppercase;
            text-align: center;
            vertical-align: center;

        }
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>

<body class="container p-3 my-3 bg-dark text-white">
    <div class="container">
        <h1>Araç Ekle</h1>
        <form action="grv/insert.php" method="POST" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <th class="fw-bold">PLAKA : </th>
                    <td><input type="text" name="arac_plaka" class="form-control" required></td>
                </tr>
                <tr>
                    <th class="fw-bold">MARKA : </th>
                    <td><input type="text" name="arac_marka" class="form-control" required></td>
                </tr>
                <tr>
                    <th class="fw-bold">TİP : </th>
                    <td><input type="text" name="arac_tip" class="form-control" required></td>
                </tr>
                <tr>
                    <th class="fw-bold">MODEL : </th>
                    <td><input type="text" name="arac_model" class="form-control" required></td>
                </tr>
                <tr>
                    <th class="fw-bold">RENK : </th>
                    <td><input type="text" name="arac_renk" class="form-control" required></td>
                </tr>
                <tr>
                    <th class="fw-bold">RESİM : </th>
                    <td><input type="file" name="arac_foto" id="arac_foto" class="form-control" required></td>
                </tr>
            </table>
            <div class="d-grid gap-3 col-8 mx-auto">
                <th><input type="submit" value="EKLE" name="arac_ekle" class="btn btn-outline-success fw-bold"></th>
            </div>
        </form>
        <br>

        <?php

        if (isset($_GET['status'])) {
            if ($_GET['status'] == "ok") {
        ?>

            <?php
            }
            if ($_GET['status'] == "no") {
            ?>

            <?php
            }
            header("Refresh:1 url=index.php");
        }
        if (isset($_GET['dstatus'])) {
            if ($_GET['dstatus'] == "ok") {
            ?>

            <?php
            }
            if ($_GET['dstatus'] == "no") {
            ?>

            <?php
            }
            header("Refresh:1 url=index.php");
        }

        if (isset($_GET['gstatus'])) {
            if ($_GET['gstatus'] == "ok") {
            ?>

            <?php
            }
            if ($_GET['gstatus'] == "no") {
            ?>

        <?php
            }
            header("Refresh:1 url=index.php");
        }

        ?>
        <div class="container">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">PLAKA</th>
                        <th scope="col">MARKA</th>
                        <th scope="col">TİP</th>
                        <th scope="col">MODEL</th>
                        <th scope="col">RENK</th>
                        <th scope="col">RESİM</th>
                        <th scope="col">İŞLEMLER</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $datas) : ?>
                        <tr>
                            <td><?php echo $datas['arac_plaka']; ?></td>
                            <td><?php echo $datas['arac_marka']; ?></td>
                            <td><?php echo $datas['arac_tip']; ?></td>
                            <td><?php echo $datas['arac_model']; ?></td>
                            <td><?php echo $datas['arac_renk']; ?></td>
                            <td><?php echo $datas['arac_foto']; ?></td>
                            <td><a class="btn btn-outline-success"  href="guncellepage.php?id=<?php echo $datas['id']; ?>"> Güncelle</a>
                                <a class="btn btn-outline-danger" href="grv/sil.php?id=<?php echo $datas['id']; ?>"> Sil</a></td>
                            
                                </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>