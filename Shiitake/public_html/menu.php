<!DOCTYPE html>
<html>
    <head>
        <title>Меню</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="navBG/NavCSS/StyleNav.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/styleContent.css" rel="stylesheet" type="text/css"/>
            <style>
                #spongeTopM{
                    background-color: #AC8359;
                    cursor: pointer;
                    border-top-left-radius: 100px;
                    border-top-right-radius: 100px;
                    border-style:hidden;
                    width: 100px;
                    height: 30px;
                    margin-left: 210px;
                    margin-top: -160px;
                    transition: all .3s ease;
                }
                #stalkM{
                    border-style:hidden;
                    border-bottom-left-radius: 10px;
                    border-bottom-right-radius: 10px;
                    margin-top: 26px;
                    margin-left: 35px;
                    width: 30px;
                    height: 30px;
                    background-color:#FFFFE0;  
                }
                #text2M{
                    margin-top:-16px;
                    margin-left:29px
                }
                #point1M, #point2M, #point3M, #point4M, #point5M, #point6M, #point7M {
                    display:block; 
                }
                #firstTopM, #secondTopM{
                    border-style:none;
                }
            </style>
    </head>
    <body>
 <header>
            <div class="header">
            <?php   
                require ("./logo/logoBG/logo.php");
            ?>
            <?php
            require_once 'Mobile_Detect.php';
            $detect = new Mobile_Detect;
            if($detect->isiOS()){
                echo 'iOS';
            }
            else {
                require("./navBG/navBG.php");
                require("./navBG/navBGMobile.php");
            } 
            ?>
            </div>
        </header>
        <section>
        Менюто на ресторанта
        </section>
        <footer>
            <?php
                require ("./footer/footer.php");
            ?>
        </footer>
    </body>
</html>