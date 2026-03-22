<?php

// === LOGGING SETUP ===
ini_set('log_errors', 1);
ini_set('error_log', '/home/ungarel1/public_html/backup_log.txt'); // Usar solo un archivo de log
error_log("=== Script started at " . date('Y-m-d H:i:s') . " ===");

// URL del endpoint
$url = 'https://ungarellimuebles.com.ar/send-backup-email';

// Ejecutar llamada cURL
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

if (curl_errno($ch)) {
    error_log('Error al ejecutar el backup: ' . curl_error($ch)); // Registrar el error en el log
} else {
    error_log("Backup ejecutado con éxito. Respuesta: " . $response); // Registrar el éxito en el log
}

curl_close($ch);

// === LOGGING SETUP END ===
error_log("=== Script finished at " . date('Y-m-d H:i:s') . " ===");

?>
