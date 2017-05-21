<?php
    $dbName = "loveboard";
    $conn = mysql_connect("", "adminifbL2ld", "") or die("Cannot connect to database."); // server, username, password
    $flag = mysql_select_db($dbName, $conn);

    function toHtmlcode($content)
    {
        return $content = str_replace("\n","<br>",str_replace(" ", "&nbsp;", $content));
    }
?>