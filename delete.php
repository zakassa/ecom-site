<?php 
    include 'head.php';
    include 'databaseconnexion.php';
    
     $id= $_GET['id'];
    $removeItems=$database->prepare('DELETE FROM product WHERE id= :id');
    $removeItems->bindParam("id", $id);
    $removeItems->execute();
    $removeItemsc=$database->prepare('DELETE FROM addcard WHERE proid= :id');
    $removeItemsc->bindParam("id", $id);
    $removeItemsc->execute();
    $removeItemsl=$database->prepare('DELETE FROM addlike WHERE proid= :id');
    $removeItemsl->bindParam("id", $id);
    $removeItemsl->execute();





    if( $removeItems->execute()){
        echo' <script>
        swal( {
            title: "est bien!",
            text: "Le produit a été bien ajouter",
            icon: "success",
            button: "fe",
            timer: "6000",


        
    } )
    </script>';
        header("Location: product.php" );
    }else{
        echo'<script>
        swal( {
            title: "Oups!",
            text: "Le produit n ait été pas ajouter, réessayer svp. ",
            icon: "success",
            button: "fe",
            timer: "6000",
        
    } )
    </script>';
    }


?>

</body>
