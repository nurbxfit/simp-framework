<?php

require __DIR__ . "/" . '../Framework/autoloader.php';

// load all route's files inside App\Routes;
foreach (glob(dirname(__DIR__)."/App/Routes/*.php") as $filename) {
    if(is_readable($filename)){
       require $filename;
    }
}

use Framework\App;



$app = new App;


// function otherFunction(Framework\Request $request){
//     return 'otherFunction';
// }

// $app->router->get('/home/example',function (Framework\Request $request) {
//     return 'exampleFunction' . '</br>' . $request->method();
// });

// $app->router->get('/home/other','otherFunction'); // undefined constant otherFunction


$app->run();

