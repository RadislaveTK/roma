<?php

use App\Http\Controllers\CarsController;
use App\Models\Cars;
use App\Models\Service;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function() {
    $cars = Cars::all();
    $services = Service::all();
    return view('home', ['cars' => $cars, 'services' => $services,]);
});

Route::get('/cars/create', [CarsController::class, 'create']);
