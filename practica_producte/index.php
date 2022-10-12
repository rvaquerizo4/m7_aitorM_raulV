<?php
    $db_host= "localhost";
    $db_nombre = "products";
    $db_usuario = "root";
    $db_passwd = "";

    $connexio = mysqli_connect($db_host, $db_usuario, $db_passwd, $db_nombre);

    $consulta = "SELECT * FROM PRODUCTS";

    $product = mysqli_query($connexio ,$consulta);

    //Insertar product
    $Fname =  $_REQUEST['Fname'];
    $Fdescription = $_REQUEST['Fdescription'];
    $Fprice =  $_REQUEST['Fprice'];

    $sql = "INSERT INTO products  VALUES ('$Fname','$lFdescription','$Fprice')";
?>