<form method="POST">
    username: <input type="Text" name="username" required/><br>
    password: <input type="password" name="password" required/><br>
    <button name="login" type="submit">Login</button>
</form>
<?php 
$username = "zakariae";
$password = "123";
if(isset($_POST['login'])){
 $getUserName = $_POST['username'];
 $getPassword = $_POST['password'];
 if( $username === $getUserName && $password === $getPassword){
     $_SESSION['USER'] = $getUserName;
     $_SESSION['PASSWORD'] = $getPassword;
     $_SESSION['LOGIN'] = true;
     echo"<script>location.replace('indexbeta.php');</script>";

 }else{
     echo"mot de passe ou user name n'est pas valide";
 }

}


?>