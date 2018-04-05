<?php
require_once 'connection.php';

	
		try{
			$id = $_POST['id'];
			$urun_adi =($_POST['urun_adi']);
			$aciklama = ($_POST['aciklama']);
			$fiyat = ($_POST['fiyat']);
			$adet = ($_POST['adet']);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "UPDATE `urunler` SET `urun_adi` = '$urun_adi', `urun_aciklama` = '$aciklama', `urun_fiyat` = '$fiyat', `urun_adet` = '$adet' WHERE `urun_id` = '$id'";

			$conn->exec($sql);
			
		}catch(PDOException $e){
			echo $e->getMessage();
		}
		
	


?>