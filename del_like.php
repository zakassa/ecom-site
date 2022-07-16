<?php 
    include 'head.php';
    include 'databaseconnexion.php';

     $id= $_GET['id'];
    $removeItems=$database->prepare('DELETE FROM addlike WHERE id= :id');
    $removeItems->bindParam("id", $id);
    $removeItems->execute();
    if( $removeItems->execute()){
        echo' <script>
        swal( {
            title: "est bien!",
            text: "Le produit a été bien supprimer",
            icon: "success",
            button: "fe",
            timer: "6000",


        
    } )
    </script>';
    header("Location: like.php" );
    }else{
        echo'<script>
        swal( {
            title: "Oups!",
            text: "Le produit n est été pas supprimer, réuser ",
            icon: "success",
            button: "fe",
            timer: "6000",
        
    } )
    </script>';
    }



?>

</body>