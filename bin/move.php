<?php
require_once dirname(__DIR__) . '/init.php';
require_once ROOT_PATH . '/app/functions.php';
require_once ROOT_PATH . '/src/helper.php';
echo microtime(true).' 当前脚本路径：'.__FILE__.PHP_EOL;
use IYUU\Reseed\MoveTorrent;
use Workerman\Autoloader;

Autoloader::setRootPath(ROOT_PATH);
MoveTorrent::init();
MoveTorrent::call();
