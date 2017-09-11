<?php

$app->router->always([$app->pageController, "flatFile"]);

$app->router->get("", [$app->pageController, "getIndex"]);

$app->router->get("about", [$app->pageController, "getAbout"]);
