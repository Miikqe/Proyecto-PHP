<php?
  if(isset($_POST["nom"]))
  {
    $nom=$_POST["nom"];
    echo "Mucho gusto".$nom."!!!";
    setcookie("nom",$nom,time()+60);
  }else{
    if(!isset($_COOKIE["nom"]))
    {
      echo '<form action="cookie.php" method="post">
      Nombre:<input type="text" name="nom">
      <input type="submit">';
    }else{
      echo "Ya te conozco".$_COOKIE["nom"]."!!!";
    }
  }
?>
