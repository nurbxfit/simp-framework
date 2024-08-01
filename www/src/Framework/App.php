<?php

namespace Framework;
use Framework\Exceptions;

class App {
    public Router $router;
    public Request $request;
    public Response $response;

    public function __construct($config = []){
        $this->request = new Request;
        $this->response = new Response;
        $this->router = new Router;
    }

    public function run () {
        try{
            $this->router->dispatch($this->request, $this->response);
            exit;
        }catch( \Exception $e){
            Error::handleException($e);
            exit;
        }
    }
}