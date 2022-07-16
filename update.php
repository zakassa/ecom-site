<?php 
    include 'head.php';
    include 'databaseconnexion.php';
?>
<?php 

$id= $_GET['id'];


   $getproduct= $database->prepare("SELECT * FROM product  WHERE id= :id");
   $id= $_GET['id'];
   $getproduct->bindParam("id", $id);
   $getproduct->execute();
echo $id;

   foreach ($getproduct as $result) {
    echo'
    <center>
    <main>
    <form  method="POST" enctype="multipart/form-data">
    <h2>modifier le produit</h2>
    <label><i class="fa-solid fa-comment-arrow-up-right"></i></label>
    <input type="text" name="id" value="'.$result["id"].'" ><br><br>
    <input type="text" name="proname" value="'.$result["proname"].'"><br><br>
    <input type="text" name="price" value="'.$result["price"].'"><br><br>
    <input type="text" class="input-Des" name="description" value="'.$result["description"].'"><br><br>
    <input type="file" class="input-file" name="file" id="file" ><br>
    <label for="file" class="AjImage" value="'.$result["position"].'"> Modifier la photo </label>
    <button type="submit" name="update" > Modifier le produit</button><br>

    </form>
    <a href=""><span>Voir tous les produits</span></a>
    </main>
    <center>
    
    ';
       }
       

    ?>



<?php include 'footer.php';?>

