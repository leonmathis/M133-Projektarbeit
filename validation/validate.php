<?php
    require('validation.php');

    $validation = new Validation();

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];   
    $username = $_POST['leoleo'];
    $password = $_POST['mamama']; 

    $isFirstnameValid = $validation->validateText( $firstname );
    $isLastnameValid = $validation->validateText( $lastname );
    $isUsernameValid = $validation->validateText( $username );
    $isPasswordValid = $validation->validateText( $password );

    if ( $isFirstnameValid && $isLastnameValid && $isUsernameValid && $isPasswordValid ) {
        echo "Formular erfolgreich gespeichert";
    } else {
        if (!$isFirstnameValid) {
            echo "Vorname nicht ausgefüllt<br>";
        }

        if (!$isLastnameValid) {
            echo "Lastname nicht ausgefüllt<br>";
        }

        if (!$isUsernameValid) {
            echo "Lastname nicht ausgefüllt<br>";
        }

        if (!$isPasswordValid) {
            echo "Lastname nicht ausgefüllt<br>";
        }
    }