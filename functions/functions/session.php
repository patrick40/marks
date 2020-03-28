<?php
session_start();
function errors(){
    if(isset($_SESSION['err'])){
        echo "<div class='alert alert-danger'>".$_SESSION['err']."</div>";
        $_SESSION['err'] = null;
    }
}
function message(){
    if(isset($_SESSION['msg'])){
        echo "<div class='alert alert-success'>".$_SESSION['msg']."</div>";
        $_SESSION['msg'] = null;
    }
}
?>