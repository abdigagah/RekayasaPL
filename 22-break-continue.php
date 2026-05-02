<?php

echo "=== Contoh BREAK ===" . 
PHP_EOL;

for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break; // berhenti ketika i = 5
    }
    echo "Angka: $i" . PHP_EOL;
}

echo PHP_EOL;

echo "=== Contoh CONTINUE ===" . PHP_EOL;

for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue; // skip angka 5
    }
    echo "Angka: $i" . PHP_EOL;
}
