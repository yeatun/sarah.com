<?php
    $is_localhost=true;
    $local_folder_name = "sahara";
    define("root", $is_localhost?"http://".$_SERVER['SERVER_NAME']."/".$local_folder_name:"https://".$_SERVER['SERVER_NAME']);
?>