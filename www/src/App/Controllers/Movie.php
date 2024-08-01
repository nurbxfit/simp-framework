<?php

namespace App\Controllers;

use Framework\Request;
use Framework\Response;
use Framework\DB;

class Movie {
    public function list(Request $request, Response $response) {
        $movies =  DB::table('movies')
        ->select(['id', 'title', 'year', 'ranking']) // Selecting specific columns
        ->execute()
        ->fetchAll(\PDO::FETCH_ASSOC);

        $response->view('Movie.List', [
            "movies" => $movies
        ]);
    }
}