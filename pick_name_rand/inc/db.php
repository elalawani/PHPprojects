<?php

error_reporting(0);
mysqli_report(MYSQLI_REPORT_OFF);

$conn = mysqli_connect('localhost', 'root','password','project');


if (!$conn) {
    echo 'Error : ' . mysqli_connect_error();
}

