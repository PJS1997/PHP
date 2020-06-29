<?php

class APiDAO{

    public function createChat($login,$key,$chat_name)
    {
        $ch= curl_init();
        curl_setopt($ch,CURLOPT_URL,"http://tank.iai-system.com/api/chat/create");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
            "login=".$login."&key=".$key.'$name='.$chat_name.'');
        $output = curl_exec($ch);
        header('location: chat.php');
        exit();
        curl_close();
    }

    public function leave($login,$key,$chat_id)
    {
        $ch= curl_init();
        curl_setopt($ch,CURLOPT_URL,"http://tank.iai-system.com/api/chat/leave");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
            "login=".$login."&key=".$key.'&chat_id='.$chat_id.'');
        $output = curl_exec($ch);
        header('location: chat.php');
        exit();
        curl_close();
    }
    public function join($login,$key,$user,$chat_id)
    {
        $ch= curl_init();
        curl_setopt($ch,CURLOPT_URL,"http://tank.iai-system.com/api/chat/join");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
            "login=".$login."&key=".$key.'&user='.$user.'&chat_id'.$chat_id.'');
        $output = curl_exec($ch);
        header('location: chat.php');
        exit();
        curl_close();
    }
    public function send($login,$key,$chat_id, $message)
    {
        $ch= curl_init();
        curl_setopt($ch,CURLOPT_URL,"http://tank.iai-system.com/api/chat/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
            "login=".$login."&key=".$key.'$name='.$chat_id.'&message'.$message.'');
        $output = curl_exec($ch);
        header('location: chat.php');
        exit();
        curl_close();
    }
    public function get($login,$key)
    {
        $ch= curl_init();
        curl_setopt($ch,CURLOPT_URL,"http://tank.iai-system.com/api/chat/get");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
            "login=".$login."&key=".$key.'');
        $output = curl_exec($ch);
        header('location: chat.php');
        exit();
        curl_close();
    }
    public function getAll()
    {
        $ch= curl_init();
        curl_setopt($ch,CURLOPT_URL,"http://tank.iai-system.com/api/chat/getAll");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        header('location: chat.php');
        exit();
        curl_close();
    }
















    public function getActive($login,$key)
    {
        $ch= curl_init();
        curl_setopt($ch,CURLOPT_URL,"http://tank.iai-system.com/api/user/getActive ");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
            "login=".$login."&key=".$key.'');
        $output = curl_exec($ch);
        header('location: chat.php');
        exit();
        curl_close();
    }
    public function editPass($login,$key, $new_password)
    {
        $ch= curl_init();
        curl_setopt($ch,CURLOPT_URL,"http://tank.iai-system.com/api/user/edit ");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
            "login=" . $_SESSION['login']."&key=".$_SESSION['key']."&new_password=".$_POST['password']);
         $output = curl_exec($ch);
    }
    public function status($login,$key, $status)
    {
        $ch= curl_init();
        curl_setopt($ch,CURLOPT_URL,"http://tank.iai-system.com/api/user/edit ");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
            "login=".$login."&key=".$key.'&status'.$status.'');
        $output = curl_exec($ch);
        curl_close();
    }


}