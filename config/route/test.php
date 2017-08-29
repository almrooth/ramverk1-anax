<?php
/**
 * Test route
 */
$app->router->add("test", function () use ($app) {
    $app->view->add("test/test");
    $app->renderPage(["title" => "testsidan"]);
});