<?php

    // Authenticates whether the form details have been set
    if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email'])) {
        $result->session = 1;
        $object = json_encode($result);
        echo $object;
    } else {
        $result->session = 0;
        $object = json_encode($result);
        echo $object;
    }
 ?>
