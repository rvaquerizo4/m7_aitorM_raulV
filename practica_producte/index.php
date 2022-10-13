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
// Check connection
        if($connexio === false){
            die("ERROR: Could not connect. ". mysqli_connect_error());
        }

        $Name = $_REQUEST['Name'];
        $Description = $_REQUEST['Description'];
        $price = $_REQUEST['price'];

        $sql = "INSERT INTO product VALUES ('$Name','$Description','$price')";

        if(mysqli_query($connexio, $sql)){
            echo "<h3>data stored in a database successfully.". " Please browse your localhost php my admin". " to view the updated data</h3>";
            echo nl2br("\n$Name\n $Description\n ". "$price\n");
        } else{
            echo "ERROR: Hush! Sorry $sql. ". mysqli_error($connexio);
        }
 
    // Close connection
    mysqli_close($connexio);
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
          <td><button type="button" class="btn btn-outline-primary">Edit</button></td>
          <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>
</html>
   
