<?php
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES['file']['name']);
$extension = end($temp);
$file_type = $_FILES['file']['type'];
$type = array("image/gif", "image/jpeg", "image/png", "image/jpg", "image/x-png", "image/pjpeg");
if (in_array($file_type, $type) && in_array($extension, $allowedExts) && $_FILES['file']['size'] < 204800) {
    if ($_FILES['file']['error'] > 0) {
        echo "发生错误:" . $_FILES['file']['error'];
    }else{
        echo "文件名: " . $_FILES['file']['name'] . "<br />";
        echo "文件类型: " . $_FILES['file']['type'] . "<br />";
        echo "文件大小: " . $_FILES['file']['size'] . "<br />";
        echo "文件临时位置: " . $_FILES['file']['tmp_name'] . "<br />";
    }
}
