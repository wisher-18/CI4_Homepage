<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);
$routes->get('/', 'Home::index');
$routes->get("/About", "Home::about");
$routes->get("/Features", "Home::features");

$routes->get("/Contact", "Home::contact");
$routes->get("/Testimonials", "Home::testimonials");
$routes->get("/Pricing", "Home::pricing");

$routes->get("/page/new", "Pages::new");
$routes->post("/page/new", "Pages::create");
$routes->get("/page/show", "Pages::show");
$routes->get("page/(:num)/delete", "Pages::confirmDelete/$1");
$routes->get("/page/delete/(:num)", "Pages::delete/$1");
$routes->get("page/(:num)/edit", "Pages::edit/$1");
$routes->post("page/update/(:num)", "Pages::update/$1");

$routes->get("/content/new", "Content::new");
$routes->post("/content/new", "Content::create");
$routes->get("/content/(:num)", "Content::show/$1");
$routes->get("/content/index", "Content::index");
$routes->get("/content/delete/(:num)", "Content::delete/$1");
$routes->get("content/(:num)/edit", "Content::edit/$1");
$routes->patch("content/update/(:num)", "Content::update/$1");

$routes->get("/admin","Admin::index");

service('auth')->routes($routes);
