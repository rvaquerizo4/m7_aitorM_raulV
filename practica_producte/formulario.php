<!DOCTYPE html>
<html lang="en">
<head>
  <title>Formulario</title>
</head>
<body>
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
  <h1>Storing Form data in Database</h1>
    <form action="index.php" method="post">
<p>
  <label for="Name">Name:</label>
  <input type="text" name="Name" id="Name">
</p>

<p>
  <label for="Description">Description</label>
  <input type="text" name="Description" id="Description">
</p>

<p>
  <label for="price">Price</label>
  <input type="text" name="price" id="Fpprice">
</p>
  <input type="submit" value="Submit">
</form>
</body>
</html>
