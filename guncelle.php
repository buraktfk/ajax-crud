<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Güncelle</title>
	<meta charset="utf-8">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

<?php 

$id=$_GET["id"];
$list = $conn->query("SELECT * FROM urunler WHERE urun_id=$id", PDO::FETCH_ASSOC);
					$row=$list->fetch();


?>

<div class="container">
		
		<div class="col-md-4 mx-auto mt-5 bg-light">
			<form id="guncelle">

  <div class="form-group">
    <label>Ürün Adı</label>
    <input type="text" class="form-control" value="<?php echo $row['urun_adi']; ?>" name="urun_adi" id="urun_adi">
    
  </div>
  <div class="form-group">
    <label>Açıklama</label>
    <textarea class="form-control"   name="aciklama" id="aciklama"><?php echo $row['urun_aciklama']; ?></textarea>
  </div>
  <div class="form-group">
    <label>Fiyat</label>
    <input type="number" class="form-control" value="<?php echo $row['urun_fiyat']; ?>" name="fiyat" id="fiyat">
  </div>
  <div class="form-group">
    <label>Adet</label>
    <input type="number" class="form-control" value="<?php echo $row['urun_adet']; ?>" name="adet" id="adet">
    <input type="hidden" name="id" value="<?php echo $row['urun_id']; ?>">
  </div>
  <button type="submit" class="btn btn-outline-primary">Güncelle</button>
</form>
		</div>
		

</div>
<script type="text/javascript">

$().ready(function(){

				$("form#guncelle").submit(function(e){
				e.preventDefault();
					$.post("guncelledb.php",$(this).serialize(),function(){
						top.location.href="index.php";
					});	

				});
			});

				</script>
</body>
</html>