<?php
include("dtbs.php");

$id = $_GET['id'];
$sql = "SELECT * FROM araclar WHERE id = '$id' ";
$query = $db->query($sql);

$data = $query->fetch(PDO::FETCH_ASSOC);

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
            color: white;
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
            text-shadow: 1px 1px 3px black, 0 0 3px black, 0 0 1px black;
            text-transform: uppercase;
            text-align: center;
            vertical-align: center;
        }
        .btn{
            font-family: "Audiowide", sans-serif;
            text-shadow: 1px 1px 3px black, 0 0 13px darkgray, 0 0 15px black;
        }
    </style>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3">
        <h1>Araç Güncelle</h1>
        <hr>
        <form action="grv/guncelle.php?id=<?php echo $_GET['id']; ?>" method="POST">
            <table class="table">
                <tr>
                    <td class="fw-bold">PLAKA : </td>
                    <td><input type="text" name="arac_plaka" class="form-control" required value="<?php echo $data['arac_plaka']; ?>"></td>
                </tr>
                <tr>
                    <td class="fw-bold">MARKA : </td>
                    <td><input type="text" name="arac_marka" class="form-control" required value="<?php echo $data['arac_marka']; ?>"></td>
                </tr>
                <tr>
                    <td class="fw-bold">TİP : </td>
                    <td><input type="text" name="arac_tip" class="form-control" required value="<?php echo $data['arac_tip']; ?>"></td>
                </tr>
                <tr>
                    <td class="fw-bold">MODEL : </td>
                    <td><input type="text" name="arac_model" class="form-control" required value="<?php echo $data['arac_model']; ?>"></td>
                </tr>
                <tr>
                    <td class="fw-bold">RENK : </td>
                    <td><input type="text" name="arac_renk" class="form-control" required value="<?php echo $data['arac_renk']; ?>"></td>
                </tr>
                <tr>
                    <td class="fw-bold">RESİM : </td>
                    <td><input type="file" name="arac_foto" class="form-control" value="<?php echo $data['arac_foto']; ?>"></td>
                </tr>
            </table>
            <div class="d-grid gap-3 col-8 mx-auto">
                <td><input type="submit" value="GÜNCELLE" name="arac_guncelle" class="btn btn-outline-success fw-bold"></td>
            </div>
            <hr>
        </form>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>