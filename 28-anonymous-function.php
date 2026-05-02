<?php

// ANONYMOUS FUNCTION
// function tanpa nama, biasanya disimpan di variabel

$salam = function ($nama) {
    return "Halo $nama, selamat belajar PHP!";
};

echo $salam("Abdi");
echo $salam("Budi");

?>