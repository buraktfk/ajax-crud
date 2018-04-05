<?php 
include("connection.php");


	try{
$q= $conn->prepare("INSERT INTO urunler (urun_adi,urun_aciklama,urun_fiyat,urun_adet) VALUES (:adi,:aciklama,:fiyat,:adet) ");
		$q->execute(array(
    "adi" =>($_POST['urun_adi']),
    "aciklama" =>($_POST['aciklama']),
    "fiyat" => ($_POST['fiyat']),
    "adet" => ($_POST['adet'])
		));
}
catch(PDOException $e){
			echo $e->getMessage();
		}
		

?>