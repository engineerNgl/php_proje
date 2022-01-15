<?php


$sayfa="Portfolyolar";
include("inc/ahead.php");



if($_SESSION["yetki"]!="1"){


echo '<script type="text/javascript"  src="../js/sweetalert2.all.min.js"> </script>';


echo "<script> Swal.fire( {  title:'Hata!' , text:'Yetkisiz Erişim ' , icon:'error' ,confirmButtonText:'Tamam' }).then((value)=>{if(value.isConfirmed){window.location.href='portfolyolar.php'}})


</script>";



exit;




}




$sorgu=$baglanti->prepare(query:"select * from portfolyolar where id=:id");

$sorgu->execute(['id'=>(int)$_GET["id"]]);
$sorgu->execute();

$sonuc=$sorgu->fetch();

try{


if($_POST){

$guncelleSorgu=$baglanti->prepare(query:"update portfolyolar set kucukfoto=:kucukfoto,buyukfoto=:buyukfoto,baslik=:baslik,client=:client,date=:date,category=:category,aciklama=:aciklama,icerik=:icerik, sira=:sira,aktif=:aktif where id=:id");

$guncelle=$guncelleSorgu->execute([


'kucukfoto'=>$_POST["kucukfoto"],
'buyukfoto'=>$_POST["buyukfoto"],
'baslik'=>$_POST["baslik"],
'client'=>$_POST["client"],
'date'=>$_POST["date"],
'category'=>$_POST["category"],
'aciklama'=>$_POST["aciklama"],
'icerik'=>$_POST["icerik"],

'sira'=>$_POST["sira"],
'aktif'=>$_POST["aktif"],


'id'=>(int)$_GET["id"]



]);






if($guncelle){


echo '<script type="text/javascript"  src="../js/sweetalert2.all.min.js"> </script>';


echo "<script> Swal.fire( {  title:'Başarılı!' , text:'Güncelleme Başarılı ' , icon:'success' ,confirmButtonText:'Tamam' }).then((value)=>{if(value.isConfirmed){window.location.href='portfolyolar.php'}})


</script>";

}



}}
catch(Exception $e){

echo "mesaj -> ".$e->getMessage();
}


?>
 

                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">POrtfolyolar Güncelle</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Site Yönetim Paneli</li>
                             <li class="breadcrumb-item active">Portfolyolar Güncelle</li>
                        </ol>
                        
                        
                        
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                              
                            </div>
                            
                            <div class="card-body">
                            <form action="" method="post"> 
                            
                            <div class="form-group">
                            <lable>Küçük Fotoğraf</lable>
                            <input type="text" name="kucukfoto" required class="form-control" value="<?=$sonuc["kucukfoto"]?>">
				</div>
				</br>
				
				
				
				 <div class="form-group">
                            <lable>Büyük Fotoğraf</lable>
                            <input type="text" name="buyukfoto" required class="form-control" value="<?=$sonuc["buyukfoto"]?>">
				</div>
				</br>
				
				
				 <div class="form-group">
                            <lable>Başlık</lable>
                            <input type="text" name="baslik" required class="form-control" value="<?=$sonuc["baslik"]?>">
				</div></br>
				
				
				
				 <div class="form-group">
                            <lable>Client</lable>
                            <input type="text" name="client" required class="form-control" value="<?=$sonuc["client"]?>">
				</div>
				</br>
				
				
				
				
				 <div class="form-group">
                            <lable>Date</lable>
                            <input type="text" name="date" required class="form-control" value="<?=$sonuc["date"]?>">
				</div>
				</br>
				
				 <div class="form-group">
                            <lable>Category</lable>
                            <input type="text" name="category" required class="form-control" value="<?=$sonuc["category"]?>">
				</div>
				</br>
				
				
				
				 <div class="form-group">
                            <lable>Açıklama</lable>
                            <input type="text" name="aciklama" required class="form-control" value="<?=$sonuc["aciklama"]?>">
				</div>
				</br>
				
				
				
				<div class="form-group">
                            <lable>İçerik</lable>
                            <input type="text" name="icerik" required class="form-control" value="<?=$sonuc["icerik"]?>">
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

                
