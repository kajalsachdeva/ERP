<?php

class Controller {

    function render($file, $data) {

        ob_start();
        include $file;
        $renderedView = ob_get_clean();
        echo $renderedView;
        return $renderedView;
    }

    function redirect($path) {

        if ($path == 'Login/login') {
            header('Location: ' . BASE_URL);
        } else {

            header('Location: ' . BASE_URL . $path);
        }
    }

}

?>
