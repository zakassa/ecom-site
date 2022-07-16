
<?php 
include 'head.php';
include 'databaseconnexion.php';
?>
<style>

    section{
        width: 80%;
    }
        .card{
        background-color: white;
        display: flex;
         text-align: center ;
        width: 16.25em;
        box-shadow: 0 5px 25px rgba(1 1 1 / 15%);
        border-radius: 15px 10px;
        padding: 15px;
        margin: 20px;
        float: left;


     
     }
     .card:hover{
         transform: scale(1.1);
         transition: 0.5s ease;
      
      }
      .card img{
        margin: 0 0 0 30%;
         width :40%;
         height: 100px;

         
    }
    </style>
<center>
    <h1>Tous les produit disponible</h1>
    <center>
<?php
$selectdata = $database->prepare("SELECT * FROM product");
$selectdata->execute();


foreach ($selectdata as $result) {
    
    echo'
    <center>
    <section>


    <div class="card" style="width: 18rem;"">
    <img src=" '.$result["position"].'" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">'.$result["proname"].'</h5>
            <p class="card-text">'.$result["description"].'</p>
            <a href="delete.php? id='.$result["id"].'" class="btn btn-danger">Supprimer</a>
            <a href="update.php? id='.$result["id"].'" class="btn btn-primary">Modifier</a>


        </div>
    </div>
    <center>
    </section>
    ';
}


?>




