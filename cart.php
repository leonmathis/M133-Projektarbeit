<?php
session_start();
require('db/db.php');

$id = 0;

if (isset($_SESSION['loggedIn']) && ($_SESSION['loggedIn'])) {
    $id = $_SESSION['userID'];
}

$sql = "SELECT * FROM colorshoes WHERE userID = $id;";

$sql1 = "SELECT * FROM colorcontrollers WHERE userID = $id;";

$result = $conn->query($sql);
$result1 = $conn->query($sql1);

//$row = $result->fetch_assoc();
//$row1 = $result1->fetch_assoc();

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
if ($id == 0) {
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
if ($id == 0) {
    echo '<i class="bi bi-lock"></i>';
}
?> 
            </a></li>
        </ul>
    </div>
</div>


<div>

<section>
    <h2 class="opacity-75"><i class="bi bi-heart-fill"></i></h2>
    <br>
    <div class="col-md-6">
    <table class="table table-hover table-striped table-sm align-middle">
        <thead>
            <tr style="color: #40373a; font-weight: bold;">
                <th scope="col">User</th>
                <th scope="col">Shoe</th>
                <th scope="col">Sole</th>
                <th scope="col">Logo</th>
                <th scope="col">Outer</th>
                <th scope="col">Exterior</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($row = $result->fetch_assoc()) {
            ?>
            <tr id="row" style="color: #40373a;">
                <td><?php echo $row['userID'] ?></td>
                <td><?php echo $row['shoe'] ?></td>
                <td><?php echo $row['sole'] ?></td>
                <td><?php echo $row['logo'] ?></td>
                <td><?php echo $row['outer1'] ?></td>
                <td><?php echo $row['exterior'] ?></td>
                <td><a href="db/delete.php?id=<?php echo $row['colorID']; ?>" class="btn btn-dark opacity-75"><i class="bi bi-trash"></i></a></td>
            </tr>
            
            <?php
                }
            ?>
        </tbody>
    </table>
    </div>

    <br>

    <div class="col-md-6">
    <table class="table table-hover table-striped table-sm align-middle">
        <thead>
            <tr class="" style="color: #40373a; font-weight: bold;">
                <th scope="col">User</th>
                <th scope="col">Controller</th>
                <th scope="col">Button</th>
                <th scope="col">Pad</th>
                <th scope="col">Middle</th>
                <th scope="col">Sides</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($row1 = $result1->fetch_assoc()) {
            ?>
            <tr id="row" class="" style="color: #40373a;">
                <td><?php echo $row1['userID'] ?></td>
                <td><?php echo $row1['controller'] ?></td>
                <td><?php echo $row1['button'] ?></td>
                <td><?php echo $row1['pad'] ?></td>
                <td><?php echo $row1['middle'] ?></td>
                <td><?php echo $row1['sides'] ?></td>
                <td><a href="db/delete.php?id1=<?php echo $row1['contID']; ?>" class="btn btn-dark opacity-75"><i class="bi bi-trash"></i></a></td>
            </tr>
            
            <?php
                }
            ?>
        </tbody>
    </table>
    </div>
</section>

</div>

<div class="logout opacity-75" id="logout">

<?php
if ($id == 0) {
    echo '<button id="logintnbtn" class="btn btn-light opacity-75"><a href="#modal">Login</a></button>';
} else {
    echo '<button id="logoutnbtn" class="btn btn-light opacity-75"><a href="sh/logout.php">Logout</a></button>';
}
?>
</div>

<!-- Popup sign in -->
<div id="modal">
    <div class="modal__window">
        <a class="modal__close" href="#">X</a>

        <form action="sh/login.php" method="POST">
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" class="opacity-50 form-control" placeholder="Username" id="username" name="username" aria-label="Username" aria-describedby="basic-addon1" onblur="validateTextField( this )">
            </div>

            <div class="input-group mb-3">
            <input type="password" class="opacity-50 form-control" placeholder="password" aria-label="password" id="password" name="password" aria-describedby="basic-addon1" onblur="validateTextField( this )">
            </div>

            <button type="submit" id="submit-button" class="mb-2 opacity-50 btn btn-light">Sign in</button>
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