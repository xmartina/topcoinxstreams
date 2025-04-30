<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require $_SERVER['DOCUMENT_ROOT'] . '/routes.php';

//Landing page
get('/', function() {
    include $_SERVER['DOCUMENT_ROOT'] . '/pages/homepage.php';
});
get('/about', function() {
    include $_SERVER['DOCUMENT_ROOT'] . '/pages/aboutpage.php';
});
get('/analytics', function() {
    include $_SERVER['DOCUMENT_ROOT'] . '/pages/aboutpage.php';
});
get('/services', function() {
    include $_SERVER['DOCUMENT_ROOT'] . '/pages/servicespage.php';
});
get('/service-details', function() {
    include $_SERVER['DOCUMENT_ROOT'] . '/pages/servicespage.php';
});
get('/terms', function() {
    include $_SERVER['DOCUMENT_ROOT'] . '/pages/termspage.php';
});
get('/contact', function() {
    include $_SERVER['DOCUMENT_ROOT'] . '/pages/contactpage.php';
});
get('/support', function() {
    include $_SERVER['DOCUMENT_ROOT'] . '/pages/contactpage.php';
});
get('/investment-plans', function() {
    include $_SERVER['DOCUMENT_ROOT'] . '/pages/planspage.php';
});
get('/register', function() {
    header('location : https://account.topcoinxstreams.com/?a=signup');
});
get('/register', function() {
    header('location : https://account.topcoinxstreams.com/?a=login');
});

//post('/user/settings', function() {
//    include $_SERVER['DOCUMENT_ROOT'] . '/user/settings.php';
//});
dispatch();