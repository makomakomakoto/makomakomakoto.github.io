<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>第十屆術法大比-留言</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="drop"></div>
    <div class="drop2"></div>
    <div class="drop3"></div>
    <div class="drop4"></div>
    <div class="container">
        <div class="header1">
            <header>
                <nav class="aaa">
                    <div class="shape-ex11"><p><a href="index.html">第十屆術法大比</a></p></div>
                </nav>
            </header>
        </div>
        <div class="content">
            <div id="Applicant">
            <?php 
                $email= filter_var($_POST["userMail"], FILTER_SANITIZE_EMAIL);
                if(@$_POST["userName"]==""&&@$_POST["userMail"]==""&&@$_POST["userMail"]=="")
                {
                    echo "<h1>請寫上所需內容</h1>";
                    die ("");
                }
                else if(@$_POST["userName"]=="")
                {
                    echo "<h1>請寫上姓名</h1>";
                    die ("");
                }
                else if(@$_POST["userMail"]=="")
                {
                    echo "<h1>請寫上信箱</h1>";
                    die ("");
                }
                else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
                {
                    echo "<h1>信箱不正確</h1>";
                    die ("");
                }
                else if(@$_POST["userTalk"]=="")
                {
                    echo "<h1>請寫上欲留之言</h1>";
                    die ("");
                }
                $pattern = array(
                    '/ /',//半角下空格
                    '/　/',//全角下空格
                    '/\r\n/',//window 下换行符
                    '/\n/',//Linux && Unix 下换行符
                );
                $replace = array('&nbsp;','&nbsp;','<br />','<br />');
                $_POST["userTalk"] = preg_replace($pattern, $replace, $_POST["userTalk"]);

                $str2=file_put_contents("saveTalk.txt", "",FILE_APPEND);
                            
                if(!@$sk=fopen("saveTalk.txt","a+"))
                {
                    die("error");
                }
                $skc="留言者資料：\n\n姓名：".$_POST["userName"]."\n信箱：".$_POST["userMail"]."\n留言內容：".$_POST["userTalk"]."\n";
                fputs($sk,$skc);
                @fclose($sk);
                echo "<h1>留言成功</h1>";
            ?>
        </div>
    </div>
</body>
</html>