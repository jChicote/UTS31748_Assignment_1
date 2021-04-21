<?php

    $selectedID = $_REQUEST["id"];
    $productSelection;
    //$connection = mysqli_connect('aa2cvpn3f795tl.coexuuj2esc1.us-east-1.rds.amazonaws.com', 'jaiden', 'chicote12345', 'store', '3306');
    $connection = mysqli_connect('localhost', 'jaiden', 'chicote', 'store');

    // Encodes search result into a JSON object
    function returnResult($row) {
        if ($selectedID !== "") {
            $jsonObj->id = $row['product_id'];
            $jsonObj->name = $row['product_name'];
            $jsonObj->price = $row['unit_price'];
            $jsonObj->quantity = $row['unit_quantity'];
            $jsonObj->stock = $row['in_stock'];
            $myJSON = json_encode($jsonObj);
            echo $myJSON;
        }
    }

    // Check connection
    if ($connection->connect_error) {
        //echo '<script> console.log("Connection failed: " . $connection->connect_error </script>';
    }

    // Retrieving data
    $query_string = "select * from grocerystore";
    $result = mysqli_query($connection, $query_string);

    // Get row count
    $num_rows = mysqli_num_rows($result);

    // Fetch Result
    if ($selectedID !== "") {
        if ($num_rows > 0 ) {
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['product_id'] == $selectedID) {
                    returnResult($row);
                }
            }
        }
    }
?>
