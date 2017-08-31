<?php
/**
 * Base routes for the site
 */
$app->router->add("", function () use ($app) {
    $app->view->add("base/index", []);
    $app->renderPage(["title" => "Me-sidan"]);
});

$app->router->add("about", function () use ($app) {
    $app->view->add("base/about", []);
    $app->renderPage(["title" => "Om sidan"]);
});
