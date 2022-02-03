<?php
session_start();
require('db/db.php');

$id = 0;

if (isset($_SESSION['loggedIn']) && ($_SESSION['loggedIn'])) {
    $id = $_SESSION['userID'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Retro Customs</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

<!-- navbar -->
<div class="smooth">
    <div class="header">
        <ul>
            <li><a href="index.php">home</a></li>
<?php
if ($id == 0) {
    echo '<li><a href="shoes.php" class="disabled-link">shoes';
}
else {
    echo '<li><a href="shoes.php">shoes';
}

?>
<?php
if (!isset($_SESSION['loggedIn']) || !$_SESSION['loggedIn']) {
    echo '<i class="bi bi-lock"></i>';
}
?> 
            </a></li>
<?php
if ($id == 0) {
    echo '<li><a href="controller.php" class="disabled-link">controller';
}
else {
    echo '<li><a href="controller.php">controller';
}

?>
<?php
if (!isset($_SESSION['loggedIn']) || !$_SESSION['loggedIn']) {
    echo '<i class="bi bi-lock"></i>';
}
?> 
            </a></li>
<?php

?>
            <li><a href="konto.php?id=<?php echo $id; ?>">konto 
<?php

if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) {
    echo '<i class="bi bi-check"></i>';
}
?>         
            </a></li>
        </ul>
    </div>
</div>

<div>
<section id="contact">
    <h2 class="opacity-75">Willkommen</h2>
    <div class=" col-md-6 container text-center">
    <br>
    <p style="color: #40373a; font-weight: bold;">Auf dieser Website können Sie Schuhe und Controllers nach Ihren Wünschen anpassen und zu Ihrem Warenkorb hinzufügen. 
    Sie müssen sich zuerst anmelden, um die Dienste nutzen zu können. 
    Wenn Sie kein Konto haben, können Sie eines erstellen, indem Sie auf die Option Konto klicken.
    </p>
    </div>
</section>
</div>

<div class="logout opacity-75" id="logout">
<button id="logoutnbtn" class="btn  opacity-75"><a href="sh/logout.php">Logout</a></button>
</div>

<div class="login opacity-75" id="login">
<button id="loginbtn" class="btn  opacity-75"><a href="#modal">Login</a></button>
</div>

<div class="cart opacity-75" id="cart">
<button id="cartbtn" class="btn btn-dark opacity-75"><a href="cart.php"><i class="bi bi-heart"></i></a></button>
</div>

<!-- Popup sign in -->
<div id="modal">
    <div class="modal__window">
        <a class="modal__close" href="#">X</a>

        <form action="sh/login.php" method="POST">
            <div class="input-group mb-3">
            <span class="input-group-text opacity-75" id="basic-addon1">@</span>
            <input type="text" class="opacity-50 form-control" placeholder="Username" id="username" name="username" aria-label="Username" aria-describedby="basic-addon1" onblur="validateTextField( this )">
            </div>

            <div class="input-group mb-3">
            <input type="password" class="opacity-50 form-control" placeholder="password" aria-label="password" id="password" name="password" aria-describedby="basic-addon1" onblur="validateTextField( this )">
            </div>

            <button type="submit" id="submit-button" class="mb-2 opacity-75 btn btn-dark">Sign in</button>
<?php
if (isset($_SESSION['loginFailed'])) {
    echo '<div class="fw-bolder text-danger">' . $_SESSION['loginFailed'] . '</div>';
}

$_SESSION['loginFailed'] = null;
?>

        </form>

    </div>
</div>

<script src="js/indexjs.js"></script>
</body>
</html>