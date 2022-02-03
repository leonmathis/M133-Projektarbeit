<?php
    require('db/db.php');

    $id = 0;

    if ( !empty($_GET) ) {

    $id = $_GET['id'];

    $sql = "SELECT * FROM user WHERE userID = $id";

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

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
        <?php
        if ($id == 0) {
            echo '<h2 class="opacity-75">Konto Erstellen</h2>';
        } else {
            echo '<h2 class="opacity-75">Konto Bearbeiten</h2>';
        }
        
        ?>
        <div class="editkonto col-md-4 container">
            <form method="POST" action="sh/edit-konto.php">

                <input type="hidden" name="id" value="<?php echo $id ?>">

                <br>
                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label" style="colour: #4d4d4d;">firstname</label>
                    <div class="col-sm-8">
                    <input type="text" class="opacity-50 form-control" id="firstname" name="firstname"  onblur="validateTextField( this )" value="<?php if( isset($row) ) { echo $row['firstname']; }?>">
                    </div>
                    <?php
                            if ( isset($isFirstnameValid) && !$isFirstnameValid) {
                    ?>
                            <div class="col-sm-2">
                            <span class="text-danger fw-bold val"><i class="bi bi-x-circle-fill"></i></span>
                            </div>
                    <?php

                                }
                    ?>
                    <div class="col-sm-2">
                            <span class="pt-1 text-danger fw-bold val" id="firstname-wrong"><i class="bi bi-x-circle-fill"></i></i></span>
                            <span class="pt-1 text-success fw-bold val" id="firstname-correct"><i class="bi bi-check-circle-fill"></i></i></span>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">lastname</label>
                    <div class="col-sm-8">
                    <input type="text" class="opacity-50 form-control" id="lastname" name="lastname"  onblur="validateTextField( this )" value="<?php if( isset($row) ) { echo $row['lastname']; }?>">
                    </div>
                    <?php
                            if ( isset($isLastnameValid) && !$isLastnameValid) {
                    ?>
                            <div class="col-sm-2">
                            <span class="text-danger fw-bold val"><i class="bi bi-x-circle-fill"></i></span>
                            </div>
                    <?php

                                }
                    ?>
                    <div class="col-sm-2">
                            <span class="text-danger fw-bold val" id="lastname-wrong"><i class="bi bi-x-circle-fill"></i></i></span>
                            <span class="text-success fw-bold val" id="lastname-correct"><i class="bi bi-check-circle-fill"></i></i></span>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">username</label>
                    <div class="col-sm-8">
                    <input type="text" class="opacity-50 form-control" id="leoleo" name="leoleo"  onblur="validateTextField( this )" value="<?php if( isset($row) ) { echo $row['username']; }?>">
                    </div>
                    <?php
                            if ( isset($isUsernameValid) && !$username) {
                    ?>
                            <div class="col-sm-2">
                            <span class="text-danger fw-bold val"><i class="bi bi-x-circle-fill"></i></span>
                            </div>
                    <?php

                                }
                    ?>
                    <div class="col-sm-2">
                            <span class="text-danger fw-bold val" id="leoleo-wrong"><i class="bi bi-x-circle-fill"></i></i></span>
                            <span class="text-success fw-bold val" id="leoleo-correct"><i class="bi bi-check-circle-fill"></i></i></i></span>
                    </div>  
                </div>

                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">password</label>
                    <div class="col-sm-8">
                    <input type="password" class="opacity-50 form-control" id="mamama" name="mamama"  onblur="validateTextField( this )" value="<?php if( isset($row) ) { echo $row['password']; }?>">
                    </div>
                    <?php
                            if ( isset($isPasswordValid) && !$isPasswordValid) {
                    ?>
                            <div class="col-sm-2">
                            <span class="text-danger fw-bold val"><i class="bi bi-x-circle-fill"></i></span>
                            </div>
                    <?php

                                }
                    ?>
                    <div class="col-sm-2">
                            <span class="text-danger fw-bold val" id="mamama-wrong"><i class="bi bi-x-circle-fill"></i></i></span>
                            <span class="text-success fw-bold val" id="mamama-correct"><i class="bi bi-check-circle-fill"></i></i></span>
                    </div>
                </div>

                
                <button type="submit" id="submit-button" class="opacity-100 btn btn-dark" disabled="true">submit</button>

            </form>
</div>
</section>



</div>

<div class="logout opacity-75" id="logout">
<?php
if ($id == 0) {
    echo '<button id="logintnbtn" class="btn btn-dark opacity-75"><a href="#modal">Login</a></button>';
} else {
    echo '<button id="logoutnbtn" class="btn btn-dark opacity-75"><a href="sh/logout.php">Logout</a></button>';
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