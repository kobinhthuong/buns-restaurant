<?php
function upload($photo_name, $photo_tmp, $photo_path) {
    define('SITE_ROOT', __DIR__);
    $photo_path = SITE_ROOT . "/uploads/dishes/" . $photo_name;
//    $photo_path = "uploads/dishes/" . $photo_name;
    move_uploaded_file($photo_tmp, $photo_path);
}

function delete($photo_path) {
    define('SITE_ROOT', __DIR__);
    echo SITE_ROOT;
//    die ($photo_path);
    unlink(SITE_ROOT . "/" . $photo_path);
}
?>
