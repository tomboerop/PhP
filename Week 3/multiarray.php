        <?php
        $list = array (
            array("Jan", "De Leeuw", "45"),
            array("Henk", "Haak", "12"),
            array("Piet", "Zaman", "44")
        );
        
        $fp = fopen("data.csv", "w");
        
        foreach($list as $fields){
            fputcsv($fp, $fields);
        }
        echo "succes";
        fclose($fp);
        ?>
