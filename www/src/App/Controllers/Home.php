<?php

namespace App\Controllers;

use Framework\Request;
use Framework\Response;

class Home {

    public function example(){
        $message = "ExampleMethod!";
        echo $message;
    }

    public function other(Request $request, Response $response ){
        $message = "Other method";
        $response->view('Home.Index', [
            "message" => "Hello",
            "subtext" => "Other"
        ]);
    }

    public function networksGet() {
        $message = "Networks Get method!";
        echo $message;
    }

    public function networksPost() {
        $message = "Networks Get method!";
        echo $message;
    }
}

