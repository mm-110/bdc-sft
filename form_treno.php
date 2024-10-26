<form method="post" action="index.php">
    <label for="treno">Seleziona treno:</label>
    <select name="treno" id="treno">
        <?php foreach ($treni as $treno): ?>
            <option value="<?php echo $treno['ID_TRENO']; ?>">
                <?php echo $treno['CODICE']; ?>
            </option>
        <?php endforeach; ?>
    </select>
    <input type="submit" name="submit_treno" value="Visualizza">
</form>
