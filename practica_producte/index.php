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
        // Check connection
        if($connexio === false){
            die("ERROR: Could not connect. ". mysqli_connect_error());
        }

        $Fname = $_REQUEST['Fname'];
        $Fdescription = $_REQUEST['Fdescription'];
        $Fprice = $_REQUEST['Fprice'];

        $sql = "INSERT INTO product VALUES ('$Fname','$Fdescription','$Fprice')";

        if(mysqli_query($connexio, $sql)){
            echo "<h3>data stored in a database successfully.". " Please browse your localhost php my admin". " to view the updated data</h3>";
            echo nl2br("\n$Fname\n $Fdescription\n ". "$Fprice\n");
        } else{
            echo "ERROR: Hush! Sorry $sql. ". mysqli_error($connexio);
        }
 
    // Close connection
    mysqli_close($connexio);
?>
</body>
</html>
               