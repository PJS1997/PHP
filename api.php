<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Addition</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>
<?php
require_once 'init.php';

$ch = curl_init();
$login = $_POST['login'];
$password = $_POST['password'];
curl_setopt($ch, CURLOPT_URL, "http://tank.iai-system.com/api/user/add");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
    "login=".$login."&password=".$password);
$output = curl_exec($ch);
$js = json_decode($output, true);
if (is_array($js) & $password != "") {
    echo '<form action="index.php" class="login-form" >
		<h1>Welcome</h1>';
    echo '<br><br><br><br><br><br><br><br>
		<input type="submit" class="logbtn" value="First Page">
		<div class="bottom-text">
	</form>';


} else {
    echo '<form action="add.php" class="login-form" >
		<h1>Try Again</h1>
		<br><br><br><br><br><br><br><br>
		<input type="submit" class="logbtn" value="Return">
		<div class="bottom-text">
	</form>';
}
curl_close($ch);


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
