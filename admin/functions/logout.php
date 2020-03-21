<?php
session_start();
session_destroy();
echo "
<div>
    <center>
        <img src='../loading.gif' />
        <span class='sr-only'><h4 style='color: green; font-style: italic'>Redirecting ....</span>
    </center>
</div>
";
header("Location: ../../");
?>