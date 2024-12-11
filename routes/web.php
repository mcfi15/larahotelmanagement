<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    Route::controller(App\Http\Controllers\Admin\CustomerController::class)->group(function () {
        Route::get('/customers', 'index');
        Route::get('/customers/create', 'create');
        Route::post('/customers/create', 'store');
        Route::get('/customers/{customer}/edit', 'edit');
        Route::put('/customers/{customer}', 'update');
        Route::get('/customers/{customer}/delete', 'destroy');
    });

    Route::controller(App\Http\Controllers\Admin\ExpenseController::class)->group(function () {
        Route::get('/expenses', 'index');
        Route::get('/expenses/create', 'create');
        Route::post('/expenses/create', 'store');
        Route::get('/expenses/{expense}/edit', 'edit');
        Route::put('/expenses/{expense}', 'update');
        Route::get('/expenses/{expense}/delete', 'destroy');
    });

    Route::controller(App\Http\Controllers\Admin\EmployeeController::class)->group(function () {
        Route::get('/employees', 'index');
        Route::get('/employees/create', 'create');
        Route::post('/employees/create', 'store');
        Route::get('/employees/{employee}/edit', 'edit');
        Route::put('/employees/{employee}', 'update');
        Route::get('/employees/{employee}/delete', 'destroy');
    });

    Route::controller(App\Http\Controllers\Admin\RoomTypeController::class)->group(function () {
        Route::get('/room-types', 'index');
        Route::get('/room-types/create', 'create');
        Route::post('/room-types/create', 'store');
        Route::get('/room-types/{room}/edit', 'edit');
        Route::put('/room-types/{room_id}', 'update');
        Route::get('room-image/{room_image_id}/delete','destroyImage');
        Route::get('/room-types/{room_id}/delete', 'destroy');
    });

    Route::controller(App\Http\Controllers\Admin\RoomController::class)->group(function () {
        Route::get('/rooms', 'index');
        Route::get('/rooms/create', 'create');
        Route::post('/rooms/create', 'store');
        Route::get('/rooms/{room}/edit', 'edit');
        Route::put('/rooms/{room_id}', 'update');
        Route::get('/rooms/{room_id}/delete', 'destroy');
    });
    
    Route::controller(App\Http\Controllers\Admin\ItemController::class)->group(function () {
        Route::get('/items', 'index');
        Route::get('/items/create', 'create');
        Route::post('/items/create', 'store');
        Route::get('/items/{item}/edit', 'edit');
        Route::put('/items/{item_id}', 'update');
        Route::get('/items/{item_id}/delete', 'destroy');
    });

    Route::controller(App\Http\Controllers\Admin\BookingController::class)->group(function () {
        Route::get('/bookings', 'index');
        Route::get('/bookings/create', 'create');
        Route::post('/bookings/create', 'store');
        Route::get('/bookings/{booking}/edit', 'edit');
        Route::put('/bookings/{booking_id}', 'update');
        Route::get('/bookings/{booking_id}/delete', 'destroy');
    });

    Route::controller(App\Http\Controllers\Admin\OrderController::class)->group(function () {
        Route::get('/orders', 'index');
        Route::get('/orders/create', 'create');
        Route::post('/orders/create', 'store');
        Route::get('/orders/{order}/edit', 'edit');
        Route::put('/orders/{order_id}', 'update');
        Route::get('/orders/{order_id}/delete', 'destroy');
    });

    Route::controller(App\Http\Controllers\Admin\BankController::class)->group(function () {
        Route::get('/banks', 'index');
        Route::get('/banks/create', 'create');
        Route::post('/banks/create', 'store');
        Route::get('/banks/{bank}/edit', 'edit');
        Route::put('/banks/{bank_id}', 'update');
        Route::get('/banks/{bank_id}/delete', 'destroy');
        
        Route::get('/payment-options','indexPayment');
        Route::post('payment-options', 'updatePaymentOptions');
    });

    Route::controller(App\Http\Controllers\Admin\PaymentController::class)->group(function () {
        Route::get('/payments', 'index');
        Route::get('/payments/create', 'create');
        Route::post('/payments/create', 'store');
        Route::get('/payments/{payment}/edit', 'edit');
        Route::put('/payments/{payment_id}', 'update');
        Route::get('/payments/{payment_id}/delete', 'destroy');
    });

    Route::controller(App\Http\Controllers\Admin\SettingController::class)->group(function () {
        Route::get('/settings', 'index');
        Route::post('settings', 'store');

        Route::get('/brandings', 'indexBrands');
        Route::post('brandings', 'storeBrands');
    });

    Route::controller(App\Http\Controllers\Admin\UsersController::class)->group(function () {
        Route::get('/users', 'index');
        Route::get('/users/create', 'create');
        Route::post('/users/create', 'store');
        Route::get('/users/{user}/edit', 'edit');
        Route::put('/users/{user_id}', 'update');
        Route::get('/users/{user_id}/delete', 'destroy');

        Route::get('/roles', 'indexRole');
        Route::put('/roles/{user_id}', 'updateRole');
    });
});
