<?php 
    include 'head.php';
    include 'databaseconnexion.php';
?>
<?php 

$id= $_GET['id'];


   $getproduct= $database->prepare("SELECT * FROM categories  WHERE id= :id");
   $id= $_GET['id'];
   $getproduct->bindParam("id", $id);
   $getproduct->execute();


   foreach ($getproduct as $result) {
    echo'
    <center>
    <main>
    <form  method="POST" enctype="multipart/form-data">
    <h2>modifier le produit</h2>
    <label><i class="fa-solid fa-comment-arrow-up-right"></i></label>
    <input type="text"  name="id" value="'.$result["id"].'" ><br><br>
    <input type="text" name="proname" value="'.$result["name"].'"><br><br>
    <input type="text" style="disabled;" name="price" value="'.$result["href"].'"><br><br>
    <button type="submit" name="update" > Modifier le produit</button><br>

    </form>
    <a href=""><span>Voir tous les produits</span></a>
    </main>
    <center>
    
    ';
       }
       

       if(isset($_POST['update'])){
        $proname = $_POST["proname"];
        $position = "catégories.php?name=".$proname;

        $UPDATE = $database->prepare("UPDATE  product  SET name=:name , href=:href  WHERE id=:id ");
        $UPDATE->bindParam("id", $id);
        $UPDATE->bindParam("name", $proname);
        $UPDATE->bindParam("href", $position);

        $UPDATE->execute();
       


       if( $UPDATE->execute()){
        echo' <script>
        swal( {
            title: "est bien!",
            text: "La catégories a été bien modifier",
            icon: "success",
            button: "fe",
            timer: "6000",


        
    } )
    </script>';
        header("Location: addcatégories.php" );
    }else{
        echo'<script>
        swal( {
            title: "Oups!",
            text: "La catégorie n ait été pas modifierer, réessayer svp. ",
            icon: "error",
            button: "fe",
            timer: "6000",
        
    } )
    </script>';
    }
}
?>
</body>


<?php include 'footer.php';?>

