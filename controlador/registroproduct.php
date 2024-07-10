<<?php
if ($_POST) {
    
    $descripcion = $_POST['descrip'];
    $precio = $_POST['prec'];
    $categoria = $_POST['cate'];
 


    require_once("../modelo/regiproduct.php");
    header("location:../vista/registroproducto2.php");
    
}
?>
  