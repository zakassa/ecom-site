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
    <center>
    <section>

    <form  method="POST" enctype="multipart/form-data">
    <div class="card" style="width: 18rem;"">
    <img src=" '.$result["position"].'" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">'.$result["proname"].'</h5>
            <p class="card-text">'.$result["description"].'</p>
            <h5 class="card-title">'.$result["price"].'DH</h5>



        </div>
    </div>
    <center>
    </section>
    </form>
    ';   }
 ?>
