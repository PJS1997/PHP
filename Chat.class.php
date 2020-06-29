<?php
Class Chat
//nowy
{
    public $ch;
    public function __construct()
    {
        $this->ch = curl_init($link);
        curl_setopt($this->ch, CURLOPT_URL, $link);
        curl_setopt($this->ch,CURLOPT_HEADER, 0);
        curl_setopt($this->ch,CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($this->ch,CURLOPT_POST, 1);

    }

    public function createConversation($nazwa)
    {
        curl_setopt($this->$ch, CURLOPT_POSTFIELDS,
            "login=".$_SESSION['login']."&key=".$_SESSION['key']."&name=".$nazwa);
        $output = curl_exec($this->ch);
        $zm = json_decode($output,true);
        if (is_array($zm))
        {
            return $zm;
        }
        else
        {
            return 1;
        }
    }
    public function  returnConversation()
    {
        curl_setopt($this->$ch, CURLOPT_POSTFIELDS,
            "login=".$_SESSION['login']."&key=".$_SESSION['key']);
        $output = curl_exec($this->ch);
        $zm = json_decode($output,true);
        if (is_array($zm))
        {
            return $zm;
        }
        else
        {
            return 1;
        }

    }
    public function activeList()
    {
        $output = curl_exec($this->ch);
        $zm = json_decode($output,true);
        if (is_array($zm))
        {
            return $zm;
        }
        else
        {
            return 1;
        }

    }
    public function leave($chat_id)
    {
        curl_setopt($this->ch, CURLOPT_POSTFIELDS,
            "login=".$_SESSION['login']."&key=".$_SESSION['key']."&chat_id=".$chat_id);
        $output = curl_exec($this->ch);
        $zm = json_decode($output,true);
        if (is_array($zm))
        {
            return $zm;
        }
        else
        {
            return 1;
        }
    }
    public function Send($chat_id,$message)
    {
        curl_setopt($this->ch, CURLOPT_POSTFIELDS,
            "login=".$_SESSION['login']."&key=".$_SESSION['key']."&chat_id=".$chat_id."&message=".$message);
        $output = curl_exec($this->ch);
        $zm = json_decode($output,true);
        if (is_array($zm))
        {
            return $zm;
        }
        else
        {
            return 1;
        }
    }
    public function Show()
    {
        curl_setopt($this->ch, CURLOPT_POSTFIELDS,
            "login=".$_SESSION['login']."&key=".$_SESSION['key']);
        $output = curl_exec($this->ch);
        $zm = json_decode($output,true);
        if (is_array($zm))
        {
            return $zm;
        }
        else
        {
            return 1;
        }
    }

}