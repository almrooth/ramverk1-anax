<?php

namespace Anax\App;

/**
 * An App class to wrap the resources of the framework.
 *
 * @SuppressWarnings(PHPMD.ExitExpression)
 */
class App
{
    /**
     * Redirect to specified url.
     */
    public function redirect($url)
    {
        $this->response->redirect($this->url->create($url));
        exit;
    }


    /**
     * Return a link to a specified url.
     */
    public function link($url)
    {
        return $this->url->create($url);
    }


    /**
     * Render a standard web page using a specific layout.
     */
    public function renderPage($data, $status = 200)
    {
        // Append to title
        $data["title"] = $data["title"] . " | Tobias Almroth";

        // Stylesheets
        $data["stylesheets"] = [
            "css/style.css",
            "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        ];

        // Javascripts


        // Add common header, navbar and footer
        $this->view->add("partials/header", [], "header");
        $this->view->add("partials/navbar", [], "navbar");
        $this->view->add("partials/footer", [], "footer");

        // Add layout, render it, add to response and send.
        $this->view->add("layout", $data, "layout");
        $body = $this->view->renderBuffered("layout");
        $this->response->setBody($body)
                       ->send($status);
        exit;
    }
}
