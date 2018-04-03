<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php
    include_once("../assets/style.php");
    include_once("../config/config.php");
    ?>

    <title><?php global $name; echo $name; ?></title>

</head>
<body>
    
    <div class="container-fluid">
        <div style="text-align: center; padding: 5px;" class="col-md-4">
            <input id="txtUsername" type="text" class="form-control" placeholder="Username">
        </div>
        <div style="text-align: center; padding: 5px;" class="col-md-4">
        <input id="txtPassword" type="text" class="form-control" placeholder="Password">
        </div>
        <div style="text-align: center; padding: 5px;" class="col-md-4">
            <button id="btnLogin" class="btn btn-outline-primary">Login</button>
        </div>
    </div>

    <script src="../js/index.js"></script>

</body>
</html>