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
        thead {
            text-align: center;
            vertical-align: center;
        }
         h1 {
            font-family: "Audiowide", sans-serif;
            color: whitesmoke;
            text-shadow: 1px 1px 2px black, 0 0 15px darkgray, 0 0 4px black;
            text-transform: uppercase;
            text-align: center;
            vertical-align: center;
            
        }
            td {
                font-family: "Audiowide", sans-serif;
            text-align: center;
            vertical-align: center;
        }
        th {
            font-family: "Audiowide", sans-serif;
            color: whitesmoke;
            text-shadow: 1px 1px 3px black, 0 0 3px darkgray, 0 0 1px black;
            text-transform: uppercase;
            text-align: center;
            vertical-align: center;
            
        }
        .btn{
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
</head>

<body>
    <hr>
    <div class="container">
        <h1>Araç Ekle</h1>
        <hr>
        <form action="grv/insert.php" method="POST">
            <table class="table">
                <tr>
                    <td class="fw-bold">PLAKA : </td>
                    <td><input type="text" name="arac_plaka" class="form-control" required></td>
                </tr>
                <tr>
                    <td class="fw-bold">MARKA : </td>
                    <td><input type="text" name="arac_marka" class="form-control" required></td>
                </tr>
                <tr>
                    <td class="fw-bold">TİP : </td>
                    <td><input type="text" name="arac_tip" class="form-control" required></td>
                </tr>
                <tr>
                    <td class="fw-bold">MODEL : </td>
                    <td><input type="text" name="arac_model" class="form-control" required></td>
                </tr>
                <tr>
                    <td class="fw-bold">RENK : </td>
                    <td><input type="text" name="arac_renk" class="form-control" required></td>
                </tr>
                <tr>
                    <td class="fw-bold">RESİM : </td>
                    <td><input type="file" name="arac_foto" class="form-control"></td>
                </tr>
            </table>
            <div class="d-grid gap-3 col-8 mx-auto">
                <td><input type="submit" value="EKLE" name="arac_ekle" class="btn btn-outline-success fw-bold"></td>
            </div> 
            <hr>
        </form>


        <?php
        
        if (isset($_GET['status'])) {
            if ($_GET['status'] == "ok") {
        ?>
                <div class="alert alert-success col-16 mx-auto">
                    <b> Araç Ekleme Başarılı </b>
                </div>


            <?php
            }
            if ($_GET['status'] == "no") {
            ?>
                <div class="alert alert-danger col-16">
                    <b> Araç Ekleme Hatalı </b>
                </div>
        <?php
            }
            header("Refresh:2 url=index.php");
        }
        if (isset($_GET['dstatus'])) {
            if ($_GET['dstatus'] == "ok") {
        ?>
                <div class="alert alert-success col-16">
                    <b> Araç Silme Başarılı </b>
                </div>
            <?php
            }
            if ($_GET['dstatus'] == "no") {
            ?>
                <div class="alert alert-danger col-16 mx-auto">
                    <b> Araç Silme Hatalı </b>
                </div>
        <?php
            }
            header("Refresh:2 url=index.php");
        }

        if (isset($_GET['gstatus'])) {
            if ($_GET['gstatus'] == "ok") {
        ?>
                <div class="alert alert-success col-16">
                    <b> Araç Güncelleme Başarılı </b>
                </div>
            <?php
            }
            if ($_GET['gstatus'] == "no") {
            ?>
                <div class="alert alert-danger col-16">
                    <b> Araç Güncelleme Hatalı </b>
                </div>
        <?php
            }
            header("Refresh:2 url=index.php");
        }

        ?>
        <hr>
        <div class="container mt-3">
        <table class="table">
            <thead>
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
                        <td><a class="btn btn-success" href="guncellepage.php?id=<?php echo $datas['id']; ?>">  Güncelle</a>
                        <a class="btn btn-danger" href="grv/sil.php?id=<?php echo $datas['id']; ?>">  Sil</a></td>
                        
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>