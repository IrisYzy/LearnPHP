<?php
/**
 * Created by PhpStorm.
 * User: yuanzi
 * Date: 2018/12/20
 * Time: 下午3:13
 */


/**
 * http://php.net/manual/zh/reserved.variables.server.php
 * 学习 $_SERVER
 */
    #服务器

    #创建服务器数组信息
    $server = [
        "Host Server Name" => $_SERVER["SERVER_NAME"],      //learn.php.com
        "Server Software" => $_SERVER["SERVER_SOFTWARE"],   //nginx/1.15.5
        "Document Root" => $_SERVER["DOCUMENT_ROOT"],       ///Users/yuanzi/PhpstormProjects/learnphp
        "Http Host" => $_SERVER["HTTP_HOST"],               //learn.php.com
        "Script Name" => $_SERVER["SCRIPT_NAME"],           //phpsandbox/website2/server-info.php
        "Absolute Path" => $_SERVER["SCRIPT_FILENAME"],     //Users/yuanzi/PhpstormProjects/learnphp/phpsandbox/website2/server-info.php
        "Current Page" => $_SERVER["PHP_SELF"],             ///phpsandbox/website2/server-info.php
    ];

    echo "<br>".$server["Current Page"];
//    print_r($server);
    #创建客户端数组信息
    $client = [
        "Client System Info" => $_SERVER["HTTP_USER_AGENT"],
        //Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36

        "Client IP" => $_SERVER["REMOTE_ADDR"],
        //127.0.0.1

        "Remote Port" => $_SERVER["REMOTE_PORT"],
        //52854 实时更新
    ];

    echo "<br>".$client["Remote Port"];
?>




















