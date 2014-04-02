<!DOCTYPE html>
<html>
    <head>
        <title>Homepage</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php
        
        function drank($leeftijd , $geld){

            if($geld >= 15 && $leeftijd >= 18){
                echo"hij mag/kan deze drank kopen.";
            }else{
                echo"hij mag/kan niet deze drank kopen";
            }
        }
        drank(19, 15);
        
        ?>
    </body>
</html>     