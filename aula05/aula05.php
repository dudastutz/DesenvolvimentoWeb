<?php
    $texto = 'Maria Eduarda Stutz';

    echo 'CRC32: ', crc32($texto), '</br>';
    echo 'MD5..: ', md5($texto), '</br>';
    echo 'SHA1.: ', sha1($texto), '</br>';
?>