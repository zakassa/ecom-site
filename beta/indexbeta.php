<?php include 'head.php';?>  

<center>
    <main>
    <form action="insert.php" method="$_POST" enctype="multipart/form-data">
        <h2>mon e-com site</h2>
        <img src="img/ecommerce.png"/><br>
        <input type="text" name="name" placeholder="Nom du produit"><br>
        <input type="text" name="price" placeholder="Prix de produit"><br>
        <input type="text" class="input-Des" name="description" placeholder="Description de produit"><br>
        <button type="submit" name="add"> Ajouter le produit</button>
        <a href="products.php">Voir tous les produits</a>
        </form>
    </main>
    

</center>



<?php include 'footer.php';?>


