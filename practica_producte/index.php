<?php
$db_host= "localhost";
$db_nombre = "products";
$db_usuario = "root";
$db_passwd = "";

$connexio = mysqli_connect($db_host, $db_usuario, $db_passwd, $db_nombre);

$consulta = "SELECT * FROM PRODUCTS";

$product = mysqli_query($connexio ,$consulta);

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
        <?php foreach ($product as $i => $products){ ?>
        <tr>
            <th scope="row"><?php echo $i +1 ?></th>
            <td><?php echo $product['Name'] ?></td>
            <td><?php echo $product['Description'] ?></td>
            <td><?php echo $product['price'] ?></td>
            <td><button type="button" class="btn btn-outline-primary">Edit</button></td>

        </tr>
?>
