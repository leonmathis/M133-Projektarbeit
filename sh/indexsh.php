<?php
session_start();
require('../db/db.php');

$sql = "SELECT * FROM user";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Handling</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <br>
    <h1 class="text-center"></h1>

    <div class="container">
        <form>
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"></span>
            <input type="text" class="form-control" placeholder="firstname" aria-label="firstname" id="firstname" name="firstname" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"></span>
            <input type="text" class="form-control" placeholder="lastname" aria-label="lastname" id="lastname" name="lastname" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="Username" id="username" name="username" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Recipient's username" id="email" name="email" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <span class="input-group-text" id="basic-addon2">@gmail.com</span>
            </div>

            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"></span>
            <input type="text" class="form-control" placeholder="password" aria-label="password" id="password" name="password" aria-describedby="basic-addon1">
            </div>
            
            <button type="submit" class="btn btn-light">Sign in</button>
        </form>
    </div>
</body>
</html>