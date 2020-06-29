<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/style.css">
    <title>Messanges</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>
<?php
require_once 'init.php';
unset($_SESSION['login']);
echo '<form action="index.php" class="login-form" >
		<h3><br> You have been logged out</h3>
		<br><br><br><br><br><br><br><br><br><br><br><br>
		<input type="submit" class="logbtn" value="Go to First Page">
		<div class="bottom-text">
	</form>';
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

























