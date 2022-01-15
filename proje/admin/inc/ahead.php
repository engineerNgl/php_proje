<?php
session_start();

if(!(isset($_SESSION["Oturum"]) && $_SESSION['Oturum']=="6789")){


header("location:login.php");

}


include("../inc/veritabani.php");

?>






<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        
        <title><?php $sayfa ?> Admin</title>
        
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Yönetim Paneli</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        
                      
                        <li><a class="dropdown-item" href="logout.php"><p align="right">Çıkış</p></a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link <?php echo $sayfa=="Dashboard"?"active":""?>" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Site Yönetim Paneli
                            </a>
                            
                       
                            <div class="sb-sidenav-menu-heading"> Sayfalar </div>
                            
                            
                            <a class="nav-link collapsed "   href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Yönetilecek Sayfalar

                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            
                            
                            
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link <?php echo $sayfa=="Anasayfa"?"active":""?>" href="anasayfa.php">Anasayfa</a>
                                    <a class="nav-link <?php echo $sayfa=="Referanslar"?"active":""?>" href="referans.php">Referanslar</a>
                                     
                                </nav>
                            </div>
                            
                            
                            
                            
                            
                            

                            
                            
                            
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link <?php echo $sayfa=="Servis"?"active":""?>" href="servis.php">Servis</a>
                                    <a class="nav-link" href="servisler.php">Servislerimiz</a>
                                     
                                </nav>
                            </div>                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link <?php echo $sayfa=="Portfolyo"?"active":""?>" href="portfolyo.php">Portfolyo</a>
                                    <a class="nav-link" href="portfolyolar.php">Portfolyolar</a>
                                     
                                </nav>
                            </div>                            
                                      
                                      
                                      
                                      
 
                            
                            
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link <?php echo $sayfa=="Hakkımızda"?"active":""?>" href="hakkimizda.php">Hakkımızda</a>
                                    <a class="nav-link" href="takim.php">Takım</a>
                                    <a class="nav-link" href="tarihce.php">Tarihçe</a>
                                    
                                    
                                     
                                </nav>
                            </div>                                                           
                            
                            
                            
                            
                        
                        
                        
                        
                        
                        
                        
                        
                            
                           
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Kullanıcı:</div>
                        <?php echo $_SESSION["kadi"]?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
