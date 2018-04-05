<?php 

		require_once 'connection.php';
		
		$id = $_POST['del_id'];;
		if($sil=$conn->exec("DELETE FROM urunler WHERE urun_id = $id")){
echo "YES";
}
else{
	echo "NO";
}
	

?>