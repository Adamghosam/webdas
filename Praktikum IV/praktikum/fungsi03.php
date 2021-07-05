<?php
function luas_lingkaran($jari)
{
    return 3.14 * $jari;
}
// pemangilan function

$r = 10;
echo "Luas Lingkaran dengan jari-jari $r =";
echo luas_lingkaran($r);
