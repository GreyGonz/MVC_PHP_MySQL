<form action="index.php" method="post">
    <h2>Autors:</h2>
    <table>
    <tr><th>Codi</th><th>Nom</th><th>Nacionalitat</th></tr>
        <?php
        foreach ($llistat as $autor){
            echo "<tr><td>".$autor["codi"]."</td><td>".$autor["nom"]."</td><td>".$autor["nacionalitat"]."</td><td><input type='Radio' name='Registre' value=".$autor["codi"]."></td></tr>";
        }
    ?>
    </table>
    <P>
    <input type="Submit" name="Submit" value="EsborrarAutor">
    <input type="Submit" name="Submit" value="EditarAutor">
    <input type="Submit" name="Submit" value="MostrarAutor">
    <input type="Submit" name="Submit" value="CrearAutor">
</form>
