<?php 
    include 'head.php'; 
    include 'databaseconnexion.php';
    include 'usersnavbar.php';


    ?>


 
<center>
    <h1>Votre produit préférer </h1>
    <center>
<?php
        $selectdata = $database->prepare("SELECT * FROM addlike");
        $selectdata->execute();
        echo'
        <table class="table-responsive">
        <thead>
        <tr>
            <td style="font-size:1.5em; padding-right: 200px;" ><B>Photo</B></td>
            <td style="font-size:1.5em; padding-right: 200px;" ><B>Nom du produit</B></td>
            <td style="font-size:1.5em; padding-right: 200px;" ><B>Prix</B></td>

            </tr>
    </thead>';

    foreach ($selectdata as $result) {
        
        echo'
        <center>
        <section>
        <form  method="POST" enctype="multipart/form-data">
        <div class="card" style="width: 18rem;"">
            <tbody>
                
                <tr>
                <th scope="row">  <img style="width:100px; height: 50px;" src=" '.$result["img"].'" class="card-img-top" alt="..."></th>
                <td><h5 class="card-title"style="text-aligne:centre;">'.$result["name"].'</h5></td>
                <td> <h5 class="card-title" style="text-aligne:centre;">'.$result["price"].'DH</h5></td>
                <td> <a href="pro_info.php? id='.$result["proid"].'" style="text-aligne:centre;margin:2px;"class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                <td> <a href="del_like.php? id='.$result["id"].'" style="text-aligne:centre;margin:2px;"class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></i></a></td>
                </tr>
                
            </tbody>
            
        
        
        </section>
        </form>
        <center>
        ';
    }
    echo'</table>';

    ?>