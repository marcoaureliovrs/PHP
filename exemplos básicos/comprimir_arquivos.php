<?php
$data = implode("", file("mgorak.txt"));
$gzdata = gzencode($data, 9);
$fp = fopen("mgorak.txt.gz", "w");
fwrite($fp, $gzdata);
fclose($fp);
?>
