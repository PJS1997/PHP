<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/style.css">
    <title>Edit Password</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>
<?php
include_once "login.php";
include_once "login.php";
$ch = curl_init("http://tank.iai-system.com/api/user/edit");
curl_setopt($ch, CURLOPT_URL, "http://tank.iai-system.com/api/user/edit");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
$key=$_POST['password'];
curl_setopt($ch, CURLOPT_POSTFIELDS,
    "login=" . $_SESSION['login']."&key=".$_SESSION['key']."&new_password=".$_POST['password']);
$output = curl_exec($ch);

$zm = json_decode($output, true);

if(is_array($zm)){
   echo ' <form action="index.php" class="login-form" method="post">
		<h1>Change Password Success </h1>
		<input type="submit" class="logbtn" value="Return">
		<div class="bottom-text">
	</form>';
    session_destroy();

}

?>
<script type="text/javascript">
    $(".txtb input").on("focus", function () {
        $(this).addClass("focus");
    });
    $(".txtb input").on("blur", function () {
        if ($(this).val() == "")
            $(this).removeClass("focus");
    });
</script>
</body>
