<?php
require __DIR__.'/../vendor/autoload.php';
ini_set('error_reporting', E_ALL); // or error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
isset($_SERVER['CONN_HOST_IP']) && define('CONN_HOST_IP', $_SERVER['CONN_HOST_IP']);

\Motan\TestHelper::TestDefines();

// @TODO testing for mesh panic, and using mesh snapshot
// this need run mesh in the same node with php client
define('AGENT_RUN_PATH', $_SERVER["PWD"] . '/weibo-mesh-runpath');

define('DEFAULT_TEST_URL', 'motan2://127.0.0.1:9981/com.weibo.HelloMTService?group=motan-demo-rpc');
