<?php 
include 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
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
<div class="container">
	
		<div class="row">
		<div class="col-md-4 mt-5 bg-light">
			<form id="urun_ekle">
  <div class="form-group mx-auto">
    <label>Ürün Adı</label>
    <input type="text" class="form-control" name="urun_adi" id="urun_adi">
    
  </div>
  <div class="form-group">
    <label>Açıklama</label>
    <textarea class="form-control" name="aciklama" id="aciklama"></textarea>
  </div>
  <div class="form-group">
    <label>Fiyat</label>
    <input type="number" class="form-control" name="fiyat" id="fiyat">
  </div>
  <div class="form-group">
    <label>Adet</label>
    <input type="number" class="form-control" name="adet" id="adet">
    
  </div>
  <button type="submit" class="btn btn-outline-primary">Ekle</button>
</form>
		</div>
		<div class="col-md-8 mt-5">
		<div id="urunSonuc"></div>


	</div>
</div>
</div>
<script>

			$().ready(function(){

				$("form#urun_ekle").submit(function(e){
				e.preventDefault();
					$.post("ekle.php",$(this).serialize(),function(){
						urunSonuc();
					});	

				});

urunSonuc();
					function urunSonuc(){
					$.post("urun_list.php",function(sonuc){
					$("#urunSonuc").html(sonuc);

				});

				}


});
				</script>

</body>
</html>


