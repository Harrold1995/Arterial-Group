<?php
ini_set('session.cookie_httponly', 1);
ob_start();
require __DIR__."/vendor/autoload.php";

use CoffeeCode\Router\Router;
use Source\Core\Session;

$session = new Session();
$router = new Router(url() ,":");
$router->namespace("Source\Router");

$router->group(null);
$router->get("/","Web:home");

$router->get("/marketing","Web:marketing");
$router->get("/education","Web:education");
$router->get("/consumer","Web:consumer");
$router->get("/therapeutic","Web:therapeutic");
$router->get("/our-work","Web:our_work");
$router->get("/testimonials","Web:testimonials");
$router->get("/contact","Web:contact_us");
$router->post("/send-contact-form","Web:contact_us_form");




/**
 * PORTIFOLIO ROUTES
 */
$router->namespace("Source\Router");
$router->group('/portfolio');
$router->get("/biosimilar","Portfolio:biosimilar");
$router->get("/more-than-once-a-night-man","Portfolio:more_than_once");
$router->get("/change-the-outlook","Portfolio:change_outlook");
$router->get("/broken-bones","Portfolio:broken_bones");
$router->get("/vaccination","Portfolio:vacctination");
$router->get("/wish-i-knew","Portfolio:wish_i_knew");
$router->get("/neca","Portfolio:neca");
$router->get("/bod","Portfolio:bod");
$router->get("/seqirus","Portfolio:seqirus");

/**
 * ERROR ROUTES
 */
$router->group("/oops");
$router->get("/{errcode}", "Web:error");


/**
 * This method executes the routes
 */
$router->dispatch();

/*
 * Redirect all errors
 */
if ($router->error()) {
    $router->redirect("/oops/{$router->error()}");
}

ob_end_flush();