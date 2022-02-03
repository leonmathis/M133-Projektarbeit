<?php

if (!empty($_POST['shoe'])) {

    $id = $_POST['id'];
    $shoe = $_POST['shoe'];
    $sole = $_POST['sole'];
    $logo = $_POST['logo'];
    $outer = $_POST['outer'];
    $exterior = $_POST['exterior'];

    require('db.php');

    $sql = "INSERT INTO colorshoes (userID, shoe, sole, logo, outer1, exterior) VALUES ($id, '$shoe', '$sole', '$logo', '$outer', '$exterior');";

    $result = $conn->query($sql);

    if ($result) {
        header('Location: ../index.php');
    }
    else {
        echo "Es ist ein Fehler aufgetreten" . $conn->error;
    }

} else {

    $id = $_POST['id'];
    $controller = $_POST['controller'];
    $button = $_POST['button'];
    $pad = $_POST['pad'];
    $middle = $_POST['middle'];
    $sides = $_POST['sides'];

    require('db.php');

    $sql1 = "INSERT INTO colorcontrollers (userID, controller, button, pad, middle, sides) VALUES ($id, '$controller', '$button', '$pad', '$middle', '$sides');";

    $result1 = $conn->query($sql1);

    if ($result1) {
        header('Location: ../index.php');
    }
    else {
        echo "Es ist ein Fehler aufgetreten" . $conn->error;
    }

}

?>