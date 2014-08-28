<!DOCTYPE html>
<html>
    <head>
        <title>Шийтаке</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="navBG/NavCSS/StyleNav.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/styleContent.css" rel="stylesheet" type="text/css"/>
        <style>
            #spongeTop{
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
            #stalk{
                border-style:hidden;
                border-bottom-left-radius: 10px;
                border-bottom-right-radius: 10px;
                margin-top: 26px;
                margin-left: 35px;
                width: 30px;
                height: 30px;
                background-color:#FFFFE0;  
            }
            #text1{
                margin-top:-16px;
                margin-left:22px
            }
            #point1, #point2, #point3, #point4, #point5, #point6, #point7 {
                display:block; 
            }
            #firstTopI, #secondTopI{
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
            <?php
                require ("./ContentText/shiitake/BG/shiitakeBG.php");
            ?>
        </section>
        <footer>
            <?php
                require ("./footer/footer.php");
            ?>
        </footer>
    </body>
</html>
