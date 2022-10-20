
<form action="edit.php" method ="post">
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
        <input type="text" name="price" id="Price">
    </p>

    <input type="submit" value="add_product.php">
<?php
$db_host= "localhost";
$db_nombre = "products";
$db_usuario = "root";
$db_passwd = "";

$connexio = mysqli_connect($db_host, $db_usuario, $db_passwd, $db_nombre);

if (isset($_POST['name']) || isset($_POST['description']) || isset($_POST['price']))) {
    $id = $_POST['numID'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $sql = "UPDATE "product" SET 'Name = '$name',''Description = '$description',''Price = '$price";
    $product = mysqli_query($connexio, $sql);
    header("Location:index.php");

}
?>
</form>
