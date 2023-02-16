<?php
function scanFile($dir, $namaFile)
{
    $status = 0;
    $scan = scandir($dir);
    foreach ($scan as $files) {
        if (strstr($files, $namaFile . ".php")) {
            $status = 1;
        }
    }
    return $status;
}
