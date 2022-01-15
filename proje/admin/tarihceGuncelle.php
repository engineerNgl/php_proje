<?php


$sayfa="Tarihce";
include("inc/ahead.php");



if($_SESSION["yetki"]!="1"){


echo '<script type="text/javascript"  src="../js/sweetalert2.all.min.js"> </script>';


echo "<script> Swal.fire( {  title:'Hata!' , text:'Yetkisiz Erişim ' , icon:'error' ,confirmButtonText:'Tamam' }).then((value)=>{if(value.isConfirmed){window.location.href='tarihce.php'}})


</script>";



exit;




}




$sorgu=$baglanti->prepare(query:"select * from tarihce where id=:id");

$sorgu->execute(['id'=>(int)$_GET["id"]]);
$sorgu->execute();

$sonuc=$sorgu->fetch();

try{


if($_POST){

$guncelleSorgu=$baglanti->prepare(query:"update tarihce set tarih=:tarih,baslik=:baslik,icerik=:icerik,foto=:foto where id=:id");

$guncelle=$guncelleSorgu->execute([


'tarih'=>$_POST["tarih"],
'baslik'=>$_POST["baslik"],
'icerik'=>$_POST["icerik"],
'foto'=>$_POST["foto"],
'id'=>(int)$_GET["id"]



]);






if($guncelle){


echo '<script type="text/javascript"  src="../js/sweetalert2.all.min.js"> </script>';


echo "<script> Swal.fire( {  title:'Başarılı!' , text:'Güncelleme Başarılı ' , icon:'success' ,confirmButtonText:'Tamam' }).then((value)=>{if(value.isConfirmed){window.location.href='tarihce.php'}})


</script>";

}



}}
catch(Exception $e){

echo "mesaj -> ".$e->getMessage();
}


?>
 

                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tarihçe Güncelle</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Site Yönetim Paneli</li>
                             <li class="breadcrumb-item active">Tarihçe Güncelle</li>
                        </ol>
                        
                        
                        
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                              
                            </div>
                            
                            <div class="card-body">
                            <form action="" method="post"> 
                            
                            <div class="form-group">
                            <lable>Tarih</lable>
                            <input type="text" name="tarih" required class="form-control" value="<?=$sonuc["tarih"]?>">
				</div>
				</br>
				
				
				
				 <div class="form-group">
                            <lable>Başlık</lable>
                            <input type="text" name="baslik" required class="form-control" value="<?=$sonuc["baslik"]?>">
				</div>
				</br>
				
				
				 <div class="form-group">
                            <lable>İçerik</lable>
                            <input type="text" name="icerik" required class="form-control" value="<?=$sonuc["icerik"]?>">
				</div></br>
				
				
				
				 <div class="form-group">
                            <lable>Fotoğraf</lable>
                            <input type="text" name="foto" required class="form-control" value="<?=$sonuc["foto"]?>">
				</div>
				</br>
				</br>
				
				
				<div class="form-group">
				
				<input type="submit" value="Güncelle" class="btn btn-primary"  >
                            
				</div>
				
				
				
                            </form>
                            
                            </div>
                        </div>
                    </div>
                </main>
                
                
                
<?php
include("inc/afooter.php");

?>

                
