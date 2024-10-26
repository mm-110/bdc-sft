<!DOCTYPE html>
<html lang="en">
<head>
    <title>Test</title>
</head>
<body>
    <h1>SFT</h1>

    <?php
    include_once('database.php');
    $config = include('config.php');

    try {
        $db = new Database($config);
        $stazioni = $db->getStazioni();
        $treni = $db->getTreni();
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
    ?>

    <?php include('form_stazione.php'); ?>
    <?php include('form_treno.php'); ?>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['submit_stazione']) && isset($_POST['stazione'])) {
            $id_stazione = $_POST['stazione'];
            foreach ($stazioni as $stazione) {
                if ($stazione['ID_STAZIONE'] == $id_stazione) {
                    echo "<h2>Dettagli Stazione</h2>";
                    echo "ID: " . $stazione['ID_STAZIONE'] . "<br>";
                    echo "Nome: " . $stazione['NOME'] . "<br>";
                    echo "Distanza (km): " . $stazione['DISTANZA_KM'] . "<br>";
                    break;
                }
            }
        }

        if (isset($_POST['submit_treno']) && isset($_POST['treno'])) {
            $id_treno = $_POST['treno'];
            foreach ($treni as $treno) {
                if ($treno['ID_TRENO'] == $id_treno) {
                    echo "<h2>Dettagli Treno</h2>";
                    echo "ID: " . $treno['ID_TRENO'] . "<br>";
                    echo "Codice: " . $treno['CODICE'] . "<br>";
                    break;
                }
            }
        }
    }
    ?>
</body>
</html>
