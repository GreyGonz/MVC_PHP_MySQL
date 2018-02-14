<form action="index.php" method="post">
    <h3>Codi:</h3><P/>
    <input type="text" name="codi" value="<?php echo $llibre["codi"] ?>" readonly><P/>
    <h3>ISBN:</h3><P/>
    <input type="text" name="isbn" value="<?php echo $llibre["isbn"] ?>"><P/>
    <h3>Any publicació:</h3><P/>
    <input type="text" name="any_publicacio" value="<?php echo $llibre["any_publicacio"] ?>"><P/>
    <h3>Titol:</h3><P>
    <input type="text" name="titol" value="<?php echo $llibre["titol"] ?>"><P/>
    <h3>Descripcio</h3><P/>
    <input type="text" name="descripcio" value="<?php echo $llibre["descripcio"] ?>"><P/>
    <h3>Editorial:</h3><P/>
    <input type="text" name="editorial" value="<?php echo $llibre["editorial"] ?>"><P/>
    <h3>Lloc publicació:</h3><P/>
    <input type="text" name="lloc_publicacio" value="<?php echo $llibre["lloc_publicacio"] ?>"><P/>
    <input type="Submit" name="Submit" value="ActualitzaLlibre">
    <input type="Submit" name="Submit" value="Cancela">
</form>
