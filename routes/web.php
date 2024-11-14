<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\CustomersController;

Route::get('/', function () { return view('welcome'); });
Route::get('/orders', [OrdersController::class, 'list']);

Route::post('/orders/create', [OrdersController::class, 'create']);
Route::get('/orders/create', [OrdersController::class, 'createForm']);
Route::get('/orders/{id}', [OrdersController::class, 'detail']);
Route::get('/customers/{id}/categories', [CustomersController::class, 'categories']);

Route::get('/customers', [CustomersController::class, 'list']);
Route::get('/customer/{id}', [CustomersController::class, 'detail']);