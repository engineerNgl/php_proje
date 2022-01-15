<?php


$sayfa="Anasayfa";
include("inc/ahead.php");



if($_SESSION["yetki"]!="1"){


echo '<script type="text/javascript"  src="../js/sweetalert2.all.min.js"> </script>';


echo "<script> Swal.fire( {  title:'Hata!' , text:'Yetkisiz Erişim ' , icon:'error' ,confirmButtonText:'Tamam' }).then((value)=>{if(value.isConfirmed){window.location.href='anasayfa.php'}})


</script>";



exit;




}




$sorgu=$baglanti->prepare(query:"select * from anasayfa where id=:id");

$sorgu->execute(['id'=>(int)$_GET["id"]]);
$sorgu->execute();

$sonuc=$sorgu->fetch();

try{


if($_POST){

$guncelleSorgu=$baglanti->prepare(query:"update anasayfa set ustBaslik=:ustBaslik,altBaslik=:altBaslik,linkMetin=:linkMetin,link=:link where id=:id");

$guncelle=$guncelleSorgu->execute([


'ustBaslik'=>$_POST["ustBaslik"],
'altBaslik'=>$_POST["altBaslik"],
'linkMetin'=>$_POST["linkMetin"],
'link'=>$_POST["link"],
'id'=>(int)$_GET["id"]



]);






if($guncelle){


echo '<script type="text/javascript"  src="../js/sweetalert2.all.min.js"> </script>';


echo "<script> Swal.fire( {  title:'Başarılı!' , text:'Güncelleme Başarılı ' , icon:'success' ,confirmButtonText:'Tamam' }).then((value)=>{if(value.isConfirmed){window.location.href='anasayfa.php'}})


</script>";

}



}}
catch(Exception $e){

echo "mesaj -> ".$e->getMessage();
}


?>
 

                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Anasayfa Güncelle</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Site Yönetim Paneli</li>
                             <li class="breadcrumb-item active">Anasayfa Güncelle</li>
                        </ol>
                        
                        
                        
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                              
                            </div>
                            
                            <div class="card-body">
                            <form action="" method="post"> 
                            
                            <div class="form-group">
                            <lable>Üst Başlık</lable>
                            <input type="text" name="ustBaslik" required class="form-control" value="<?=$sonuc["ustBaslik"]?>">
				</div>
				</br>
				
				
				
				 <div class="form-group">
                            <lable>Alt Başlık</lable>
                            <input type="text" name="altBaslik" required class="form-control" value="<?=$sonuc["altBaslik"]?>">
				</div>
				</br>
				
				
				 <div class="form-group">
                            <lable>Link Metin</lable>
                            <input type="text" name="linkMetin" required class="form-control" value="<?=$sonuc["linkMetin"]?>">
				</div></br>
				
				
				
				 <div class="form-group">
                            <lable>Link</lable>
                            <input type="text" name="link" required class="form-control" value="<?=$sonuc["link"]?>">
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

                
