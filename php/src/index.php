<?php
echo 'helloworld';

$mysqli = new mysqli('db', 'root', 'root', 'study');
if($mysqli->connect_error) {
    echo '接続失敗'.PHP_EOL;
    exit();
} else {
    echo '接続成功'.PHP_EOL;
}
