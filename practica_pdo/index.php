<?php
    //Atributs
    $host = "localhost";
    $user = "root";
    $passwd = "";
    $dbName = "products";
    
    //Mètodes
    try {
        $connect_PDO = new PDO ("mysql:host=localhost; dbname=products", "root", "");
        echo "connexio correcta";
    }catch (Exception $e) {
        //die("Error: " . $e->GetMessage();
    }

//Fem la QUERY per obtindre tota la info de la taula
$consulta = "SELECT * FROM PRODUCT";

$result->execute($consulta);

?>

<table class="table">
    <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">NumID</th>
          <th scope="col">Name</th>
          <th scope="col">Description</th>
          <th scope="col">Price</th>
          <th scope="col">Quantity</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
</table>

<!-- SECCIÓ PER AFEGIR PRODUCTES --> 
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-body">
                <!-- A través del mètode POST li enviem les dades del formulari a l'arxiu add_product.php -->
                    <form action="add_product.php" method="POST"> 
                        <div class=form-group>
                            <input type="text" name="name" class="form-control" placeholder="Name" autofocus>
                        </div>
                        <div class=form-group>
                            <textarea name="description" rows="3" class="form-control" placeholder="Description"></textarea>
                        </div>
                        <div class=form-group>
                            <input type="text" name="price" class="form-control" placeholder="price">
                        </div>
                        <div class=form-group>
                            <input type="text" name="quantity" class="form-control" placeholder="Quantity">
                        </div>
                        <input type="submit" class="btn btn-success btn-block" name="add_product" value="+ Producte">
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
