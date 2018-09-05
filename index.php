<?php
function uncompress($srcName, $dstName) {
    $sfp = gzopen($srcName, "rb");
    $fp = fopen($dstName, "w");

    while ($string = gzread($sfp, 4096)) {
        fwrite($fp, $string, strlen($string));
    }
    gzclose($sfp);
    fclose($fp);
}
//uncompress("D:/xampp/htdocs/misc/unzip/test.zip", "D:/xampp/htdocs/misc/unzip/unzipfiles");
uncompress("http://localhost/misc/unzip/test.zip", "D:/xampp/htdocs/misc/unzip/");
?>