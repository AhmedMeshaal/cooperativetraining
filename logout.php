<?php 
   
if (!isset ($_COOKIE['uid']) || $_COOKIE['uid']!="uid")
{
    header('Location: login.php');
        exit();
}
else
{
            setcookie('uid','uid',time()-5);
            header('Location: welcome.php');
            exit();
}

?>