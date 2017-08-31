<?php
/**
 * Test route
 */
$app->router->add("test", function () use ($app) {
    $app->view->add("test/test");
    $app->view->add("report/sidebar", [], "sidebar-right");
    // $app->renderPage(["title" => "testsidan"]);
    $app->renderPage(["title" => "koko"]);
});
