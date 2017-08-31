<?php
/**
 * Routes.
 */
require __DIR__ . "/route/internal.php";
require __DIR__ . "/route/debug.php";
require __DIR__ . "/route/flat-file-content.php";

require __DIR__ . "/route/base.php";

// Test route and view
require __DIR__ . "/route/test.php";

// Catch all route last
require __DIR__ . "/route/404.php";
