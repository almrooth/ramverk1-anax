<?php

namespace Almrooth\FlatFile;

use \Anax\DI\InjectionAwareInterface;
use \Anax\DI\InjectionAwareTrait;

/**
 * Flat file class.
 */
class FlatFile implements InjectionAwareInterface
{
    use InjectionAwareTrait;

    
    /**
     * Check if route match existing file.
     */
    public function checkFlatFile($path)
    {
        // Get the current route and see if it matches a content/file
        $file1 = ANAX_INSTALL_PATH . "/content/" . $path . ".md";
        $file2 = ANAX_INSTALL_PATH . "/content/" . $path . "/index.md";

        $file = is_file($file1) ? $file1 : null;
        $file = is_file($file2) ? $file2 : $file;

        if (!$file) {
            return false;
        }

        // Check that file is really in the right place
        $real = realpath($file);
        $base = realpath(ANAX_INSTALL_PATH . "/content/");
        if (strncmp($base, $real, strlen($base))) {
            return false;
        }

        return $file;
    }

    /**
     * Return content of file.
     */
    public function getContent($file)
    {
        // Get content from markdown file
        $content = file_get_contents($file);
        return $content;
    }
}
