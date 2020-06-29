<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Jungle</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>
<?php
require_once 'init.php';

echo ' <form action="login.php" class="login-form" method="post">
		<h1>Login</h1>
		
		<div class="txtb"> 
			<input type="text" name="login"> 
			<span data-placeholder="Username"></span>
		</div>
		
		<div class="txtb">
			<input type="password" name="password">
			<span data-placeholder="Password"></span>
		</div>
		<input type="submit" class="logbtn" value="Login">
		<div class="bottom-text">
		Don\'t have account? <a href="add.php">Sign up</a>
	</form>'

?>
<script type="text/javascript">
    $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
    });
    $(".txtb input").on("blur",function(){
        if($(this).val()=="")
            $(this).removeClass("focus");
    });
</script>
</body>
