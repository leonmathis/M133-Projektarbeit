<?php

require('../db/db.php');

class LoginController
{

    function login(string $username, string $password): bool
    {
        // db Abfrage ob Benutzername + Passwort stimmit

        $sql = "SELECT * FROM user WHERE username = '$username' && password = '$password';";

        global $conn;

        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $_SESSION['userID'] = $row['userID'];
            $_SESSION['firstname'] = $row['firstname'];
            $_SESSION['lastname'] = $row['lastname'];
            return true;
        }

        return false;
    }

}

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$controller = new LoginController();

if ($controller->login($username, $password)) {
    $_SESSION['loggedIn'] = true;
    header('Location: ../index.php');
}
else {
    $_SESSION['loginFailed'] = "Benutzername/Passwort falsch";
    header('Location: ../index.php#modal');
}