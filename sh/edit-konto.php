<?php

$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$userName = $_POST['leoleo'];
$pw = $_POST['mamama'];

require('../db/db.php');

if ($id > 0) {
    $sql = "UPDATE user SET firstname = '$firstname', lastname = '$lastname', username = '$userName', password = '$pw' WHERE userID = $id;";
}
else {
    $sql = "INSERT INTO user (firstname, lastname, username, password) VALUES ('$firstname', '$lastname', '$userName', '$pw');";
}

$result = $conn->query($sql);

if ($result) {
    header('Location: ../index.php');
}
else {
    echo "Es ist ein Fehler aufgetreten" . $conn->error;
}

?>