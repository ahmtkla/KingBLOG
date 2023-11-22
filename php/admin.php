
<?php

include ("header.php")

?>

   


<div class="container" id = "adminpage">
       <form method="post" class="form-inline my-2 my-lg-0">
      <?php if(!isset($_SESSION["user"])){ ?>
      <input type="password" id="inputgiris" class="form-control mr-sm-2"  name ="sifre">
      <button type="submit" class="btn btn-info" id = "giris" name = "giris">Giriş</button>
      <?php } if (isset($_SESSION["user"])){?>
      <button type="submit" class="btn btn-info" id = "giris" name = "cikis">Çıkış</button>
      <?php } ?>
     
      </div>





        