<html>
    <head>
        <title>Pernyataan break</title>
    </head>
    <body>
        <?php
            for($bilangan=1;$bilangan<=10;$bilangan++){
                print("$bilangan <br>");
                if($bilangan==7){
                    print("break <br>");
                    break;
                }
            }
        ?>
    </body>
</html>