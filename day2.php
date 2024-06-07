<?php

$age = 21;
$gender = "Woman";

if ($age > 17) {
    switch ($gender) {
        case 'Woman':
            echo "Tipe A";
            break;
        case 'Man':
            echo "Tipe B";
            break;
        default:
            echo "Jenis kelamin tidak diketahui";
            break;
    }
}
else {
    echo "Belum cukup umur";
}

?>
