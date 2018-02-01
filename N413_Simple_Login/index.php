<?php
session_start();
if(! isset($_SESSION["user_id"])){
    $_SESSION["user_id"] = 0;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calm</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Open+Sans:400" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome-pro-brands.css">
    <link rel="stylesheet" href="css/fontawesome-pro-core.css">
    <link rel="stylesheet" href="css/fontawesome-pro-solid.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        <?php
        if($_SESSION["user_id"] > 0){
            echo '
				var log_in = true;';
        }else{
            echo '
				var log_in = false;';
        }
        ?>

        function check_login(){
            if(log_in){
                $("#login").attr("href", "logout.php").html('<div>Logout</div>');
                $("#register").html('');
            }else{
                window.location = "login.php";
            }
        }

        $(document).ready(function() {
            check_login();
        });

    </script>
</head>
<body>
    <div id="container">
        <div id="nav">
            <a id="register" href="register.php"><div>Register</div></a>
            <a id="login" href="login.php"><div>Login</div></a>
        </div>
        <div id="search">
            <h1 class="greeting"></h1>
            <div>Show Current Weather in </div>
            <form class="form" action="" method="POST">
                <input type="text" id="place" placeholder="City or Zip">
                <!--<input type="text" id="zipcode" pattern="\d{5}-?(\d{4})?" placeholder="Zipcode"> -->
                <input type="submit" name="submit" id="submit" value="Go">
            </form>
            <div class="error"></div>
        </div>
        <div id="result"></div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script
            src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
            integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
            crossorigin="anonymous">

    </script>
    <script src="js/app.js"></script>
</body>
</html>