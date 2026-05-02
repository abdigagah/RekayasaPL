<?php

// FOREACH LOOP
// digunakan untuk looping array

$buah = ["Mangga", "Jeruk", "Apel", "Pisang"];

foreach ($buah as $item) {
    echo "Buah: $item <br>";
}

echo "<br>";

// foreach dengan index
foreach ($buah as $index => $item) {
    echo "Index ke-$index = $item <br>";
}

?>