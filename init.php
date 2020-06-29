<?php
// inicjowanie sesji
require_once 'api.DAO.php';
require_once 'User.class.php';
require_once 'Chat.class.php';

if (isset($_COOKIE['moja_sesja'])) {
    @session_id($_COOKIE['moja_sesja']);
}

session_start();
$id = session_id();
setcookie('moja_sesja', $id);