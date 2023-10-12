<?php
session_start();
if( isset($_SESSION["memId"]) ) {
    session_unset();
    echo json_encode(["msg"=>"已登出"]);
}
?>