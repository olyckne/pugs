<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$app->router->get('/', function() {
    $pug = Pug::random();
    return view('index', compact('pug'));
});

$app->router->get('/bomb', function (Request $request) {
    $pugs = Pug::bomb($request->get('count') ?: 4);
    return view('bomb', compact('pugs'));
});
