<form action="index.php" method="post">
    <h2>Llibres:</h2>
    <table>
    <tr><th>Codi</th><th>Titol</th></tr>
        <?php
        foreach ($llistat as $llibre){
            echo "<tr><td>".$llibre["codi"]."</td><td>".$llibre["titol"]."</td><td><input type='Radio' name='Registre' value=".$llibre["codi"]."></td></tr>";
        }
        ?>
    </table>
    <P>
    <input type="Submit" name="Submit" value="EsborrarLlibre">
    <input type="Submit" name="Submit" value="EditarLlibre">
    <input type="Submit" name="Submit" value="MostrarLlibre">
    <input type="Submit" name="Submit" value="CrearLlibre">
</form>