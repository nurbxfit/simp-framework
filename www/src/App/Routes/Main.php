<?php

use Framework\Router;
use Framework\Request;
use Framework\Response;

Router::get('/', function (Request $request, Response $response){
    $response->view('Main.Index', [
        'title' => 'SIMP Framework',
        'message' => 'Simple MVC PHP Framework'
    ]);
});