<?php

use Framework\Router;
use Framework\Request;
use Framework\Response;
use App\Controllers\Home;

$homeController = new Home;


Router::get('/home/example',function (Request $request, Response $response) {
        $response->view('Home.Index',[
            "message" => "Hello",
            "subtext" => "Example"
        ]);
    });

Router::get('/home/example/json',function (Request $request, Response $response) {
    $response->json([
        "success"=> true,
        "message" => "Hello example "
    ]);
});

Router::get('/home/other', [$homeController, 'other']);