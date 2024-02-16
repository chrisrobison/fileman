#!/usr/local/bin/php
<?php
$exe = array_shift($argv);
while ($file = array_shift($argv)) {
    print $file . ": ".mime_content_type($file)."\n";
}
?>
