<?php
 include 'databaseconnexion.php'; 


        
        if(isset($_POST["upload"])){
           
            $fileType = $_FILES["file"]["type"];
            $fileName= $_FILES["file"]["name"];
            $fileType = $_FILES["file"]["type"];
            $file = $_FILES["file"]["tmp_name"];
            $position = "images/".$fileName;
            move_uploaded_file($file,"images/".$fileName);

            $uploadFile= $database->prepare("INSERT INTO file(name, type, position) VALUES(:name,:type,:position)");
            $uploadFile->bindParam("name", $fileName);
            $uploadFile->bindParam("type", $fileType);
            $uploadFile->bindParam("position", $position);
            if($uploadFile->execute()){
                
                echo 'the file is uploaded';
                
            }else{
                echo'ereur';
            }

}
 


 ?>

  <form  method="POST" enctype="multipart/form-data">
  <input type="file"  name="file" required><br>
  <button type="submit" name="upload">upload</button>
  </form>







