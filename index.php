<?php
define('BASEDIR',__DIR__);
include BASEDIR.'/PSR/Loader.php';
spl_autoload_register('\\PSR\\Loader::autoload');

$db = new PSR\Database();

.