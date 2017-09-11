<?php

namespace Talm\Page;

use \Anax\Common\AppInjectableInterface;
use \Anax\Common\AppInjectableTrait;

/**
 * A controller for the pages.
 */
class PageController implements AppInjectableInterface
{
    use AppInjectableTrait;


    public function flatFile()
    {
        //Get requested route
        $path = $this->app->request->getRoute();

        // Check if route match existing file
        $file = $this->app->flatFile->checkFlatFile($path);
        if (!$file) {
            return;
        }

        // Get content of file
        $content = $this->app->flatFile->getContent($file);

        // Parse content
        $content = $this->app->textfilter->parse($content, ["yamlfrontmatter", "shortcode", "markdown", "titlefromheader"]);

        // Add sidebar if specified
        if (isset($content->frontmatter["sidebar"])) {
            $sidebar = $content->frontmatter["sidebar"];
            $sidebarRegion = isset($content->frontmatter["sidebar_region"]) ? : "sidebar";
            $this->app->view->add("sidebars/" . $sidebar, [], $sidebarRegion);
        }

        // Render a standard page using layout
        $this->app->view->add("default1/article", [
            "content" => $content->text
        ]);
        $this->app->renderPage($content->frontmatter);
    }

    
    public function getIndex()
    {
        $this->app->view->add("base/index", []);
        $this->app->renderPage(["title" => "Me-sidan"]);
    }


    public function getAbout()
    {
        $this->app->view->add("base/about", []);
        $this->app->renderPage(["title" => "Om sidan"]);
    }
}
