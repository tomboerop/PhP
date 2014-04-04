<!DOCTYPE html> 
<html lang="nl"> 
    <head> 
        <title>Mijn php-script</title> 
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head> 
    <body> 
        <?php
$stad = array("DE" => "Berlijn", "BE" => "Brussel", "FR" => "Parijs", "GB" => "London") ;
$stad["DE"] = "Nieuwerkerk";
echo("<h3>hash-arrays</h3>");
echo("<br>" . $stad["DE"] . "<br>" . $stad["BE"] . "<br>" . $stad["FR"] . "<br>" . $stad["GB"]);

print_r($stad);
?> 
    </body> 
</html>