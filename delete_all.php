<?php
  function removeDirectory($dir) {
    if ($objs = glob($dir."/*")) {
        foreach($objs as $obj) {

            is_dir($obj) ? removeDirectory($obj) : unlink($obj);

        }
    }
    rmdir($dir);
}
$dir = '22/55';
echo "удаляю директорию $dir";
removeDirectory($dir);

