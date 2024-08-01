<?php

namespace Framework\Exceptions;

use Framework\Response;

class BaseException extends \Exception {
    protected $submessage;
    protected $defaultView = 'defaultError';
    protected string $handlerType = 'view'; // | 'json' 

    public function __construct($code, $message, $submessage, $customMessage = null, $customSubmessage = null) {
        $this->code = $code;
        $this->message = $customMessage ?? $message;
        $this->submessage = $customSubmessage ?? $submessage;
        $this->handlerType = 'view';

        parent::__construct($this->message, $this->code);

    }

    public function getSubmessage() {
        return $this->submessage;
    }

    public function json() {
        $this->handlerType = 'json';
        return $this;
    }

    public function view($view) {
        $this->handlerType = 'view';
        $this->defaultView = $view;
        return $this;
    }


    public function dispatch() {
        http_response_code($this->code);

        $errorContent = [
            'error' => true,
            'message' => $this->message,
            'code' => $this->code,
            'details' => $this->submessage
        ];
        if($this->handlerType == 'json'){
            Response::json($errorContent);
        }else {
            Response::view($this->defaultView, $errorContent);
        }     
    }
}