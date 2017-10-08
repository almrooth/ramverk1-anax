<?php

namespace Almrooth\Page;

use \Anax\DI\InjectionAwareInterface;
use \Anax\DI\InjectionAwareTrait;
use \Anax\Page\PageRenderInterface;

/**
 * A default page rendering class.
 */
class PageRender implements PageRenderInterface, InjectionAwareInterface
{
    use InjectionAwareTrait;


    /**
     * Render a standard web page using a specific layout.
     *
     * @param array   $data   variables to expose to layout view.
     * @param integer $status code to use when delivering the result.
     *
     * @SuppressWarnings(PHPMD.ExitExpression)
     * @return void
     */
    public function renderPage($data, $status = 200)
    {
        // Append to title
        $data["title"] = $data["title"] . " | Tobias Almroth";

        // Stylesheets
        $data["stylesheets"] = [
            "css/style.css"
        ];

        // View
        $view = $this->di->get("view");

        // Add common header, navbar and footer
        $view->add("partials/header", [], "header");
        $view->add("partials/navbar", [], "navbar");
        $view->add("partials/footer", [], "footer");

        // Add layout, render it, add to response and send.
        $view->add("layout", $data, "layout");
        $body = $view->renderBuffered("layout");
        $this->di->get("response")->setBody($body)
                                  ->send($status);
        exit;
    }
}
