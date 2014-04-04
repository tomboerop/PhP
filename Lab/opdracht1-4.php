<!DOCTYPE html> 
<html lang="nl"> 
    <head> 
        <title>Mijn php-script</title> 
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head> 
    <body> 
        <?php
        $naam = "Carl";
        $adres = "Kruislaan 111";
        $woonplaats = "Utrecht";
        $naw = $naam . $adres . $woonplaats;
        //resultaat "Carl Kruislaan 111 Utrecht"
        echo("</br>Gegevens: $naw");
        echo("</br>Salaris specificatie<br />maand: november jaar:2010");
        echo("</br>plaats:$woonplaats");
        echo("</br>Algemene gegevens:");
        
        
        $werkdagen = 5;
        echo("<br />werkdagen:" . $werkdagen);
        
        $uurtarief = 13.432;
        echo("<br />uutarief is:" . $uurtarief);
        
        printf("<br />uurtarief is: %.2f", $uurtarief);
        
        $uren = 45.6;
        echo ("</br> aantal uren is:" . intval($uren));
        
        $salaris = uren * uurtarief;
        printf("salaris is: %.2f", $salaris);
        
        printf("<br />aantal werkdagen is: %.1f", floatval($werkdagen));
        
        $singel = true;
        $sportief = true;
        echo("<br/> singel:$singel sportief:$sportief ");
        ?> 
    </body> 
</html>