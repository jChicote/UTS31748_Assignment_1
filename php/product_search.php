<?php
    //$current productSelection = "";
    //phpinfo();
    $connection = mysqli_connect('localhost', 'jaidenchicote', 'chicote', 'grocerystore');

    // Check connection
    if ($connection->connect_error) {
        echo("Connection failed: " . $connection->connect_error);
    } else {
        echo "Connected successfully to database";
    }

    if (isset ($_GET['productID'])) {

    }
?>
