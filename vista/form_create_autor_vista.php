<form action="index.php" method="post">
    <h3>Nom:</h3><P>
    <input type="text" name="nom" value="<?php echo $autor["nom"] ?>"><P/>
    <h3>Nacionalitat</h3><P/>
    <input type="text" name="nacionalitat" value="<?php echo $autor["nacionalitat"] ?>"><P/>
    <h3>Descripcio</h3><P/>
    <input type="text" name="descripcio" value="<?php echo $autor["descripcio"] ?>"><P/>
    <input type="Submit" name="Submit" value="StoreAutor">
    <input type="Submit" name="Submit" value="Cancela">
</form>
