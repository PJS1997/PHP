<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Get All</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>
<?php
require_once 'init.php';

$ch = curl_init("http://tank.iai-system.com/api/user/getAll");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$users = curl_exec($ch);
$decode = json_decode($users, true);
echo '<form action="chat.php" class="login-form" style="padding:1000% 10% ">

<table ><tr><th>Nazwa</th><th>status</th><th>Ikona</th></tr>

</form>';
foreach ($decode as $i => $row) {
  echo
  "<form  method='post' >
        <tr><td class='logbtn' ><a href=join.php>{$row['login']}</a></td><td class='txtb' >{$row['status']}</td><td><img src='{$row['icon']}'width='30' height='30' alt=''</td></tr>
   		
   </form>";

}
echo '<form action="logout.php" class="login-form" >
		<input type="submit" class="logbtn" value="Logout">
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
