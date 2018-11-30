<?php 

    $conexion=mysqli_connect('localhost','root','1234','startowl');
    $sql="SELECT id_catego,des_categoria from categorias";
    $result=mysqli_query($conexion,$sql);

 ?>