<?php

use Framework\Router;
use Framework\Request;
use Framework\Response;

use App\Controllers\Movie;


$movieController = new Movie;

Router::get('/movies', [$movieController, 'list']);