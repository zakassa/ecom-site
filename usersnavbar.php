<?php 
include 'head.php';
include 'databaseconnexion.php';
  $rowcountc= $database->prepare("SELECT * FROM addcard");
  $rowcountc->execute();
  $rowcountl= $database->prepare("SELECT * FROM addlike");
  $rowcountl->execute();
  

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light"style="padding:0px;">
  <div style=" background-size: cover;padding:0px; margin:0%; background-color:#181818;" class="container-fluid">
    <a  style=" padding-left:10px; color:#ffffff;" class="navbar-brand" href="#">Navbar w/ text</a>
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
        <li class="nav-item">
          <a style="color: white;; position:relative; right:calc(100% - 800px);" class="nav-link" href="card.php"><i class="fa-solid fa-cart-shopping"></i><span style="color: white; font-size: .95rem; padding-top:1px; padding-left:2px;">(<?php echo $rowcountc->rowcount(); ?>)</span></a>
        </li>
        <li class="nav-item">
          <a style="color: white; position:relative; right:calc(100% - 800px);" class="nav-link" href="like.php"><i class="fa-solid fa-heart"></i> <span style="color: white; font-size: .95rem; padding-left:0px;">(<?php echo $rowcountl->rowcount(); ?>)</span></a>
        </li>
      </ul>
    </div>
  </div>
</nav>