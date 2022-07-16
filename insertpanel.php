<?php 
    include 'head.php';
    include 'insert.php';
?>

<center>
    <main>
        <form  method="POST" enctype="multipart/form-data">
        <h2>Ajouter un produit</h2>
        <img src="img/ecommerce.png"/><br>
        <input type="text" name="proname" placeholder="Nom de produit" required><br><br>
        <input type="text" name="price" placeholder="Prix de produit" required><br><br>
        <input type="text" class="input-Des" name="description" placeholder="Description de produit" required><br><br>
        <input type="file" class="input-file" name="file" id="file" required><br>
        <label for="file" class="AjImage" > Ajouter une photo </label>
        <button type="submit" name="upload" > Ajouter le produit</button><br>
        </form>
        <a href='product.php'><span>Voir tous les produits</span></a>
    </main>
    
    

</center>



<?php include 'footer.php';?>


