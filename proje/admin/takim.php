<?php


$sayfa="Takım";
include("inc/ahead.php");
$sorgu=$baglanti->prepare(query:"select * from takim");
$sorgu->execute();
$sonuc=$sorgu->fetch();

?>


                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Takım</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Site Yönetim Paneli</li>
                            
                            
                            
                            
                             <li class="breadcrumb-item active">Takım</li>
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
                                            <th>Fotoğraf</th>
                                            <th>İsim</th>
                                            <th>Görev</th>
                                            <th>Twitter</th>
                                            <th>Facebook</th>
                                            <th>LinkedIn</th>
                                            
                                            <th>Sıra</th>
                                             <th>Aktif</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    
                                    
                                    
                                    
         
     <?php
  $sorgu3=$baglanti ->prepare (query : "select * from takim ");
  $sorgu3 -> execute();

  while($sonuc3 = $sorgu3->fetch())
  {

?>                                   
                                    
                                    
                                    
                                    
                                    
                                   
                                    <tbody>
                                        <tr>
                                            <td> <?php echo $sonuc3["foto"] ?> </td>
                                            <td> <?php echo $sonuc3["isim"] ?> </td>
                                            <td> <?php echo $sonuc3["gorev"] ?> </td>
                                            <td> <?php echo $sonuc3["twitter"] ?> </td>
                                            <td> <?php echo $sonuc3["facebook"] ?> </td>
                                            <td> <?php echo $sonuc3["linkedin"] ?> </td>
                                            
                                            <td> <?php echo $sonuc3["sira"] ?>      </td>
                                            <td> <?php echo $sonuc3["aktif"] ?>      </td>
                                            
                                            <td class="text-center"><a href="takimGuncelle.php?id=<?=$sonuc3["id"] ?> " > 
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

                
