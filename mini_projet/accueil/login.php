<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>LOGIN</title>
    <link rel="stylesheet" href="./login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="./index.html"><img class="logo" src="./img/logo4.png" alt=""></a>
        <nav>
            <ul class="nav_links">
              <li><a href="#">Presentation</a></li>
              <li><a href="#">Equipe de recherche</a></li>
              <li><a href="#">Publication et events</a></li>
              <li><a href="#">Projet</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    <span>
    <div class="card">
        <span><img src="./img/icons8-male-user-96.png" alt=""></span>
       <h1>LOGIN</h1>
       <form action="login.php" method="GET" class="login">
        <div class="username"><input type="text" placeholder="Username" name="id"> <img src="./img/icons8-user-50.png" alt=""></div>
        <div class="password"><input type="password" placeholder="Password" name="password"> <img src="./img/icons8-password-50.png" alt=""></div>
        <input type="submit" value="LOGIN" name="envoyer">
       </form>
       <?php 

$id = $_GET["id"];
$pass = $_GET["password"];
if(isset($_GET["envoyer"]))
{if(($pass == "admin123") && ($id == "admin")){
   header("Location: ../admin/acceuil.php");}
else{
  echo "<p style=\"color =\"red\"\";  >id ou mots de passe incorect veuiller réesayer</p>";
}
}
?>
    </div></span>
    <footer>
        <p>LABORATOIRE DE RECHERCHE POUR LE DEVELOPPEMENT DES SYSTEMES INFORMATISES<br>
            Université Saad Dahlab - Blida 1  |  Faculté des Sciences  
            http://www.univ-blida.dz Copyright ©2023 All rights reserved to LRDSI
        </p>
    </footer>
</body>
</html>

