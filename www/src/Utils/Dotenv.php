<?php

namespace Utils;

class Dotenv {
    public function load(string $path) : void {
        $envs = file($path, FILE_IGNORE_NEW_LINES);

        foreach ($envs as $env) {
            list($name,$value) = explode("=",$env,2);
            $_ENV[$name] = $value;
        }
    }
}