<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use \Illuminate\Support\Facades\Request;

$routePages = [
    'get' => [
        [
            'url' => '/',
            'view' => 'main',
            'name' => 'main'
        ],
        [
            'url' => '/about',
            'view' => 'about',
            'name' => 'about'
        ],
        [
            'url' => '/contacts',
            'view' => 'contacts',
            'name' => 'contacts'
        ],
    ],
    'post' => [
        [
            'url' => '/contacts/submit',
            'return' => Request::all(),
            'name' => 'contact-form',
        ]
    ]
];

foreach ($routePages as $type => $types)
{
    foreach ($types as $item)
    {
        if (empty($item)) { continue; }
        switch ($type)
        {
            case 'get':
                $view = $item['view'];
                Route::get($item['url'], function () use ($view) {
                    return view($view);
                })->name($item['name']);
                break;
            case 'post':
                $return = $item['return'];
                Route::post($item['url'], function () use ($return) {
                    return $return;
                })->name($item['name']);
                break;
        }
    }

}
