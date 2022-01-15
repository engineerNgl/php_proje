<?php


$sayfa="Hakkimizda";
include("inc/ahead.php");
$sorgu=$baglanti->prepare(query:"select * from hakkimizda");
$sorgu->execute();
$sonuc=$sorgu->fetch();

?>


                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Hakkımızda</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Site Yönetim Paneli</li>
                            
                            
                            
                            
                             <li class="breadcrumb-item active">Hakkımızda</li>
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
                                            <th>Başlık</th>
                                            <th>İçerik</th>
                                            <th>Alt Başlık</th>
                                            <th>Alt İçerik</th>
                                             <th>Alt İçerik2</th>
                                            
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <tr>
                                            <td> <?php echo $sonuc["baslik"] ?> </td>
                                            <td> <?php echo $sonuc["icerik"] ?> </td>
                                            <td> <?php echo $sonuc["altBaslik"] ?> </td>
                                            <td> <?php echo $sonuc["altIcerik"] ?>  </td>
                                            <td> <?php echo $sonuc["altIcerik2"] ?>  </td>
                                            <td class="text-center"><a href="hakkimizdaGuncelle.php?id=<?=$sonuc["id"] ?> " > 
                                            <span class="fa fa-edit fa-2x"> </span>
                                            </a></td>
                          
  
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

                
