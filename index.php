<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require $_SERVER['DOCUMENT_ROOT'] . '/routes.php';

//Landing page
get('/', function() {
    include $_SERVER['DOCUMENT_ROOT'] . '/pages/homepage.php';
});

//post('/user/settings', function() {
//    include $_SERVER['DOCUMENT_ROOT'] . '/user/settings.php';
//});
dispatch();