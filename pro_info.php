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
   
   
    <form  method="POST" enctype="multipart/form-data">
    <div class="info">
        <div class="main-images">
            <img src=" '.$result["position"].'" class="card-img-top" alt="...">
        </div>
        <div class="product-info">
            <h2>'.$result["proname"].' </h2>
        </div>
    <div>
  

   
    </form>
    
    ';
       }
       
/* <input type="text" name="id" value="'.$result["id"].'" ><br><br>
<input type="text" name="proname" value="'.$result["proname"].'"><br><br>
<input type="text" name="price" value="'.$result["price"].'"><br><br>
<input type="text" class="input-Des" name="description" value="'.$result["description"].'"><br><br>
<input type="file" class="input-file" name="file" id="file" ><br>
<label for="file" class="AjImage" value="'.$result["position"].'"> Modifier la photo </label>
<button type="submit" name="update" > Modifier le produit</button><br>
*/

    ?>

<style>
    .info{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 2rem;
    }
    .main-images{
    box-shadow: 1px 1px 10px silver;
    margin: 5.56vh;
    margin-top:10vh;
    margin-left:20vh;
    margin-bottom:15vh;
    padding: 4.56vh;
  
    
}

.main-images img{
    width: 100%;
    height: 100%;
}
.product-info{

    margin: 40%;
    padding: 4.56vh;
    
}
button{
    border: none;
    padding: 1.6vh;
    font-size: 1.1em;
    width: 40%;
    height: 40%;
    border-radius: 1.1vh;
    background-color: rgb(97, 216, 97);
    color: aliceblue;
    cursor: pointer;
    margin-bottom: 2vh;
}
.AjImage{
    padding: 1.6vh;
    margin-bottom: 1.64vh;
    cursor: pointer;
    font-weight: 400;
    font-size: 0.9em;
    background-color: silver;
}
a{
    text-decoration: none;
    font-size: 1.2em;
}


</style>


<?php include 'footer.php';?>

