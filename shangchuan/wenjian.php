<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>文件上传</title>
</head>
<body>
    <form action='wenjian2.php' method='post' enctype='multipart/form-data'>
    <div>
        <label for="file">文件名：</label>
        <input type="file" name="file" id="file" class="c"><br>
        <input type='submit' name="submit" value="提交" class="b">
    </div>
        
    </form>
</body>
</html>