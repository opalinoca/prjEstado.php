<?php
   header("Location: index.php");
   
   $categoria = $_POST['slcCategory'];

   setcookie('codCategoria', $categoria);
?>