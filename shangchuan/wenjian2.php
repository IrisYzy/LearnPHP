<?php
//允许上传的图片后缀
$all = array("gif","jpg","jpeg","png");
 var_dump($_FILES['file']);
$temp = explode(".",$_FILES['file']['name']);   //把字符串分割为数组
var_dump($temp);
$info = end($temp);     //获取数组最后一个值
if($_FILES['file']['size']<204800   //size是大小，小于200kb
   && in_array($info,$all))         //检查数组中是否存在某个值
{     
    if($_FILES['file']['error']>0){
        echo "文件上传的错误信息: " . $_FILES['files']['error'] . "<br>";
    }else{
        if (file_exists('upload')) {    //判断文件目录是否存在
            if (file_exists("upload/".$_FILES['file']['name'])) {
                echo "<script>alert('文件存在')</script>";
            }else{
                move_uploaded_file($_FILES['fiel']['tmp_name'],"upload/".$_FILES['file']['name']);
            }


        }
    }

}