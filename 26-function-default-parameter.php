<?php

// DEFAULT PARAMETER
// kalau argumen tidak diisi, akan memakai nilai default

function sapa($nama = "User")
{
    echo "Halo, $nama! <br>";
}

sapa("Abdi");
sapa(); // otomatis pakai default

?>