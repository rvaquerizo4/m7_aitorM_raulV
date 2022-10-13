<?php
  $db_host= "localhost";
  $db_nombre = "products";
  $db_usuario = "root";
  $db_passwd = "";

  $connexio = mysqli_connect($db_host, $db_usuario, $db_passwd, $db_nombre);

  $consulta = "SELECT * FROM product";

  $product = mysqli_query($connexio, $consulta);

  if (isset($_POST['add_product'])){
    $Name = $_POST['Name'];
    $Description = $_POST['Description'];
    $price = $_POST['price'];
    $q = $_POST['quantity'];
    $numID = random_int(0, 1000);
  }
  
    $afegir = mysqli_query($Name, $Description, $price, $q, $numID);
    $sql = "INSERT INTO product VALUES ($Name, $Description, $price, $q, $numID)";
?>