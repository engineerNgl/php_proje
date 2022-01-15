<?php


$sayfa="Servislerimiz";
include("inc/ahead.php");



if($_SESSION["yetki"]!="1"){


echo '<script type="text/javascript"  src="../js/sweetalert2.all.min.js"> </script>';


echo "<script> Swal.fire( {  title:'Hata!' , text:'Yetkisiz Erişim ' , icon:'error' ,confirmButtonText:'Tamam' }).then((value)=>{if(value.isConfirmed){window.location.href='servislerimiz.php'}})


</script>";



exit;




}




$sorgu=$baglanti->prepare(query:"select * from servislerimiz where id=:id");

$sorgu->execute(['id'=>(int)$_GET["id"]]);
$sorgu->execute();

$sonuc=$sorgu->fetch();

try{


if($_POST){

$guncelleSorgu=$baglanti->prepare(query:"update servislerimiz set foto=:foto,baslik=:baslik,icerik=:icerik where id=:id");

$guncelle=$guncelleSorgu->execute([


'foto'=>$_POST["foto"],
'baslik'=>$_POST["baslik"],
'icerik'=>$_POST["icerik"],
'id'=>(int)$_GET["id"]



]);






if($guncelle){


echo '<script type="text/javascript"  src="../js/sweetalert2.all.min.js"> </script>';


echo "<script> Swal.fire( {  title:'Başarılı!' , text:'Güncelleme Başarılı ' , icon:'success' ,confirmButtonText:'Tamam' }).then((value)=>{if(value.isConfirmed){window.location.href='servisler.php'}})


</script>";

}



}}
catch(Exception $e){

echo "mesaj -> ".$e->getMessage();
}


?>
 

                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Servisler Güncelle</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Site Yönetim Paneli</li>
                             <li class="breadcrumb-item active">Servisler Güncelle</li>
                        </ol>
                        
                        
                        
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                              
                            </div>
                            
                            <div class="card-body">
                            <form action="" method="post"> 
                            
                            
                            
                            <div class="form-group">
                            <lable>id</lable>
                            <input type="text" name="id" required class="form-control" value="<?=$sonuc["id"]?>">
				</div>
				</br>
                            
                            
                            
                            
                            <div class="form-group">
                            <lable>foto</lable>
                            <input type="text" name="foto" required class="form-control" value="<?=$sonuc["foto"]?>">
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

                
