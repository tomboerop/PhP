<!DOCTYPE html>
<html>
    <head>
        <title>Homepage</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php
        $geld = 20;
        $drank = 25;
        $mijnleeftijd = 17;
        $nix18 = 18;
        
        
        echo"Komt een man bij de kassa met een fles drank die 25 euro kost.";
        if( $mijnleeftijd >= $nix18){
            echo"</br>hij mag deze drank WEL kopen";
        }else{
            echo"</br>hij mag deze drank NIET kopen";
        }
        
        if ( $geld <= $drank){
            echo"</br>Hij kan deze drank niet betalen.";
        }else{
            echo"</br>Hij kan deze drank betalen.";
        }
        echo"</br>De man verlaat de winkel";
        ?>
    </body>
</html>