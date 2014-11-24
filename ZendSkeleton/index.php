<?php
//環境変数を追加
putenv("ZF2_PATH=".'C:\pleiades\32bit\xampp\Library\ZendFramework-2.3.3\library');


/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */

//カレントディレクトリ指定
chdir('C:\pleiades\32bit\xampp\ZendSkeletonPublic');

// Decline static file requests back to the PHP built-in webserver
if (php_sapi_name() === 'cli-server' && is_file(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))) {
    return false;
}

// Setup autoloading
require 'init_autoloader.php';

// Run the application!
Zend\Mvc\Application::init(require 'config/application.config.php')->run();



