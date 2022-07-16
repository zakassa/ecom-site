
<section>
<center>
    <h1>Les catégories</h1>
    <center>

<?php 
    include 'head.php';
    include 'databaseconnexion.php';



$selectdata = $database->prepare("SELECT * FROM categories ");
$selectdata->execute();


foreach ($selectdata as $result) {
    
    echo'
    
    
    <div class="cat">
    <center>
    <div class="categories">
          <a style=" text-decoration:none;" href="'.$result["href"].'">'.$result["name"].'</a>
          </div> 
          
          <center>
          </div>
          
          ';
                 }
                   ?>
                   </section>
  <style>
    .cat{
        align-items: center;
        text-align: center;   
        float: left;
    }
    .categories a{
        
        

        background-color: white;
        color:#000000;
        border: none;
        width: 4.25em;
        box-shadow: 0 5px 25px rgba(1 1 1 / 15%);
        border-radius: 15px 10px;
        padding: 1.6vh;
        margin-top:20px;
        margin-left:10px;

     }
      .categories a:hover{
         transform: scale(1.01);
         transition: 0.5s ease;
         background-color: black;
         color: white;
         padding: 1.6vh;
         border: none;
         font-size: 1.1em;

         border-radius: 1.1vh;
         cursor: pointer;
         margin-bottom: 2vh;
      
      }
                   </style>