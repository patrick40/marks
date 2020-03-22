<?php
$url = explode("/", $_SERVER['QUERY_STRING']);

if (file_exists("public/include/".$url[0].".php")) {
    require_once("public/include/".$url[0].".php");
}
elseif($url[0] == ''){
    require_once("public/include/login.php");
}
else{
    if($url[0] != "admin"){
        require_once("public/include/404.php");
    }
}
?>