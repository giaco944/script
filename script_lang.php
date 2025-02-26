<?php
// Définit le type de contenu en texte brut pour éviter l'exécution HTML
header("Content-Type: text/plain");

// Exécute la commande 'ls' ou 'dir' selon l'OS
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    system("dir");
} else {
    system("ls -la");
}
?>
