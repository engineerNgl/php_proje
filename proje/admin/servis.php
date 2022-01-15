<?php


$sayfa="Anasayfa";
include("inc/ahead.php");
$sorgu=$baglanti->prepare(query:"select * from servis");
$sorgu->execute();
$sonuc=$sorgu->fetch();

?>


                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Servis</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Site Yönetim Paneli</li>
                            
                            
                            
                            
                             <li class="breadcrumb-item active">Servis</li>
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
                                            <th>Alt Başlık</th>
                                         <th>Tanımlama</th>
                                            
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <tr>
                                            <td> <?php echo $sonuc["baslik"] ?> </td>
                                            <td> <?php echo $sonuc["altBaslik"] ?> </td>
                                            <td> <?php echo $sonuc["tanimlama"] ?> </td>
                                           
                                            <td class="text-center"><a href="servisGuncelle.php?id=<?=$sonuc["id"] ?> " > 
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

                
