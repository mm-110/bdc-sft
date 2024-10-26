<form method="post" action="index.php">
    <label for="stazione">Seleziona una stazione:</label>
    <select name="stazione" id="stazione">
        <?php foreach ($stazioni as $stazione): ?>
            <option value="<?php echo $stazione['ID_STAZIONE']; ?>">
                <?php echo $stazione['NOME']; ?>
            </option>
        <?php endforeach; ?>
    </select>
    <input type="submit" name="submit_stazione" value="Visualizza">
</form>
