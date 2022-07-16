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

    foreach ($getproduct as $result) {
        echo'
        <center >
        <main>
        
        <form  method="POST" enctype="multipart/form-data">
        <img  src=" '.$result["position"].'" class="card-img-top" alt="...">
        <input style="display:none"; type="text" name="id" value="'.$result["id"].'"><br><br>
        <input style="display:none"; type="text" name="img" value="'.$result["position"].'"><br><br>
        <input style="display:none"; type="text" name="proname" value="'.$result["proname"].'"><br><br>
        <input style="display:none"; type="text" name="price" value="'.$result["price"].'"><br><br>
        <H2> Voulez vous ajoutez se produit au card</H2>
        <button type="submit" name="update" > Ajouter le produit</button><br>
        </form>
        </main>
        <center>
        
        ';



}
    if(isset($_POST['update'])){
        $proid = $_POST["id"];
        $proname = $_POST["proname"];
        $price = $_POST["price"];
        $img = $_POST["img"];
    

        $uploadFile= $database->prepare("INSERT INTO addcard(proid,name, price, img) VALUES(:proid,:name,:price,:img)");
        $uploadFile->bindParam("proid", $proid);
        $uploadFile->bindParam("name", $proname);
        $uploadFile->bindParam("price", $price); 
        $uploadFile->bindParam("img", $img);

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
    header("Location: index.php" );
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
}
      
  
 ?>
