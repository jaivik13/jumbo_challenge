<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::prefix('v2')->group(function () {

    //pet
        Route::prefix('pet')->group(function ($pet) {
            $pet->get('/{id}', 'petController@viewPet');
            $pet->post('/{id}', 'petController@updatePet');
            $pet->delete('/{id}', 'petController@deletPet');
            $pet->post('/{id}/uploadImage', 'petController@uploadimgPet');
            $pet->post('/new/pet', 'petController@createPet');
            $pet->put('/edit/{id}', 'petController@updateallPet');
            $pet->get('/status/{Status}', 'petController@findByStatus');
    });

    //user
        Route::prefix('user')->group(function ($user) {
            $user->get('/{username}', 'userController@view');
            $user->put('/{username}', 'userController@edit');
            $user->delete('/{username}', 'userController@delete');
            $user->get('/login/user', 'userController@login');
            $user->get('/logout', 'userController@logout');
            $user->post('', 'userController@add');
            $user->post('/createdWithArray', 'userController@withArray');
            $user->post('/createWithList', 'userController@WithList');
    });

    //store
        Route::prefix('store')->group(function ($store) {
            $store->get('/inventory', 'orderController@inventory');
            $store->get('/order/{orderID}', 'orderController@view');
            $store->delete('/order/{orderID}', 'orderController@delete');
            $store->post('/order', 'orderController@create');
    });
});
