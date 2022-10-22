<?php
include_once("access.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAS#20</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    <style>
        *{
            padding: 20px;
            margin: 2px;
        }
        .container{
            width: 100%;
            height: 100vh;
            background-color: deeppink;
        }
        .container1{
            display: grid;
            justify-content: center;
        }
        button {
            background-color: dimgray;
            border-style: double;
        }
    </style>

</head>
<body>
    <div class="container">
        <form action="login1.php" method="post">
            <div class="container1">
                <?php if(isset($_GET['error'])){?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php }?>
                    <label for="uname"><b>UserID:</b></label>
                <input type="number" placeholder="Enter UserId" name="uid"><br>
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname"><br>
                <label for="pin"><b>PIN Code:</b></label>
                <input type="password" placeholder="Enter PIN" name="pin"><br>
                <button type="submit">Login</button>
            </div>
        </form>
    </div>


</body>
</html>