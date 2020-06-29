<?php
require_once 'init.php';
if (!empty($_POST['user']) && !empty($_POST['chat_id'])) {
    $ch = curl_init();

    $login = $_SESSION['login'];
    $key = $_SESSION['key'];
    $user = $_POST['user'];
    $chat_id = $_POST['chat_id'];
    curl_setopt($ch, CURLOPT_URL, "http://tank.iai-system.com/api/chat/join");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,
        "login=" . $_SESSION['login'] . "&key=" . $_SESSION['key'] . '&user=' . $user . '&chat_id' . $chat_id);
    $output = curl_exec($ch);
//header('location: chat.php');
    $js = json_decode($output, true);

    if (is_array($js)) {
        foreach ($js as $key => $value) {
            if ($value['name'] == $_POST['name']) {
                $chat_id = $value['chat_id'];
                echo ' <form action="login.php" class="login-form" method="post">
		<h1>Create Conversation</h1>
		<br />
		<div class="txtb"> 
			<input type="text" name="name" id="name"> 
			<span data-placeholder="New Conversation"></span>
			</div>
			<br><br><br><br><br>
        <input type="submit" class="logbtn" value="Create">
		<div class="bottom-text">
		</form>';
            }
        }
    }
}