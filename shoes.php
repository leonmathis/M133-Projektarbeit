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
        <div class="row container col-md-4">
        <div id="picadidas" class="picadidas col-md-5"><a href="adidas.php"><img src="css/adidas.png" class="rounded" height="200px" width="180px"></a></div>
        <div class="col-md-2"></div>
        <div id="picjordan" class="picjordan col-md-5"><a href="jordan.php"><img src="css/jumpman.png" class="rounded" height="200px" width="180px"></a></div>
        </div>      
</section>
</div>

<div class="logout opacity-75" id="logout">
<button id="logoutnbtn" class="btn btn-light opacity-75"><a href="sh/logout.php">Logout</a></button>
</div>

<div class="cart opacity-75" id="cart">
<button id="cartbtn" class="btn btn-light opacity-75"><a href="cart.php"><i class="bi bi-heart"></i></a></button>
</div>

<script src="js/indexjs.js"></script>
</body>
</html>