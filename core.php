<?php
$in = $_REQUEST;
$basedir = "/home/cdr/domains/cdr2.com/www";

if (!isset($in['d'])) $in['d'] = "/";
$mypath = $basedir . $in['d'];

/**
 * TODO: Migrate to pure HTML view with data acquired via API calls
 *       The only PHP file should be the api backend and even that 
 *       should be migrated to node or python
 */

// Check if directory and grab list of files (should be moved out of html and into api)
if (is_dir($mypath)) {
    $globpath = preg_replace("|//|", "/", $mypath . '/*');

    $files = glob($globpath);
} else if (preg_match("/\.php$/", $mypath)) {
    include($mypath);
   exit; 
} else if (is_file($mypath)) {
    $prepend = "";
    $mime = trim(`file -b --mime-type {$mypath}`);
    if ($mime == "text/html") {
        $url = "https://".$_SERVER['SERVER_NAME'].$in['d'];
        $prepend = "<base href='{$url}'>\n";
    }
    $x = file_get_contents($mypath);
    header("Content-Type: " .  $mime);
    print $prepend .$x;
    exit;
}

?>
