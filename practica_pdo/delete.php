<?php
// try {
//    //Connexió a la BBDD
//    $myCon = new PDO('mysql:host=localhost; dbname=products', 'root', '');

// } catch (PDOException $e) {
//    echo "error de connexió: " . $e->getMessage() . "<br/>";
//    die();
// }

// $id = $_GET['NumID'];
// $sql = "DELETE FROM product WHERE id=$id";
// $stmt= $myCon->query($sql);
// $stmt->execute([$id]);
// 
//Con esta funcion cogemos el Numero de la id
$id = $_GET['NumID'];
//Hacemos la connexion
$myCon = new PDO('mysql:host=localhost; dbname=products', 'root', '');
//Consulta para eliminar
$sql = "DELETE FROM product WHERE NumID = $id"; 
//query para ejecutar la funcion sql
$myCon->query($sql);
//esta linea para volver al archivo index.php
header('Location:index.php');
?>

