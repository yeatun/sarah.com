<?php
    $is_localhost=true;
    $local_folder_name = "sarah.com";
    define("root", $is_localhost?"http://".$_SERVER['SERVER_NAME']."/".$local_folder_name:"https://".$_SERVER['SERVER_NAME']);
?>
