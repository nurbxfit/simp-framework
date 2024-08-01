<?php

namespace Framework;
class Response {
    public static function statusCode(int $code):void{
        http_response_code($code);
    }

    public static function redirect(string $url):void{
        header("Location: $url");
    }

    public static function refresh(int $delay=0):void{
        header("Refresh:$delay");
    }

    public static function json(array $data) {
        header("Content-type: application/json; charset=UTF-8");
        echo json_encode($data);
    }

    public static function view(string $template, array $data) {
        $viewer = new View;
        $data['view'] = $viewer;
        $viewer->render($template, $data);
    }
}