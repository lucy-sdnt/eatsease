<?php

use Illuminate\Support\Facades\Route;

// 👉 rutas nuevas inicio 
use App\Http\Controllers\Categories_controller;
use App\Http\Controllers\Inventory_controller;
use App\Http\Controllers\Items_controller;
use App\Http\Controllers\Menu_controller;
use App\Http\Controllers\Orders_controller;
use App\Http\Controllers\Payment_controller;
use App\Http\Controllers\Reservations_controller;
use App\Http\Controllers\Staff_controller;
use App\Http\Controllers\Suppliers_controller;
use App\Http\Controllers\Tables_controller;
// 👉 rutas nuevas fin

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

Route::get('/start', function () {
    return view('start');
});


// 👉 rutas nuevas inicio 

Route::get('/formularioCategorias', function () {
    return view('form_categories');
});
Route::get('/formularioInventario', function () {
    return view('form_inventory');
});
Route::get('/formularioProductos', function () {
    return view('form_items');
});
Route::get('/formularioMenu', function () {
    return view('form_menu');
});
Route::get('/formularioOrdenes', function () {
    return view('form_orders');
});
Route::get('/formularioPago', function () {
    return view('form_payment');
});
Route::get('/formularioReservaciones', function () {
    return view('form_reservations');
});
Route::get('/formularioEmpleados', function () {
    return view('form_staff');
});
Route::get('/formularioProveedores', function () {
    return view('form_suppliers');
});
Route::get('/formularioMesas', function () {
    return view('form_tables');
});
//registro

Route::post("/registroCategorias",[Categories_controller::class,"insertar"])->name("categories.insertar");
Route::get("/listadoCategorias",[Categories_controller::class,"mostrar"])->name("categories.mostrar");

Route::post("/registroInventario",[Inventory_controller::class,"insertar"])->name("inventory.insertar");
Route::get("/listadoInventario",[Inventory_controller::class,"mostrar"])->name("inventory.mostrar");

Route::post("/registroProductos",[Items_controller::class,"insertar"])->name("items.insertar");
Route::get("/listadoProductos",[Items_controller::class,"mostrar"])->name("items.mostrar");

Route::post("/registroMenu",[Menu_controller::class,"insertar"])->name("menu.insertar");
Route::get("/listadoMenu",[Menu_controller::class,"mostrar"])->name("menu.mostrar");

Route::post("/registroOrdenes",[Orders_controller::class,"insertar"])->name("orders.insertar");
Route::get("/listadoOrdenes",[Orders_controller::class,"mostrar"])->name("orders.mostrar");

Route::post("/registroPago",[Payment_controller::class,"insertar"])->name("payment.insertar");
Route::get("/listadoPago",[Payment_controller::class,"mostrar"])->name("payment.mostrar");

Route::post("/registroReservaciones",[Reservations_controller::class,"insertar"])->name("reservations.insertar");
Route::get("/listadoReservaciones",[Reservations_controller::class,"mostrar"])->name("reservations.mostrar");

Route::post("/registroEmpleados",[Staff_controller::class,"insertar"])->name("staff.insertar");
Route::get("/listadoEmpleados",[Staff_controller::class,"mostrar"])->name("staff.mostrar");

Route::post("/registroProveedores",[Suppliers_controller::class,"insertar"])->name("suppliers.insertar");
Route::get("/listadoProveedores",[Suppliers_controller::class,"mostrar"])->name("suppliers.mostrar");

Route::post("/registroMesas",[Tables_controller::class,"insertar"])->name("tables.insertar");
Route::get("/listadoMesas",[Tables_controller::class,"mostrar"])->name("tables.mostrar");
//lista


// 👉 rutas nuevas fin

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('/');
});