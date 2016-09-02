<?php
    require_once('vendor/autoload.php');

    spl_autoload_register(function ($class) {
        if(substr($class, 0, 9) == 'Highlight')
        {
            require_once('core/highlight/'.$class.'.php.inc');
        }
    });
?>
