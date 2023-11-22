<?php
include ("header.php");

 if (isset($_POST["submit"])){
    if(isset($_SESSION["user"])){
        

    if ($_POST["heading"]==""){
    echo "Başlık Giriniz";
    }
    else  if($_POST["text"]==""){
    echo "İçerik Giriniz";
    }
    else{
        $heading = mysqli_real_escape_string($link,$_POST["heading"]);
        $text = mysqli_real_escape_string($link,$_POST["text"]);
        $sql = "INSERT INTO posts (heading,text) 
        VALUES ('".$heading."',  '".$text."')";
        if(mysqli_query($link,$sql)){
            header("Location:index.php");
    }
    }
    }
    else{
        echo "GİRİŞ YAPIN";
    }
}


if (isset($_POST["1"])){
    $sifre = mysqli_real_escape_string($link,$_POST["sifre"]);
    $sql = "SELECT password FROM admin";
    if($result = mysqli_query($link,$sql)){
      $row = mysqli_fetch_assoc($result);
      if($row["password"] == $sifre){
        echo "Şifre Doğru";
      }
       
      
      else{
        echo "Şifre Yanlış";
      }
        
      
    }
  }


?>



<div class="container">
<form method ="post">
<h2>BAŞLIK</h2><br>
<input type="text"  class = "heading" name = "heading"><br>
<h2>İÇERİK</h2><br>
<textarea class="text" name = "text"></textarea><br>
<button type="submit" class="btn btn-success" id="yayınla" name="submit">Yayınla</button>
</form>
</div>  
