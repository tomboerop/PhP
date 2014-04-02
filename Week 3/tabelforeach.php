<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body> 
        <?php
        $open = fopen("data.csv" , "r");
        
        while($record = fgetcsv($open,1000,";")){
        ?>
        <table>
            <tr>
                <th>Voornaam<th>
                <th>Achternaam</th>
                <th>Straat</th>
                <th>Woonplaats</th>
            </tr>
            <tr>
                <td><?php echo $record[0][1];?></td>
                <td><?php echo $record[1][2];?></td>
                <td><?php echo $record[2][3];?></td>
                <td><?php echo $record[3][4];}?></td>
                </td>
                </tr>
        </table>
    </body>
</html>