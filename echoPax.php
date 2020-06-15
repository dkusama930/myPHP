<?php

if (isset($_GET['hoge'])){
    echo $_GET['hoge'];
} else if (isset($_POST['fuga'])){
    echo $_POST['fuga'];
} else {
    echo 'can not get a price with either get or post';
}