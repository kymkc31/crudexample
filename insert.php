<?php
include("../dtbs.php");

if(isset($_POST['arac_ekle'])){
$arac_plaka = $_POST['arac_plaka'];
$arac_marka = $_POST['arac_marka'];
$arac_tip = $_POST['arac_tip'];
$arac_model = $_POST['arac_model'];
$arac_renk = $_POST['arac_renk'];
$arac_foto = $_POST['arac_foto'];

    $sql = "INSERT INTO araclar (arac_plaka,arac_marka,arac_tip,arac_model,arac_renk,arac_foto) VALUES ('$arac_plaka','$arac_marka','$arac_tip','$arac_model','$arac_renk','$arac_foto')";

$query = $db->prepare($sql);
$query->execute();


$count = $query->rowCount();

if($count > 0){

    header("Location: ../index.php?status=ok");
}

else{
    header("Location: ../index.php?status=no");
}
exit;
}
?>