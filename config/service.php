<?php
/**
 * Add and configure services and return the $app object.
 */

// Add all resources to $app
$app = new \Anax\App\App();
$app->request    = new \Anax\Request\Request();
$app->response   = new \Anax\Response\Response();
$app->url        = new \Anax\Url\Url();
$app->router     = new \Anax\Route\RouterInjectable();
$app->view       = new \Anax\View\ViewContainer();
$app->textfilter = new \Anax\TextFilter\TextFilter();
$app->session    = new \Anax\Session\SessionConfigurable();
$app->rem           = new \Anax\RemServer\RemServer();
$app->remController = new \Anax\RemServer\RemServerController();
$app->pageController = new \Talm\Page\PageController();
$app->flatFile      = new \Talm\FlatFile\FlatFile();
$app->comment           = new \Talm\Comment\CommentSession();
$app->commentController = new \Talm\Comment\CommentController();

// Configure request
$app->request->init();

// Configure router
$app->router->setApp($app);

// Configure and start session
$app->session->configure("session.php");
$app->session->start();

// Configure url
$app->url->setSiteUrl($app->request->getSiteUrl());
$app->url->setBaseUrl($app->request->getBaseUrl());
$app->url->setStaticSiteUrl($app->request->getSiteUrl());
$app->url->setStaticBaseUrl($app->request->getBaseUrl());
$app->url->setScriptName($app->request->getScriptName());
$app->url->configure("url.php");
$app->url->setDefaultsFromConfiguration();

// Configure view
$app->view->setApp($app);
$app->view->configure("view.php");

// Init REM Server
$app->rem->configure("remserver.php");
$app->rem->inject(["session" => $app->session]);

// Init controller for the REM Server
$app->remController->setApp($app);

// Init PageController
$app->pageController->setApp($app);

// Init comment
$app->commentController->setApp($app);
$app->comment->inject(["session" => $app->session]);

// Return the populated $app
return $app;
