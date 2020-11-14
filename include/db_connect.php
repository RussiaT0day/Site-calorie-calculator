


<?php


$link = mysqli_connect("localhost", "admin", "123", "news");

/* проверяем соединение */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>
