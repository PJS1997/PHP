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
include_once 'login.php';
if(isset($_SESSION['login']) && isset($_SESSION['key'])){
    echo ' <form action="edit.php" class="login-form" method="post">
		<h1>Edit Password </h1>
		
		<div class="txtb"> 
			<input type="password" name="password" id="password"> 
			<span data-placeholder="New Password"></span>
		</div>
		
		<div class="txtb">
			<input type="password" name="password2" id="password2">
			<span data-placeholder="New Pasword(Again)"></span>
		</div>
		<input type="submit" class="logbtn" value="Change" id="change" disabled>
		<div id="coment" class="bottom-text">
		
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

<script>
    document.getElementById('password2').addEventListener('input', function () {
        let pass1 ='1';
        let pass2 ='2'
        pass1 = document.getElementById('password').value;
        pass2 = document.getElementById('password2').value;
        if (pass1==pass2 )
        {
            document.getElementById('password').style.color='green';
            document.getElementById('password2').style.color='green';
            document.getElementById('change').removeAttribute('disabled');
        }
        else
        {
            document.getElementById('password').style.color='red';
            document.getElementById('password2').style.color='red';
            document.getElementById('change').removeAttribute('enabled');
        }

    })
</script>
</body>
