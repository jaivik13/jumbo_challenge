<?php

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

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



// Route::middleware(['web'])->prefix('v2')->group(function () {
//     //pet
//     Route::group(['prefix' => 'pet' ], function ($pet) {

//         //  $app->get('index', 'petController@index'); // 1 Find pet by ID
//         $pet->get('/{petId}', 'petController@viewPet'); // 1 Find pet by ID
//         $pet->post('/{petId}', 'petController@updatePet'); //2 Updates a pet in the store with form data
//         $pet->delete('/{petId}', 'petController@deletPet'); //3
//         $pet->post('/{petId}/uploadImage', 'petController@uploadimgPet'); //4 
//         $pet->post('', 'petController@createPet'); //5 Add a new pet to the store
//         $pet->put('', 'petController@updateallPet'); //6 Update an existing pet
//         $pet->get(' /findByStatus', 'petController@findByStatus'); // 7

//     });


//     //user
//     Route::group(['prefix' => 'user' ], function ($user) {

//         // $app->get('index', 'userController@index'); // 1 Find pet by ID
//         $user->get('/{username}', 'userController@view'); // 1 get user by uername
//         $user->put('/{username}', 'userController@edit'); //2 update user
//         $user->delete('/{username}', 'userController@delete'); //3 delete user
//         $user->get('/login', 'userController@login'); //4 logs user in system
//         $user->get('/logout', 'userController@logout'); //5 logs out in to system
//         $user->post('/add', 'userController@add'); //7 create user 
//         $user->post('/createdWithArray', 'userController@createdWithArray'); //7 create user createdWithArray
//         $user->post(' /createWithList', 'userController@createWithList'); // 8 create user createWithList

//     });

//     //store
//     Route::group(['prefix' => 'store' ], function ($store) {

//         // $app->get('index', 'userController@index'); // 1 Find pet by ID
//         $store->get('inventory', 'storeController@inventory'); // 1 get user by uername
//         $store->get('/order/{orderID}', 'storeController@edit'); //2 update user
//         $store->delete('/order/{orderID}', 'storeController@delet'); //3 delete user
//         $store->post('/order', 'storeController@login'); //4 logs user in system

//     });
// });































// Route::prefix('v2')->group(function () {
//     Route::prefix('pet')->group(function () {
//         Route::middleware(['web'])->group(function ($pet) {
//             //pet
//             //  $app->get('index', 'petController@index'); // 1 Find pet by ID
//             $pet->get('/{petId}', 'petController@viewPet'); // 1 Find pet by ID
//             $pet->post('/{petId}', 'petController@updatePet'); //2 Updates a pet in the store with form data
//             $pet->delete('/{petId}', 'petController@deletPet'); //3
//             $pet->post('/{petId}/uploadImage', 'petController@uploadimgPet'); //4 
//             $pet->post('', 'petController@createPet'); //5 Add a new pet to the store
//             $pet->put('', 'petController@updateallPet'); //6 Update an existing pet
//             $pet->get(' /findByStatus', 'petController@findByStatus'); // 7
//         });
//     });
//     Route::prefix('user')->group(function () {
//         Route::middleware(['web'])->group(function ($user) {
//             //user
//             // $app->get('index', 'userController@index'); // 1 Find pet by ID
//             $user->get('/{username}', 'userController@view'); // 1 get user by uername
//             $user->put('/{username}', 'userController@edit'); //2 update user
//             $user->delete('/{username}', 'userController@delete'); //3 delete user
//             $user->get('/login', 'userController@login'); //4 logs user in system
//             $user->get('/logout', 'userController@logout'); //5 logs out in to system
//             $user->post('/add', 'userController@add'); //7 create user 
//             $user->post('/createdWithArray', 'userController@createdWithArray'); //7 create user createdWithArray
//             $user->post(' /createWithList', 'userController@createWithList'); // 8 create user createWithList           
//         });
//     });

//     Route::prefix('store')->group(function () {
//         Route::middleware(['web'])->group(function ($store) {
//             //store
//             // $app->get('index', 'userController@index'); // 1 Find pet by ID
//             $store->get('inventory', 'storeController@inventory'); // 1 get user by uername
//             $store->get('/order/{orderID}', 'storeController@edit'); //2 update user
//             $store->delete('/order/{orderID}', 'storeController@delet'); //3 delete user
//             $store->post('/order', 'storeController@login'); //4 logs user in system

//         });
//     });

//     // These will just be prefixed with 

// });





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
