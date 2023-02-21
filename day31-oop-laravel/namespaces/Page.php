<?php

namespace Project;

/**
 * a page of my website
 */

// FQN: Project\Page
class Page
{
    public $title = null;
    public $body = null;
    public $meta_tags = [];

    public function render()
    {
        // renders the page

        $body = str_replace('<br>', "\n", $this->body);
    }
}

