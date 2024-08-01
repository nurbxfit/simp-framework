<?php

namespace Framework;
use Framework\Exception;

class Error {
    public static function handleException(\Throwable | \Exception | BaseException $exception) {
    
        try{
            if(method_exists($exception, 'dispatch')){
                $exception->dispatch();
            }else {
                throw $exception;
            }
        }catch (\Exception $e){
            http_response_code(500);
            header('Content-Type: application/json');
            var_dump($e);
            // echo json_encode([
            //     'error' => true,
            //     'message' => 'An unexpected error occurred',
            //     'details' => $exception->getMessage(),
            // ]);
        }
        
    }
}