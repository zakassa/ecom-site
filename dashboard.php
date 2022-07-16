<?php
    include 'head.php';
    include 'databaseconnexion.php';
    
    $rowcountc= $database->prepare("SELECT * FROM product");
    $rowcountc->execute();

    $rowcountc= $database->prepare("SELECT * FROM product");
    $rowcountc->execute();
    $rowcountc= $database->prepare("SELECT * FROM product");
    $rowcountc->execute();
?>

 <div class="sidebar">
        <div class="sidebar-brand">
            <h5><span><i class="fa fa-tachometer"></i></span><span>Panneaux de configuration</span></h5>
        </div>
 
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="admin.php" class="active"><span><i class="fa fa-home"></i></span><span>Acceuil</span></a>
                </li>
                <li>
                    <a href="adminproduct.php"><span><i class="fa-solid fa-box-archive"></i></span><span>Produit</span></a>
                </li>
                <li>
                    <a href="classes.php"><span><i class="fa-solid fa-gears"></i></span><span>Sites</span></a>
                </li>
                <li>
                    <a ><span><i class="fa fa-user-circle"></i></span><span>Rapports</span></a>
                </li>
            </ul>
        </div>
    </div>
    
        <center>
    <section class="dashboardmain">


    <div class="cards">
                <div class="card-single">
                    <div>
                    <H1><?php echo $rowcountc->rowcount(); ?></H1>
                        
                        <span>Produit</span>
                    </div>
                    <div>
                         <i class="fa-solid fa-box-archive"></i>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                    <H1>5</H1>
                        
                        
                        <span>admin</span>
                    </div>
                    <div>
                         <i class="fa-solid fa-user-gear"></i>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                    <H1>5</H1>
                        
                        <span>utilisateurs</span>
                    </div>
                    <div>
                         <i class="fa-solid fa-users"></i>
                    </div>
                </div>
                
    </div>
    <img style="width:600px; height: 300px;" src="img/1.png"  alt="...">
    <center>
