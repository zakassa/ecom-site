<?php 
    include 'head.php';
    include 'databaseconnexion.php';

     $id= $_GET['id'];
    $removeItems=$database->prepare('DELETE FROM addcard WHERE id= :id');
    $removeItems->bindParam("id", $id);
    $removeItems->execute();
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
    header("Location: card.php" );
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
