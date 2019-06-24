<?php session_start(); /* Starts the session */
if(!isset($_SESSION['UserData']['Username'])){
    header("location:login.php");
    exit;
}
?>



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>

    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="css/styles_home.css">
    <style>
        .center {
            margin: 0;
            position: absolute;
            top: 30%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
        .Left_bellow {
            margin: 0;
            position: absolute;
            top: 90%;
            left: 10%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>
<div class="center">
    <table>
        <tr>
            <td><a href="IDSLog.php"><img src="./img/IDS-icon.png" style="height: 150px; width: 150px;"></a></td>
            <td><a href="UrlBList.php"><img src="./img/site-blocking.png" style="height: 150px; width: 150px;"></a></td>
            <td><a href="CustomerMger.php"><img src="./img/quota-mgt.png" style="height: 150px; width: 150px;"></a></td>
            <td><a href="TimeMger.php"><img src="./img/bandwith.png" style="height: 150px; width: 150px;"></a></td>
            <td><a href="Trigger.php"><img src="./img/trigger.png" style="height: 150px; width: 150px;"></a></td>

        </tr>
    </table>
</div>
<div class="Left_bellow">
    <a href="logout.php" name="Logout" type="button" class="btn float-right login_btn">Log Out</a>
</div>
</body>
</html>