<?php


$sayfa="Anasayfa";
include("inc/ahead.php");
$sorgu=$baglanti->prepare(query:"select * from anasayfa");
$sorgu->execute();
$sonuc=$sorgu->fetch();

?>


                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Anasayfa</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Site Yönetim Paneli</li>
                            
                            
                            
                            
                             <li class="breadcrumb-item active">Anasayfa</li>
                        </ol>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                              
                            </div>
                            <div class="card-body">
                            <div class="table-responsive">
                            
                                <table class="table table-bordered"  id="" width="100%"  cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Üst Başlık</th>
                                            <th>Alt Başlık</th>
                                            <th>Link Metin</th>
                                            <th>Lİnk</th>
                                            
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <tr>
                                            <td> <?php echo $sonuc["ustBaslik"] ?> </td>
                                            <td> <?php echo $sonuc["altBaslik"] ?> </td>
                                            <td> <?php echo $sonuc["linkMetin"] ?> </td>
                                            <td> <?php echo $sonuc["link"] ?>      </td>
                                            <td class="text-center">
                                            
                                            
                                            <?php
                                            if($_SESSION["yetki"]=="1"){
                                            ?>
                                            
                                            
                                            
                                            <a href="anasayfaGuncelle.php?id=<?=$sonuc["id"] ?> " > 
                                            <span class="fa fa-edit fa-2x"> </span>
                                            </a>
                                            
                                            
                                            
                                 <?php
                                 }
                                 
                                 ?>           
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            </td>
                          
  
					 </tr>
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>

                            </div>
                        </div>                      
        
                    
                </main>
                
                
                
<?php
include("inc/afooter.php");

?>

                
