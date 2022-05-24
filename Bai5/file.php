<?php
// mở file
$file = fopen('hello.txt','w+');
fwrite($file, 'test ghi file');
fclose($file);
// đọc nd file


$file2 = fopen('test.txt','r+');
while (!feof($file2)) {
    echo fgets($file2).'<br>'; //đọc từng dòng trong file

}

fclose($file2);


?>

