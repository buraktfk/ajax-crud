

<?php 
include 'connection.php';

$i=1;
echo '<table class="table">
<thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ürün Adı</th>
      <th scope="col">Açıklama</th>
      <th scope="col">Fiyat</th>
      <th scope="col">Adet</th>
      <th scope="col">İşlem</th>
    </tr>
  </thead>
  <tbody>';

					$list = $conn->query("SELECT * FROM urunler", PDO::FETCH_ASSOC);
					foreach ($list as $row) {

					echo '<tr>
      				<th scope="row">'.$i++.'</th>';
					echo '<td>'.$row["urun_adi"].'</td>';
					echo '<td>'.$row["urun_aciklama"].'</td>';
					echo '<td>'.$row["urun_fiyat"].'</td>';
					echo '<td>'.$row["urun_adet"].'</td>';
echo '<td><a href="guncelle.php?id='.$row["urun_id"].'">Düzenle</a>/<a class="trash" id= '.$row["urun_id"].' href="#">Sil</a></td>';

					echo '</tr>';

					}

					   
echo '

  </tbody>

  </table>';
?>

<script type="text/javascript">
	$(document).on('click','.trash',function(){
        var del_id= $(this).attr('id');
        var $ele = $(this).parent().parent();
        $.ajax({
            type:'POST',
            url:'sil.php',
            data:{'del_id':del_id},
            success: function(data){
                 if(data=="YES"){
                    $ele.fadeOut().remove();
                 }else{
                        
                 }
             }

            });
        });

</script>



      
      






