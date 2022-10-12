<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Formulario</title>
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
        <form action="index.php" method="post">   
            <p>
                <label for="Fname">Name:</label>
                <input type="text" name="Fname" id="Fname">
            </p>          
            <p>
                <label for="Fdescription">Description:</label>
                <input type="text" name="Fdescription" id="Fdescription">
            </p>           
            <p>
                <label for="Fprice">Price:</label>
                <input type="text" name="Fprice" id="Fprice">
            </p>
            <input type="submit" value="submit">
        </form>
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
