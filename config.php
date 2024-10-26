<?php
if ($_SERVER['HTTP_HOST'] == 'localhost') {
    // Configurazione locale
    return [
        'db_host' => "localhost",
        'db_user' => "root",
        'db_pass' => "",
        'db_name' => "sft",
    ];
} else {
    // Configurazione di produzione
    return [
        'db_host' => "98.72.00.00", // TODO: inserisci l'host del database fornito dall'università
        'db_user' => "username_produzione",
        'db_pass' => "password_produzione",
        'db_name' => "nome_database_produzione",
    ];
}
?>
