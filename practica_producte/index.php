<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <?php
    $db_host= "localhost";
    $db_nombre = "products";
    $db_usuario = "root";
    $db_passwd = "";

    $connexio = mysqli_connect($db_host, $db_usuario, $db_passwd, $db_nombre);

    $consulta = "SELECT * FROM PRODUCTS";

    $product = mysqli_query($connexio ,$consulta);

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
      <?php foreach ($products as $i => $product) { ?>
        <tr> 
          <th scope="row"><?php echo $i + 1 ?></th>
          <td><?php echo $product['Name'] ?></td>
          <td><?php echo $product['Description'] ?></td>
          <td><?php echo $product['price'] ?></td>
          <td><button type="button" class="btn btn-outline-primary">Edit</button></td>
          <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>
</html>