<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="GestionPinter.php" method="get">
        <label for="titre">titre</label>
        <input type="text" name="titre">
        <label for="type">type</label>
        <input type="text" name="type">
        <label for="responsable">responsable</label>
        <input type="text" name="responsable">
        <label for="mission">mission</label>
        <input type="text" name="mission">
        <label for="date">date</label>
        <input type="date" name="date">
        <input type="submit" value="ajouter" name="ajouter">
    </form>
</body>
</html>
<?php
  $host="localhost";
  $user="root";
  $pass="";
  $db_name = "LRDSI";
  $con = mysqli_connect($host, $user, $pass, $db_name);
  $ti = $_GET["titre"];
  $ty = $_GET["type"];
  $res = $_GET["responsable"];
  $mis = $_GET["mission"];
  $da = $_GET["date"];
  if(isset($_GET["ajouter"])){
    $re = "INSERT INTO ProjetS (Titre, Type, Responsable, mission, date) values($ti, $ty, $res; $mis, $da, $res)";
    mysqli_query($con, $re);
  }/*elseif(isset($_GET["supprimer"])){
    $re = "DELETE FROM ProjetS where Titre = $ti";
    mysqli_query($db_name, $re);
  }elseif(isset($_GET["update"])){
    $re = "UPDATE ProjetS SET ";
  }*/
?>