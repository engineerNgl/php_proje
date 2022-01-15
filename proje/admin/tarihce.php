<?php


$sayfa="Anasayfa";
include("inc/ahead.php");
$sorgu=$baglanti->prepare(query:"select * from tarihce");
$sorgu->execute();
$sonuc=$sorgu->fetch();

?>


                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tarihçe</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Site Yönetim Paneli</li>
                            
                            
                            
                            
                             <li class="breadcrumb-item active">Tarihçe</li>
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
                                            <th>Tarih</th>
                                            <th>Başlık</th>
                                            <th>İçerik</th>
                                            <th>Fotoğraf</th>
                                            
                                        </tr>
                                    </thead>
                                     <?php
  $sorgu3=$baglanti ->prepare (query : "select * from tarihce ");
  $sorgu3 -> execute();

  while($sonuc3 = $sorgu3->fetch())
  {

?>      
                                   
                                    <tbody>
                                        <tr>
                                            <td> <?php echo $sonuc3["tarih"] ?> </td>
                                            <td> <?php echo $sonuc3["baslik"] ?> </td>
                                            <td> <?php echo $sonuc3["icerik"] ?> </td>
                                            <td> <?php echo $sonuc3["foto"] ?>      </td>
                                            <td class="text-center"><a href="tarihceGuncelle.php?id=<?=$sonuc3["id"] ?> " > 
                                            <span class="fa fa-edit fa-2x"> </span>
                                            </a></td>
                          
  
					 </tr>
                                        
                                    </tbody>
                                    
                                    
                                      
                                    <?php
               			 }
                			?>  
                                    
                                </table>

                            </div>
                        </div>

                            </div>
                        </div>                      
        
                    
                </main>
                
                
                
<?php
include("inc/afooter.php");

?>

                
