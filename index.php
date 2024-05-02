<?php

$phpFiles = [];
foreach (scandir(getcwd()) as $file) {
    if ($file !== '.' && $file !== '..' && $file !== 'index.php' && is_file($file) && pathinfo($file, PATHINFO_EXTENSION) == 'php') {
        $phpFiles[] = $file;
    }
}
echo '<div style="margin:100px;">';
foreach ($phpFiles as $file) {
    $fileName = str_replace('-', ' ', pathinfo($file, PATHINFO_FILENAME));
    echo '<a href="'.$file . '">' . ucwords($fileName) . '</a><br/>';
}

echo '</div>';

