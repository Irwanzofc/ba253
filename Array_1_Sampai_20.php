<?php
$angka = range(1, 20);

foreach ($angka as $item) {
    if ($item % 3 == 0) {
        echo $item . " ";
    }
}
?>