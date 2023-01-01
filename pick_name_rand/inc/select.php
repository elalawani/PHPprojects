<?php
/** @var TYPE_NAME $conn */

$sql = "SELECT * FROM users ORDER BY rand() LIMIT 1";
$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
