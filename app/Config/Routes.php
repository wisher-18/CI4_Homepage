<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

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
$routes->get("/content/index/(:num)", "Content::index/$1");
$routes->get("/content/delete/(:num)", "Content::delete/$1");
$routes->get("content/edit/(:num)", "Content::edit/$1");
$routes->post("content/update/(:num)", "Content::update/$1");

$routes->get("content/newHero/(:num)", "Content::newHero/$1");

$routes->get("content/(:num)/editHero", "Content::editHero/$1");
$routes->get("/content/newFeature/(:num)", "Content::newFeature/$1");
$routes->post("/content/newFeature", "Content::createFeature");

$routes->get("/content/newOther/(:num)", "Content::newOther/$1");
$routes->post("/content/newOther", "Content::create");
$routes->get("/content/newInfo/(:num)", "Content::newInfo/$1");
$routes->get("/content/newPricing/(:num)", "Content::newPricing/$1");
$routes->post("/content/newPricing", "Content::createPricing");
$routes->get("/content/newWhyUs/(:num)", "Content::newWhyUs/$1");
$routes->get("/content/newAbout/(:num)", "Content::newAbout/$1");
$routes->get("/content/newTestimonial/(:num)", "Content::newTestimonial/$1");
$routes->get("/content/newContactUs/(:num)", "Content::newContactUs/$1");

$routes->get("pages/(:any)", "Pages::showSlug/$1");




service('auth')->routes($routes);


$routes->group("admin",["filter"=> "login"], static function($routes){

    $routes->get("/","Admin::index");
    $routes->get("viewAllUsers", "Admin::viewAllUsers");
    $routes->get("users/(:num)", "Admin::showUser/$1");

    $routes->match(["get", "post"],"users/(:num)/groups", "Admin::groups/$1");
    $routes->match(["get", "post"],"users/(:num)/permissions", "Admin::permissions/$1");

});

$routes->group("", static function ($routes){
    $routes->get("set-password", "Password::setPassword");
    $routes->post("set-password", "Password::update");
    

});