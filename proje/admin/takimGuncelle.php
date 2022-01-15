<?php


$sayfa="Takım";
include("inc/ahead.php");



if($_SESSION["yetki"]!="1"){


echo '<script type="text/javascript"  src="../js/sweetalert2.all.min.js"> </script>';


echo "<script> Swal.fire( {  title:'Hata!' , text:'Yetkisiz Erişim ' , icon:'error' ,confirmButtonText:'Tamam' }).then((value)=>{if(value.isConfirmed){window.location.href='takim.php'}})


</script>";



exit;




}




$sorgu=$baglanti->prepare(query:"select * from takim where id=:id");

$sorgu->execute(['id'=>(int)$_GET["id"]]);
$sorgu->execute();

$sonuc=$sorgu->fetch();

try{


if($_POST){

$guncelleSorgu=$baglanti->prepare(query:"update takim set foto=:foto,isim=:isim,gorev=:gorev,twitter=:twitter,facebook=:facebook,linkedin=:linkedin, sira=:sira,aktif=:aktif where id=:id");

$guncelle=$guncelleSorgu->execute([


'foto'=>$_POST["foto"],
'isim'=>$_POST["isim"],
'gorev'=>$_POST["gorev"],
'twitter'=>$_POST["twitter"],
'facebook'=>$_POST["facebook"],
'linkedin'=>$_POST["linkedin"],

'sira'=>$_POST["sira"],
'aktif'=>$_POST["aktif"],


'id'=>(int)$_GET["id"]



]);






if($guncelle){


echo '<script type="text/javascript"  src="../js/sweetalert2.all.min.js"> </script>';


echo "<script> Swal.fire( {  title:'Başarılı!' , text:'Güncelleme Başarılı ' , icon:'success' ,confirmButtonText:'Tamam' }).then((value)=>{if(value.isConfirmed){window.location.href='takim.php'}})


</script>";

}



}}
catch(Exception $e){

echo "mesaj -> ".$e->getMessage();
}


?>
 

                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Takım Güncelle</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Site Yönetim Paneli</li>
                             <li class="breadcrumb-item active">Takım Güncelle</li>
                        </ol>
                        
                        
                        
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                              
                            </div>
                            
                            <div class="card-body">
                            <form action="" method="post"> 
                            
                            <div class="form-group">
                            <lable>Fotoğraf</lable>
                            <input type="text" name="foto" required class="form-control" value="<?=$sonuc["foto"]?>">
				</div>
				</br>
				
				
				
				 <div class="form-group">
                            <lable>İsim Soyisim</lable>
                            <input type="text" name="isim" required class="form-control" value="<?=$sonuc["isim"]?>">
				</div>
				</br>
				
				
				 <div class="form-group">
                            <lable>Gorev</lable>
                            <input type="text" name="gorev" required class="form-control" value="<?=$sonuc["gorev"]?>">
				</div></br>
				
				
				
				 <div class="form-group">
                            <lable>Twitter</lable>
                            <input type="text" name="twitter" required class="form-control" value="<?=$sonuc["twitter"]?>">
				</div>
				</br>
				
				
				
				
				 <div class="form-group">
                            <lable>Facebook</lable>
                            <input type="text" name="facebook" required class="form-control" value="<?=$sonuc["facebook"]?>">
				</div>
				</br>
				
				 <div class="form-group">
                            <lable>LinkedIn</lable>
                            <input type="text" name="linkedin" required class="form-control" value="<?=$sonuc["linkedin"]?>">
				</div>
				</br>
				
				
				
				 <div class="form-group">
                            <lable>Sıra</lable>
                            <input type="text" name="sira" required class="form-control" value="<?=$sonuc["sira"]?>">
				</div>
				</br>
				
				
				
				<div class="form-group">
                            <lable>Aktif</lable>
                            <input type="text" name="aktif" required class="form-control" value="<?=$sonuc["aktif"]?>">
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

                
