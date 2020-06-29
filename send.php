
<?php
require_once 'init.php';
$ch = curl_init();
$login = $_SESSION['login'];
$key = $_SESSION['key'];
$message =$_POST['message'];
curl_setopt($ch, CURLOPT_URL, "http://tank.iai-system.com/api/chat/send");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
    "login=".$_SESSION['login']."&key=".$_SESSION['key']."&chat_id=".$chat_id."&message=".$message);
$output = curl_exec($ch);
$zm = json_decode($output,true);
if (is_array($zm)) {
    echo ' <form  class="login-form" method="post">
		<h2>Send messenge</h2>
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
