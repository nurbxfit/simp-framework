<?php

namespace Framework;

class Request {

    
    /**
     * Returned Request method eg: GET, POST, PUT, DELETE , OPTIONS etc..
     */
    public function method():string {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    /**
     * Returned Request URL path: eg  /home/something
     */
    public function path(): string {
        return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
    }

    /**
     * Returned Request URL path in array parts/segments
     * eg: path = /home/something
     * result = [home,something]
     */
    public function segments() : array {
        $segments = explode("/",$this->path());
        array_shift($segments);
        return $segments;
    }

    /**
     * Return query string as key pair object eg: array(1) { ["say"]=> string(5) "world" }
     */
    public function query() : array{
        $query = [];
        parse_str($this->queryString(),$query);
        return $query;
    }

    /**
     * Return request query string as string eg "/api/hello?say=world" will yield "say=world"
     */
    public function queryString() : string{
        return explode("/",parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY ))[0];
    }

     /**
     * Return request body,
     */
    public function body() : array {
        $data = [];
        if ($this->isGet()) {
            foreach ($_GET as $key => $value) {
                $data[$key] = trim(filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS));
            }
        }
        if ($this->isPost()) {
            foreach ($_POST as $key => $value) {
                $data[$key] = trim(filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS));
            }
        }
        return $data;
    }


}