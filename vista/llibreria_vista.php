<html>
    <head>        
        <title>Menú Principal</title>
    </head>
    <body>
        <h1>Seleccioni opció:</h1>
        <form action="index.php" method="post">
            <select name="opcio">
                <option value="Llibres">Llibres</option>
                <option value="Autors">Autors</option>
            </select>
            <input type="submit" name="Submit">

<!--            --><?php
//                if($_POST["opcio"]=="Autors"){
//                    //Cridem a la vista d'autors:
//                    require("vista/autor_vista.php");
//                }
//                if($_POST["opcio"]=="Llibres"){
//                    //Cridem a la vista d'autors:
//                require("vista/llibre_vista.php");
//        }
//            ?>
            
            
            
        </form>
        <?php
            
        ?>
    </body>
</html>