<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

/**
 * Routes for resource category
 */
$app->get('category', 'CategoriesController@all');
$app->get('category/{id}', 'CategoriesController@get');
$app->post('category', 'CategoriesController@add');
$app->put('category/{id}', 'CategoriesController@put');
$app->delete('category/{id}', 'CategoriesController@remove');

/**
 * Routes for resource product
 */
$app->get('product', 'ProductsController@all');
$app->get('product/{id}', 'ProductsController@get');
$app->post('product', 'ProductsController@add');
$app->put('product/{id}', 'ProductsController@put');
$app->delete('product/{id}', 'ProductsController@remove');

/**
 * Routes for resource barcode
 */
$app->get('barcode', 'BarcodesController@all');
$app->get('barcode/{id}', 'BarcodesController@get');
$app->post('barcode', 'BarcodesController@add');
$app->put('barcode/{id}', 'BarcodesController@put');
$app->delete('barcode/{id}', 'BarcodesController@remove');

/**
 * Routes for resource order
 */
$app->get('order', 'OrdersController@all');
$app->get('order/{id}', 'OrdersController@get');
$app->post('order', 'OrdersController@add');
$app->put('order/{id}', 'OrdersController@put');
$app->delete('order/{id}', 'OrdersController@remove');

/**
 * Routes for resource watch
 */
$app->get('watch', 'WatchesController@all');
$app->get('watch/{id}', 'WatchesController@get');
$app->post('watch', 'WatchesController@add');
$app->put('watch/{id}', 'WatchesController@put');
$app->delete('watch/{id}', 'WatchesController@remove');

/**
 * Routes for resource workorder
 */
$app->get('workorder', 'WorkordersController@all');
$app->get('workorder/{id}', 'WorkordersController@get');
$app->post('workorder', 'WorkordersController@add');
$app->put('workorder/{id}', 'WorkordersController@put');
$app->delete('workorder/{id}', 'WorkordersController@remove');
