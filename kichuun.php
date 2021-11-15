<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>第十屆術法大比-報名</title>
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
            <?php 
                include "pp.php";
                if(@$_POST["userName"]=="")
                {
                    echo "<h1>請寫上姓名<h1>";
                    die ("");
                }
                else if(@$_POST["userNickname"]=="")
                {
                    echo "<h1>請寫上稱號<h1>";
                    die ("");
                }
                else if(@$_POST["userHome"]=="")
                {
                    echo "<h1>請寫上門派<h1>";
                    die ("");
                }
                else if(@$_POST["userPhone"]=="")
                {
                    echo "<h1>請寫上通訊號<h1>";
                    die ("");
                }
                else if(!PhoneTF($_POST["userPhone"]))
                {
                    echo "<h1>通訊號不正確<h1>";
                    die ("");
                }
                else if(@$_POST["userAge"]=="")
                {
                    echo "<h1>請寫上修為<h1>";
                    die ("");
                }
                else if(@$_POST["userPeo"]=="")
                {
                    echo "<h1>請寫上同行人數<h1>";
                    die ("");
                }
                

                $str5=file_put_contents("save.txt", "",FILE_APPEND);
                            
                if(!@$sf=fopen("save.txt","a+"))
                {
                    echo "<h1>error<h1>";
                    die("");
                }
                $i=0;
                $l=1;
                while($str0=fgets($sf))
                    {
                        $i++;
                        if($i%9==0)
                        {
                            $l++;
                        }
                    }
                $mes="報名者資料：\n\n序號：".$l."\n姓名：".$_POST["userName"]."\n稱號：".$_POST["userNickname"]."\n門派：".$_POST["userHome"]."\n通訊號：".$_POST["userPhone"].
                    "\n修為：".$_POST["userAge"]."\n同行人數：".$_POST["userPeo"]."\n";
                fputs($sf,$mes);
                @fclose($sf);
                echo " <h4> 序號：00000", $l,"<h4><h1>報名成功，請靜候通知<h1>";
            ?>
        </div>
    </div>
</body>
</html>