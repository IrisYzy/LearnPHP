
<!--http://learn.php.com/phpsandbox/website2/index.php-->
<?php include "server-info.php" ?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>服务器与客户端的信息</title>
    <link rel="stylesheet" href="https://bootswatch.com/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>服务器端的配置信息</h1>
        <?php if ($server) : ?>
        <ul class="list-group">
            <?php foreach ($server as $key => $value) : ?>
            <li class="list-group-item">
                <strong><?php echo $key; ?>:</strong>
                <?php echo $value ?>
            </li>
            <?php endforeach ?>
        </ul>
        <?php endif; ?>

        <h1>客户端配置信息</h1>
        <?php if ($client): ?>
        <ul class="list-group">
            <?php foreach ($client as $key => $value) : ?>
            <li class="list-group-item">
                <strong><?php echo $key;?>:</strong>
                <?php echo $value; ?>
            </li>
            <?php endforeach; ?>

        </ul>
        <?php endif; ?>

    </div>

</body>

</html>