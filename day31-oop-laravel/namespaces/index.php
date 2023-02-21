<?php

// namespace Project;

require_once 'Page.php';
require_once 'functions.php';
require_once 'BookPreviews/Book.php';
require_once 'BookPreviews/Page.php';

use Project\Page; // as Page
use PolakJan\BookPreviews\Page as BookPage;

// use PolakJan\BookPreviews\Page;
// same as line above:
// use PolakJan\BookPreviews\Page as Page;

$website_page = new Page;

// var_dump($website_page);

$book_page = new BookPage;

$book_page_2 = new \PolakJan\BookPreviews\Page;
$book_page_3 = new PolakJan\BookPreviews\Page;

var_dump($book_page);