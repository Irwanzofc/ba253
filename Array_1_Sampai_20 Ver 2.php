<?php
$angka = range(1, 40);

foreach ($angka as $item) {
    if ($item % 3 == 0) {
        echo $item . " ";
    }
}
?>