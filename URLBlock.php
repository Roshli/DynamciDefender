<?php session_start(); /* Starts the session */
if(!isset($_SESSION['UserData']['Username'])){
    header("location:Login.php");
    exit;
}
?>



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>

</head>
<body>

<img src="./img/deadend.png" class="center" style="height: 700px; width: 1300px;">


</div>
</body>
</html>