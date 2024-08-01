<?php

namespace App\Controllers;

use Framework\Request;
use Framework\Response;
use Framework\DB;

class Movie {
    public function list(Request $request, Response $response) {
        $movies =  DB::table('movies')
        ->where('year', '>=', 2020)
        ->or('ranking','>=',1)
        // ->and('ranking','>=',1)
        ->select(['id', 'title', 'year', 'ranking']) 
        ->execute()
        ->fetchAll(\PDO::FETCH_ASSOC);

        $response->view('Movie.List', [
            "movies" => $movies
        ]);
    }
}