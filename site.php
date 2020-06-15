<?php

use \Hcode\PageAdmin;

$app->get('/', function() {

    $page = new Page();
    $page->setTpl("index");

});






?>
