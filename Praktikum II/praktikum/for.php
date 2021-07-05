<?php
// contoh satu

for ($i = 1; $i <= 10; $i++) {
    echo "$i";
}
echo "<br><br>";

// contoh duwa

for ($i = 1;; $i++) {
    if ($i > 10) {
        break;
    }
    echo "$i";
}
echo "<br><br>";

// contoh tiga

$i = 1;
for (;;) {
    if ($i > 10) {
        break;
    }
    echo "$i";
    $i++;
}
echo "<br><br>";

// contoh empat
for ($i = 1; $i <= 10; print "$i", $i++);
