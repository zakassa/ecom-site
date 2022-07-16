<?php
 include 'databaseconnexion.php'; 
 include 'head.php';

        
        if(isset($_POST["send"])){
           
            $fileType = $_POST["file"]["type"];
            $fileName= $_FILES["file"]["name"];;
            $fileType = $_FILES["file"]["type"];
            $file = $_FILES["file"]["tmp_name"];

            move_uploaded_file($file,"images/".$fileName);
            $position = images/".$fileName;
            $uploadFile= $database->prepare("INSERT INTO file(name, type, position) VALUES(:name,:type,:position)");
            $uploadFile->bindParam("name", $fileName);
            $uploadFile->bindParam("type", $fileType);
            $uploadFile->bindParam("position", $position);

}
 


 ?>

  <form  method="POST" enctype="multipart/form-data">
  <input type="file"  name="file"required><br>
  <button type="submit" name="upload">upload</button>
  </form>







  <?php
 include 'footer.php'; 
 ?>