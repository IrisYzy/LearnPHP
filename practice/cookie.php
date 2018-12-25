
<?php
setcookie("user","cookie",time()*5);
if (isset($_COOKIE["user"]))
    echo "设置了 " . $_COOKIE["user"] . "!～<br>";
else
    echo "普通访客!<br>";
?>

<html>
<head>
<meta charset="utf-8">
<title>快学习吧～</title>
</head>
<body>



</body>
</html>
