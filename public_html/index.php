<?php
/**
 * Entry point for all requests.
 * @package frameworkCore
 * @author Paulina Budzon <paulina.budzon@gmail.com>
 */

/* Include the framework. */
require_once '../app/appCore.php';

/* Start! */
$c = new appCore();
/**
 * This are major config settings that should be set to proper values.
 * For more information about this settings, refer to {@link appConfig::$_defaults}.
 */
$c->start(array(
    "debug" => true,
    "crypt_std_key" => "wl2okswwxrqqw52k89kq3k1ou29xw66s",
));
