<?php


$sayfa="Anasayfa";
include("inc/ahead.php");
$sorgu=$baglanti->prepare(query:"select * from portfolyolar");
$sorgu->execute();
$sonuc=$sorgu->fetch();

?>


                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Portfolyolar</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Site Yönetim Paneli</li>
                            
                            
                            
                            
                             <li class="breadcrumb-item active"> Portfolyolar</li>
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
                                            <th>Küçük Fotoğraf</th>
                                            <th>Büyük Fotoğraf</th>
                                            <th>Başlık</th>
                                            <th>Client</th>
                                            <th>Date</th>
                                            <th>Category</th>
                                             <th>Açıklama</th>
                                              <th>İçerik</th>
                                               <th>Sira</th>
                                                <th>Aktif</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    
                                    
                                    
         
     <?php
  $sorgu3=$baglanti ->prepare (query : "select * from portfolyolar ");
  $sorgu3 -> execute();

  while($sonuc3 = $sorgu3->fetch())
  {

?>                              
                                        
                                    
                                    
                                    
                                   
                                    <tbody>
                                        <tr>
                                            <td> <?php echo $sonuc3["kucukfoto"] ?> </td>
                                            <td> <?php echo $sonuc3["buyukfoto"] ?> </td>
                                            <td> <?php echo $sonuc3["baslik"] ?> </td>
                                            <td> <?php echo $sonuc3["client"] ?>  </td>
                                            <td> <?php echo $sonuc3["date"] ?> </td>
                                            <td> <?php echo $sonuc3["category"] ?> </td>
                                            <td> <?php echo $sonuc3["aciklama"] ?> </td>
                                            <td> <?php echo $sonuc3["icerik"] ?> </td>
                                            <td> <?php echo $sonuc3["sira"] ?> </td>
                                            <td> <?php echo $sonuc3["aktif"] ?> </td>
                                            
                                            <td class="text-center"><a href="portfolyolarGuncelle.php?id=<?=$sonuc3["id"] ?> " > 
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

                
