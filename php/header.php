<?php 
session_start();


$link = mysqli_connect("localhost","root","","blog");
$link -> set_charset("utf8");


if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
 
}



  if(isset($_POST["giris"])){
    $sifre = mysqli_real_escape_string($link,$_POST["sifre"]);
    $sql = "SELECT password FROM admin";
    if($result = mysqli_query($link,$sql)){ 
      $row = mysqli_fetch_assoc($result);
      if($row["password"] == $sifre){
          $_SESSION["user"]="admin";
          header("Location: index.php");
      }
       
      
      else{ 
        echo "HATALI ŞİFRE";
      }
    }
  }

  if (isset($_POST["cikis"])){
    session_unset();
  }
  



?>


<!DOCTYPE html>

<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" type ="text/css" href="style/sitil.css"/>
<link rel="icon" href="style/king.png" type="image/x-icon" />
    <title>KingBlog</title>
</head>


<nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="admin.php"><img src="style/king.png" style="width:60px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Ana Sayfa <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="haberler.php">Haberler <span class="sr-only">(current)</span></a> 
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="profilim.php">Hakkımda</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="haber.php">Haber Ekleme</a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="olustur.php">Bloğa Ekleme</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link " href="admin.php" tabindex="-1" aria-disabled="true">Admin Girişi</a>
      </li>
      
      
      </form>
    </ul>
  </div>
</nav>
  