<?php
// mở file



$file = fopen('hello.txt','w+');
fwrite($file, 'test ghi file');
fclose($file);
// đọc nội dung file
if (file_exists('test.txt')) {
    $file2 = fopen('test.txt', 'r+');
    while (!feof($file2)) {
        echo fgets($file2) . '<br>'; //đọc từng dòng trong file
    }
    fclose($file2);
}

// đọc từng ký tự trong file với hàm fgetc
if (file_exists('test.txt')) {
    $file2 = fopen('test.txt', 'r+');
    while (!feof($file2)) {
        echo fgetc($file2) . '<br>'; //đọc từng dòng trong file

    }

    fclose($file2);
}

?>

