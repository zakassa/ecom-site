<?php
 include 'databaseconnexion.php';
    
    
# button variables--

       
               if(isset($_POST["send"])){
                   $NAME = $_POST['name'];
                   $PRICE = $_POST['price'];
                   $DESCRIPTION = $_POST['description'];
                   $PICTURENAME= $_FILES['picture']['name'];
                   $PICTURE= $_FILES['picture']['tmp_name'];

                   move_uploaded_file($PICTURE,"images/".$PICTURENAME);
                   $uploadFile= $database->prepare("INSERT INTO produit(name, price, description,picture) VALUES('$NAME','$PRICE', '$DESCRIPTION', '$position')");
               
                   $position = "images/".$PICTURENAME;
                   var_dump( $uploadFile->errorInfo());
                   if( $uploadFile->execute()){
                       echo'succes';
                   }else{
                       echo'eroor';
                   }
       
               }
        
               
           ?>
      