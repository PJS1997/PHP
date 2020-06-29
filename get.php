<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/style.css">
    <title>Get</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>
<?php
require_once 'init.php';
$ch = curl_init();
$login = $_SESSION['login'];
$key = $_SESSION['key'];
curl_setopt($ch, CURLOPT_URL, "http://tank.iai-system.com/api/chat/get");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
    "login=" . $login . "&key=" . $key);
$output = curl_exec($ch);
$js = json_decode($output, true);
$_SESSION['moja_sesja']= $login;
if (is_array($js)) {
    echo ' <form  class="login-form" method="post">
		<h2>Get</h2>
		
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
