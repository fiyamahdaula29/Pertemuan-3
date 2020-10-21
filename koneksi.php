<?php
    $host   = "sql300.epizy.com";
    $user   = "epiz_26771501";
    $psw    = "v7c5WB7wy29";
    $db_name= "epiz_26771501_pabweb";
    $kon = mysqli_connect($host,$user,$psw,$db_name);

    if (!$kon){
        die ('gagal terhubung dengan database:'.mysqli_connect_error());
    }

?>