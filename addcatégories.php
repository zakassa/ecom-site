<?php 
    include 'head.php';
    include 'databaseconnexion.php'

    
?>
<center>
    <main>
        <form  method="POST" enctype="multipart/form-data">
        <h2>Ajouter une catégories </h2>
        <img src="img/ecommerce.png"/><br>
        <input type="text" name="name" placeholder="Nom de catégorie" required><br><br>
        <button type="submit" name="upload" > Ajouter la catégories</button><br><br><br>
        </form>
        <h2>Les catégorie existant</h2>
        <div class="card-body" >
            <div class="table-responsive">
                <table  width="100%">
                    <thead>
                        <tr>
                            <td><B>id</B></td>
                            <td><B>Catégories</B></td>
                            
 
                            </tr>
                    </thead>
                    <?php 
                   $selectdata = $database->prepare("SELECT * FROM categories");
                   $selectdata->execute();
                
                    foreach ($selectdata as $result) {
                        echo'
                        <tbody >
                            <tr>
                                 <th scope="row" style="padding: 10px;">'.$result["id"].'</th>
                                <td>'.$result["name"].'</td>
                                <td><a href="del_cat.php? id='.$result["id"].'" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
                                <td> <a href="up_cat.php? id='.$result["id"].'" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a></td>
                            </tr>
                        </tbody>
                        ';

                     } 
                    ?>

    </main>
</center>

<?php
 include 'databaseconnexion.php';
# button variables--


        
if(isset($_POST["upload"])){

    $proname = $_POST["name"];
    $position = "catégories.php?name=".$proname;
        
    
    $uploadFile= $database->prepare("INSERT INTO categories(name, href) VALUES(:name,:position)");
    $uploadFile->bindParam("name", $proname);
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
    echo"<script>window.location.href='addcatégories.php';</script>";

    

        
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

    
