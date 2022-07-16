
<?php
 include 'databaseconnexion.php';
# button variables--


        
if(isset($_POST["upload"])){

    $proname = $_POST["proname"];
    $price = $_POST["price"];
    $description = $_POST["description"];    
   
    $fileName= $_FILES["file"]["name"];

    $file = $_FILES["file"]["tmp_name"];
    $position = "images/".$fileName;
    move_uploaded_file($file,"images/".$fileName);

    $uploadFile= $database->prepare("INSERT INTO product(proname, price, description, name ,position) VALUES(:proname,:price,:description, :name,:position)");
    $uploadFile->bindParam("proname", $proname);
    $uploadFile->bindParam("price", $price); 
    $uploadFile->bindParam("description", $description);    
    $uploadFile->bindParam("name", $fileName);
    $uploadFile->bindParam("position", $position);
    if($uploadFile->execute()){
        echo' <script>
        swal( {
            title: "est bien!",
            text: "Le produit a été bien ajouter",
            icon: "success",
            button: "fe",
            timer: "6000",


        
    } )
    </script>';

        
    }else{
        echo'<script>
        swal( {
            title: "Oups!",
            text: "Le produit n ait été pas ajouter, réessayer svp. ",
            icon: "success",
            button: "fe",
            timer: "6000",
            className: "popup",
        
    } )
    </script>';
    
}
}
        
    ?>



