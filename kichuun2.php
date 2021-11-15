<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>第十屆術法大比-管理</title>
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
                    <div class="shape-ex11"><p><a href="#Applicant">報名者</a></p></div>
                    <div class="shape-ex11"><p><a href="#message">留言</a></p></div>
                </nav>
            </header>
        </div>
        <div class="content">
            <div id="Applicant">
                <?php
                    include "pp.php";

                    if(NumberTF($_POST["userNum"])&&password($_POST["userPhone"]))
                    {
                        $str=file_put_contents("save.txt", "",FILE_APPEND);
                                    
                        if(!@$sf=fopen("save.txt","r"))
                        {
                            echo "<h1>error<h1>";
                            die("");
                        }
                        echo "<h1>報名者</h1>";
                        $i=0;
                        while($str0=fgets($sf))
                        {
                            echo "$str0<br>";
                            $i++;
                            if($i%9==0)
                            {
                                echo "<hr>";
                            }
                        }
                        @fclose($sf);

                    }
                    else if (!NumberTF($_POST["userNum"])&&!password($_POST["userPhone"]))
                    {
                        echo "<h1>編號及密鑰錯誤<h1>";
                        die("<br>");
                    }
                    else if(!password($_POST["userPhone"])&&NumberTF($_POST["userNum"]))
                    {
                        echo "<h1>密鑰錯誤<h1>";
                        die("<br>");
                    }
                    else
                    {
                        echo "<h1>編號錯誤<h1>";
                        die("<br>");
                    }
                ?>
            </div>
            <div id="message">
                <?php
                    $str2=file_put_contents("saveTalk.txt", "",FILE_APPEND);
                                    
                    if(!@$sk=fopen("saveTalk.txt","r"))
                    {
                        echo "<h1>error<h1>";
                        die("");
                    }
                    echo "<h1>留言</h1>";
                    $j=0;
                    while($str3=fgets($sk))
                    {
                        echo "$str3<br>";
                        $j++;
                        if($j%5==0)
                        {
                            echo "<hr>";
                        }
                    }
                    @fclose($sk);
                ?>
            </div>
        </div>
    </div>
</body>
</html>