<?php
return array(
    'news/([a-z]+)/([0-9]+)' => 'news/view/$1,$2',
    'news' => 'news/index',   //actionIndex will be called for NewsController
    'products' => 'products/list',  //actionlist will be called for ProductsController
);
