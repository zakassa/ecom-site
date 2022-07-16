<?php 
include 'head.php';
include 'databaseconnexion.php';
  $rowcountc= $database->prepare("SELECT * FROM addcard");
  $rowcountc->execute();
  $rowcountl= $database->prepare("SELECT * FROM addlike");
  $rowcountl->execute();
  

?>
<style>
    
    </style>
<nav class="navbar navbar-expand-lg navbar-light bg-light"style="padding:0px;">
  <div style=" background-size: cover;padding-right:0px; margin-left:19%; background-color:#181818" class="container-fluid">
    <a  style=" color:#ffffff;" class="navbar-brand" href="#">Navbar w/ text</a>
    <button style=" color:#ffffff;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span style=" color:#ffffff;"class="navbar-toggler-icon"></span>
    </button>
    <div style=" color:#ffffff;"class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a style=" color:#ffffff;"class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a style=" color:#ffffff;"class="nav-link" href="#">Features</a>
        </li>

      </ul>
    </div>
  </div>
</nav>