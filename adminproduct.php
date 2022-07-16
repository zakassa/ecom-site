<?php
    include 'head.php';
    include 'databaseconnexion.php';
    include 'adminnavbar.php';
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
                    <a href="admin.php" ><span><i class="fa fa-home"></i></span><span>Acceuil</span></a>
                </li>
                <li>
                    <a href="adminproduct.php" class="active"><span><i class="fa-solid fa-box-archive"></i></span><span>Produit</span></a>
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
                    
                    <span>Nombre de Produit</span>
                </div>
                <div>
                     <i class="fa-solid fa-box-archive"></i>
                </div>

            </div>

            <div class="card-single">
                <div>
                <H1>5</H1>
                    
                    
                    <span>Nombres d'achats</span>
                </div>
                <div>
                <i class="fa-solid fa-bullhorn"></i>
                </div>
            </div>

            <div class="card-single">
                <div>
                <H1>5</H1>
                    
                    <span>Total du vente</span>
                </div>
                <div>
                <i class="fa-solid fa-sack-dollar"></i>
                </div>
            </div>
</div>

            
                <div>
                    <a href="product.php" class="btn btn-primary">Voir Tous les produit</a>
                    <a href="insertpanel.php" class="btn btn-primary">Ajouter un produit</a>
                    <a href="product.php" class="btn btn-primary">Modifier un produit</a>
                    <a href="product.php" class="btn btn-primary">Supprimer un produit</a><br><br>
                    <a href="addcatégories.php" class="btn btn-primary">paramétre de catégories</a><br><br>
                </div>
               
            
            
            