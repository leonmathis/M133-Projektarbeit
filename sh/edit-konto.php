<?php

require('../validation/validation.php');

$validation = new Validation();

$firstname = "";
$lastname = "";
$username = "";
$password = "";

if( !empty( $_POST ) ) {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $userName = $_POST['leoleo'];
    $pw = $_POST['mamama'];

    $isFirstnameValid = $validation->validateText( $firstname );
    $isLastnameValid = $validation->validateText( $lastname );
    $isUsernameValid = $validation->validateText( $userName );
    $doesUsernameExist = $validation->validateUsername( $userName );
    if ($id > 0) {
        $doesUsernameExist = true;
    }
    $isPasswordValid = $validation->validateText( $pw );

    header("Location: ../konto.php?firstname=$isFirstnameValid&lastname=$isLastnameValid&username=$isUserNameValid&password=$isPasswordValid&id=$id&usernameexist=$doesUsernameExist");

    if($isFirstnameValid == true && $isLastnameValid == true && $isUsernameValid == true && $isPasswordValid == true && $doesUsernameExist == true) {

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
    
    }

}

?>