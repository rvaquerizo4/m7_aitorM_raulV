<?php
  $db_host= "localhost";
  $db_nombre = "products";
  $db_usuario = "root";
  $db_passwd = "";

  $connexio = mysqli_connect($db_host, $db_usuario, $db_passwd, $db_nombre);


  if (isset($_GET['add_product'])){
    $Name = $_GET['Name'];
    $Description = $_GET['Description'];
    $price = $_GET['price'];
  }
    $sql = "INSERT INTO `product`(`NumId`, `Name`, `Description`, `price`) VALUES ($Name, $Description, $price)";

    //$afegir = mysqli_query($Name, $Description, $price);

?>