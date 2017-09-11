<?php
/**
 * Routes.
 */
require __DIR__ . "/route/internal.php";
require __DIR__ . "/route/debug.php";
// require __DIR__ . "/route/flat-file-content.php";

// Basic site routes
// require __DIR__ . "/route/base.php";
require __DIR__ . "/route/base2.php";

// Remserver
require __DIR__ . "/route/remserver.php";

// Comment 
require __DIR__ . "/route/comment.php";

// Catch all route last
require __DIR__ . "/route/404.php";
