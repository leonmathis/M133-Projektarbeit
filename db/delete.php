<?php

if (empty($_GET['id'])) {

    $id1 = $_GET['id1'];

    require('db.php');

    $sql1 = "DELETE FROM colorcontrollers WHERE contID = $id1";

    $result1 = $conn->query($sql1);

    if ($result1) {
        header('Location: ../cart.php');
    }
    else {
        echo "Es ist ein Fehler aufgetreten" . $conn->error;
    }

} else {

    $id = $_GET['id'];

    require('db.php');
    
    $sql = "DELETE FROM colorshoes WHERE colorID = $id";

    $result = $conn->query($sql);

    if ($result) {
        header('Location: ../cart.php');
    }
    else {
        echo "Es ist ein Fehler aufgetreten" . $conn->error;
    }

}

?>