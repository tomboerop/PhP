<!DOCTYPE html> 
<html lang="nl"> 
    <head> 
        <title>Mijn php-script</title> 
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head> 
    <body> 
        <?php
        $merk = " Toshiba Satellite" ;
        $model = " A100";
        $os = "Windows XP";
        $voorraad = 80;
        $prijs = 999;
        $totaal = 0;
        $totaal += $prijs;
        
        echo("<table border='1'> " . "
        <caption>
        <strong>SML laptops</strong>
        </caption>
        <thead>
        <tr><th>Merk</th>Model</th><th>Operating system</th><th>Voorraad</th><th>prijs</th></tr>
        <thead>
        <tbody>
        <tr>
        <td>" . $merk . "</td>" .
        "<td>" . $model . "</td>" .
        "<td>" . $os . "</td>" .
        "<td>" . $voorraad . "</td>" .
        "<td>" . $prijs . "</td>" .
        "</tr>
        <tfoot>
        <tr><td> colspan= 4>Totaal</td><td>" . $totaal . "
        </td></tr></tfoot></table>");
        ?> 
    </body> 
<html>