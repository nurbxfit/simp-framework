<?php
namespace Framework\Exceptions;

class NotFound extends BaseException {
    public function __construct($message = null, $submessage = null) {
        parent::__construct(404, "Not found!", "Page not found!", $message, $submessage);

        $this->defaultView = 'Error.NotFound';
    }
}

