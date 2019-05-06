<?php
function upload($photo_tmp, $photo_path) {
    define('SITE_ROOT', __DIR__);
    $path = SITE_ROOT . "/" .$photo_path;
//    $photo_path = "uploads/dishes/" . $photo_name;
    move_uploaded_file($photo_tmp, $path);
}

function delete($photo_path) {
    define('SITE_ROOT', __DIR__);
    echo SITE_ROOT;
//    die ($photo_path);
    unlink(SITE_ROOT . "/" . $photo_path);
}
?>
