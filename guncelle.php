<?php
include("../dtbs.php");

if(isset($_POST['arac_guncelle'])){
   $id = $_GET['id'];
$arac_plaka = $_POST['arac_plaka'];
$arac_marka = $_POST['arac_marka'];
$arac_tip = $_POST['arac_tip'];
$arac_model = $_POST['arac_model'];
$arac_renk = $_POST['arac_renk'];
$arac_foto = $_POST['arac_foto'];
   $sql = "UPDATE araclar SET
   arac_plaka = ?,
   arac_marka = ?,
   arac_tip = ?,
   arac_model = ?,
   arac_renk = ?,
   arac_foto = ?
   WHERE id = '$id' ";
   $query = $db->prepare($sql);
   $query->execute(array(
    $arac_plaka,
    $arac_marka,
    $arac_tip,
    $arac_model,
    $arac_renk,
    $arac_foto
   ));

   $count = $query->rowCount();
   if($count > 0){

header("Location: ../index.php?gstatus=ok");

   }
else{
    header("Location: ../index.php?gstatus=no");
}
exit;
}

?>