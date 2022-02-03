<?php
session_start();
require('db/db.php');

$id = 0;

if (isset($_SESSION['loggedIn']) && ($_SESSION['loggedIn'])) {
    $id = $_SESSION['userID'];
}

$sql = "SELECT * FROM user";
$result = $conn->query($sql);
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

            <li><a href="controller.php">controller 
<?php
if (!isset($_SESSION['loggedIn']) || !$_SESSION['loggedIn']) {
    echo '<i class="bi bi-lock"></i>';
}
?> 
            </a></li>
        </ul>
    </div>
</div>

<div>
<section id="contact">
        <div class="row container">
            <form class="row container" method="POST" action="db/like.php">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="hidden" name="controller" value="xbox">
                <div class="selectdiv col-md-3">
                    <div class="input-group mb-3">
                    <label class="input-group-text col-4 opacity-100" for="inputGroupSelect01">Button</label>
                        <select class="form-select opacity-50" id="select-box1" name="button" onchange="changeShade1()">
                            <option selected>white</option>
                            <option value="black">black</option>
                            <option value="yellow">yellow</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                    <label class="input-group-text col-4 opacity-100" for="inputGroupSelect01">Joy-Stick</label>
                        <select class="form-select opacity-50" id="select-box2" name="sides" onchange="changeShade1()">
                            <option selected>white</option>
                            <option value="black">black</option>
                            <option value="yellow">yellow</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                    <label class="input-group-text col-4 opacity-100" for="inputGroupSelect01">Middle</label>
                        <select class="form-select opacity-50" id="select-box3" name="middle" onchange="changeShade1()">
                            <option selected>red</option>
                            <option value="green">green</option>
                            <option value="turquoise">turquoise</option>
                            <option value="purple">purple</option>
                            <option value="blue">blue</option>
                            <option value="brown">brown</option>
                            <option value="light grey">light grey</option>
                        </select>
                    </div> 
                </div>
                <div class="ps5 row container col-md-4">
                    <img id="xblack" src="css/xblack.png" class="xblack" height="200px" width="180px">
                    <img id="xwhite" src="css/xwhite.png" class="xwhite" height="200px" width="180px">
                    <img id="xmain" src="css/xmain.png" class="xmain" height="200px" width="180px">
                </div>
                <div class="text-end col-md-4 pt-5">
                    <button id="likebtn" class="btn btn-dark p-4 opacity-75"><i class="bi bi-heart-fill"></i></button>
                </div>
            </form>     
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