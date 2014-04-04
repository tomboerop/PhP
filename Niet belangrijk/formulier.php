
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body> 
        <?php
       // if(isset($_POST["naam"])){
            //echo $_POST["naam"] . "<br/>";
            //echo $_POST["achternaam"] . "<br/>";
            //echo $_POST["telefoon"] . "<br/>";
            //echo $_POST["email"] . "<br/>";
            //echo $_POST["woonplaats"] . "<br/>";
       // }
        
        
        if(empty($_POST["naam"])){
            echo"Je bent naam vergeten in te vullen!";
        }else{
            echo$_POST["naam"] . "<br/>";
        }
        
        if(isset($_POST["achternaam"])){
            echo$_POST["achternaam"] . "<br/>";
        }else{
            echo"Je bent achternaam vergeten in te vullen!";
        }
        
        
        
        
        
        
        
        
        
        
        
        
        if(empty($_POST["naam"])){
           ?>
        <form action="formulier.php" method="POST">
            Naam:<input type="text" name="naam"><br>
            Achternaam:<input type="text" name="achternaam"><br>
            Telefoon:<input type="text" name="telefoon"><br>
            E-Mail:<input type="text" name="email"><br>
            Woonplaats:<input type="text" name="woonplaats"><br>
            <input type="submit" name="submit"> <br> 
        </form>
        <?php
        }
       ?>  
    </body>
</html>
