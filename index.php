<?php
/*
    @author karim mohamed - komicho
    @link https://github.com/alpharooq/space
    @PHP version 5.3
    @version 1.0.0
*/

$vendor = 'vendor/autoload.php';
if (file_exists($vendor)) {
    require_once $vendor;
} else {
    die('composer update');
}

use alpharooq\kernel\space\constants;
use alpharooq\kernel\space\call;

new constants();
new call();