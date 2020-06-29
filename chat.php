<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/style_chat.css">
    <title>Chat</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>
<?php
require_once 'init.php';
$chat_id="";
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
    header('Location:index.php');
    exit();
}

$login = $_SESSION['name'];
$key = $_SESSION['key'];






















$ch = curl_init();
$login = $_SESSION['login'];
$key = $_SESSION['key'];
$message =$_POST['message'];
curl_setopt($ch, CURLOPT_URL, "http://tank.iai-system.com/api/chat/get");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
    "login=".$_SESSION['login']."&key=".$_SESSION['key']. "&message".$message);
$output = curl_exec($ch);
$zm = json_decode($output,true);
if (is_array($zm))
{
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
