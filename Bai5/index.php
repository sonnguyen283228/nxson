<?php
session_start();

$_SESSION['user'] = 'T3H';
$_SESSION['email'] = 'nxson@gmail.com';
if (isset($SESSION['user'])) {

}

if (isset($_SESSION['email'])) {

}
if (isset($_SESSION['email'])) {
    $_SESSION['number'] += 1;
    print_r($_SESSION['number']);
} else {
    $_SESSION['number'] = 1;

}


?>

<html lang="vi">
<head>
</head>
<body>
    <h1>Bài 5<h1>
    <a href= "/Bai5/page1.php">Trang 1</a>
    <a href= "/Bai5/page2.php">Trang 2</a>



</body>


</html>