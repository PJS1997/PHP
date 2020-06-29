<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/style.css">
    <title>Welcome </title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>
<?php
require_once 'init.php';
$ch = curl_init();
if (!empty($_POST['login']) && !empty($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $key = md5($login . hash('sha256', $password));
    curl_setopt($ch, CURLOPT_URL, "http://tank.iai-system.com/api/user/verify");
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,
        "login=" . $login . "&key=" . $key);
    $output = curl_exec($ch);
    $zm = json_decode($output, true);
    if (is_array($zm)) {
        $_SESSION['login'] = $login;
        $_SESSION['key'] = $key;
        echo ' <form  class="login-form" method="post">
         <h2>Welcome</h2>
         <br><br>
		 <h3><a href="create.php">Go to  Create Chat</a></h3>
		 <br><br>
		 <h3><a href="chat.php">Go to get  Chat</a></h3>
		 <br><br>
		 <h3><a href="editForm.php">Go to Edit Password</a></h3>
		 <br><br>
		 <h3><a href="send.php">Go to Edit send</a></h3>
		 <br><br><br><br><br><br><br><br>
		 <h3><a href="logout.php" >Logout</a></h3>
		 <br><br>
	</form>';

    } else {
        echo '<form action="index.php" class="login-form" >
		<h2 style="text-align: center"><br>Please enter <br>your username<br> and password</h2>
		<br><br><br><br><br><br><br><br>
		<input type="submit" class="logbtn" value="Return">
		<div class="bottom-text">
	</form>';

    }
} else {

    echo '<form action="index.php" class="login-form" >
		<h3><br> Fill EVERYTHING</h3>
		<br><br><br><br><br><br><br><br>
		<input type="submit" class="logbtn" value="Return">
		<div class="bottom-text">
	</form>';


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
