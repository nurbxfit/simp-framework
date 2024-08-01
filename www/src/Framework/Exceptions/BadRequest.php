<?php
namespace Framework\Exceptions;

class BadRequest extends BaseException {
    public function __construct($message = null, $submessage = null) {
        parent::__construct(400, "Bad Request!", "Invalid input!", $message, $submessage);
    }
}