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
    public function link($path)
    {
        return $this->url->create($path);
    }
}
