<!DOCTYPE html>
<html>

<head>
    <title>index</title>
</head>

<body>

<?php
    $db_host= "localhost";
    $db_nombre = "products";
    $db_usuario = "root";
    $db_passwd = "";

    $connexio = mysqli_connect($db_host, $db_usuario, $db_passwd, $db_nombre);

    $consulta = "SELECT * FROM product";

    $product = mysqli_query($connexio, $consulta);

?>
 <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($product as $i => $products) { ?>
        <tr> 
          <th scope="row"><?php echo $i + 1 ?></th>
          <td><?php echo $products['Name'] ?></td>
          <td><?php echo $products['Description'] ?></td>
          <td><?php echo $products['price'] ?></td>
          <td><a href="edit.php?id=<?php echo $products['NumID']?>"><button type="button" class="btn btn-outline-primary">Edit</button></a></td>
          <td><a href="delete.php?id=<?php echo $products['NumID']?>"><button type="button" class="btn btn-outline-danger">Delete</button></a></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  <button onclick="location.href='formulario.php'">Añadir un producto</button>
  </body>
</html>