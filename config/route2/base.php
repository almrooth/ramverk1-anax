<?php

return [
    "routes" => [
        [
            "info" => "Flat file content.",
            "requestMethod" => null,
            "path" => null,
            "callable" => ["pageController", "flatFile"],
        ],
        [
            "info" => "Index page",
            "requestMethod" => "get",
            "path" => "",
            "callable" => ["pageController", "getIndex"],
        ],
        [
            "info" => "About page",
            "requestMethod" => "get",
            "path" => "about",
            "callable" => ["pageController", "getAbout"],
        ],
    ]
];
