<?php 




include ("header.php");

if (isset($_POST["submit"])){
    if(isset($_SESSION["user"])){
        

    if ($_POST["haber"]==""){
    echo "Başlık Giriniz";
    }
    else  if($_POST["habertext"]==""){
    echo "İçerik Giriniz";
    }
    else{
        $haber = mysqli_real_escape_string($link,$_POST["haber"]);
        $habertext = mysqli_real_escape_string($link,$_POST["habertext"]);
        $sql = "INSERT INTO haber (heading,text) 
        VALUES ('".$haber."',  '".$habertext."')";
        if(mysqli_query($link,$sql)){
            header("Location:haberler.php");
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
<h2>HABER BAŞLIĞI</h2><br>
<input type="text"class = "heading" name = "haber"><br>
<h2>HABER İÇERİĞİ</h2><br>
<textarea class="text" name = "habertext"></textarea><br>
<button type="submit" class="btn btn-success" id="yayınla" name="submit">Yayınla</button>
</form>
</div>  




