<?php 
    include 'head.php';

?>

<center>
    <main>
        <form  method="POST" enctype="multipart/form-data">
        <h2>Ajouter un produit</h2>
        <img src="img/ecommerce.png"/><br>
        <input type="text" name="titre" placeholder="titre de slide" required><br><br>
        <input type="text" class="input-Des" name="description" placeholder="Description" required><br><br>
        <input type="file" class="input-file" name="file" id="file" required><br>
        <label for="file" class="AjImage" > Ajouter une photo </label>
        <button type="submit" name="upload" > Ajouter le slide</button><br>
        </form>
    </main>
    
    

</center>
<?php
 include 'databaseconnexion.php';
# button variables--


        
if(isset($_POST["upload"])){

    $titre = $_POST["titre"];
    $description = $_POST["description"];    
   
    $fileName= $_FILES["file"]["name"];

    $file = $_FILES["file"]["tmp_name"];
    $position = "images/".$fileName;
    move_uploaded_file($file,"images/".$fileName);

    $uploadFile= $database->prepare("INSERT INTO slide(titre, description, position) VALUES(:titre,:description,:position)");
    $uploadFile->bindParam("titre", $titre); 
    $uploadFile->bindParam("description", $description);    
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
            icon: "error",
            button: "fe",
            timer: "6000",
            className: "popup",
        
    } )
    </script>';
    
}
}
        
    ?>



<?php include 'footer.php';?>


