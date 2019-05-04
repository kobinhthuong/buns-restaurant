
        <?php

        function upload($photo_name, $photo_tmp, $photo_path) {
            define('SITE_ROOT', __DIR__);
            $photo_path = SITE_ROOT . "/uploads/dishes/" .$photo_name;
            move_uploaded_file($photo_tmp, $photo_path);
        }
        ?>
