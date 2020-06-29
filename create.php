<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/style.css">
    <title>Send</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>
<?php
require_once 'init.php';
if (empty($_SESSION['user']))
{
    header('Location:index.php');
    die();
}
if (empty($_POST['name']))
{
    $_SESSION['error'] = 'Enter chat name';
    header('Location:login.php');
    die();
}
$apiDao = new APiDAO();
$user = $_SESSION['user'];
$name = $_POST['name'];
$result = $apiDao->createChat($user,$name);
if(isset($result))
{
    header('Location:chat.php!id='.$result);
}




/*$chat_id="";
$ch = curl_init();
if(isset($_POST['id']))
{
    $chat_id= $_POST['id'];
    $_SESSION['chat_id'] = $chat_id;
}
if (isset($_SESSION['chat_id']))
{
    $chat_id= $_SESSION['chat_id'];
}
if (!isset($_SESSION['name']))
{
    $login = $_SESSION['login'];
    $key = $_SESSION['key'];
    $name = "name";
    curl_setopt($ch, CURLOPT_URL, "http://tank.iai-system.com/api/chat/create");
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,
        "login=" . $_SESSION['login'] . "&key=" . $_SESSION['key'] . "&name=" . $name);
    $output = curl_exec($ch);
    $zm = json_decode($output, true);
    if (is_array($zm)) {*/
        echo ' <form action="getActive.php" class="login-form" method="post">
		<h1>Create<br /> Conversation</h1>
		<br />
		<div class="txtb"> 
			<input type="text" name="name" id="name"> 
			<span data-placeholder="New Conversation"></span>
			</div>
			<br><br><br><br><br>
        <input type="submit" class="logbtn" value="Create">
		<div class="bottom-text">
		 <br><br>
		</form>';

/*
    }
}*/
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
