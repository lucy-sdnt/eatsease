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
Route::get('/edit_categories/{id}', [Categories_controller::class, 'edit'])->name('categories.edit');
Route::post('/update_categories/{id}', [Categories_controller::class, 'update'])->name('categories.update');
Route::get('/delete_categories/{id}', [Categories_controller::class, 'delete'])->name('categories.delete');


Route::post("/registroInventario",[Inventory_controller::class,"insertar"])->name("inventory.insertar");
Route::get("/listadoInventario",[Inventory_controller::class,"mostrar"])->name("inventory.mostrar");
Route::get('/edit_inventory/{id}', [Inventory_controller::class, 'edit'])->name('inventory.edit');
Route::post('/update_inventory/{id}', [Inventory_controller::class, 'update'])->name('inventory.update');
Route::get('/delete_inventory/{id}', [Inventory_controller::class, 'delete'])->name('inventory.delete');

Route::post("/registroProductos",[Items_controller::class,"insertar"])->name("items.insertar");
Route::get("/listadoProductos",[Items_controller::class,"mostrar"])->name("items.mostrar");
Route::get('/edit_items/{id}', [Items_controller::class, 'edit'])->name('items.edit');
Route::post('/update_items/{id}', [Items_controller::class, 'update'])->name('items.update');
Route::get('/delete_items/{id}', [Items_controller::class, 'delete'])->name('items.delete');


Route::post("/registroMenu",[Menu_controller::class,"insertar"])->name("menu.insertar");
Route::get("/listadoMenu",[Menu_controller::class,"mostrar"])->name("menu.mostrar");
Route::get('/delete/{id}', [Menu_controller::class, 'destroy'])->name('menu.destroy');
Route::get('/edit/{id}', [Menu_controller::class, 'edit'])->name('menu.edit');
Route::post('/update/{id}', [Menu_controller::class, 'update'])->name('menu.update');
Route::get('/delete/{id}', [Menu_controller::class, 'delete'])->name('menu.delete');

Route::post("/registroOrdenes",[Orders_controller::class,"insertar"])->name("orders.insertar");
Route::get("/listadoOrdenes",[Orders_controller::class,"mostrar"])->name("orders.mostrar"); 
Route::get('/edit_orders/{id}', [Orders_controller::class, 'edit'])->name('orders.edit');
Route::post('/update_orders/{id}', [Orders_controller::class, 'update'])->name('orders.update');
Route::get('/delete_orders/{id}', [Orders_controller::class, 'delete'])->name('orders.delete');

Route::post("/registroPago",[Payment_controller::class,"insertar"])->name("payment.insertar");
Route::get("/listadoPago",[Payment_controller::class,"mostrar"])->name("payment.mostrar");
Route::get('/edit_payment/{id}', [Payment_controller::class, 'edit'])->name('payment.edit');
Route::post('/update_payment/{id}', [Payment_controller::class, 'update'])->name('payment.update');
Route::get('/delete_payment/{id}', [Payment_controller::class, 'delete'])->name('payment.delete');

Route::post("/registroReservaciones",[Reservations_controller::class,"insertar"])->name("reservations.insertar");
Route::get("/listadoReservaciones",[Reservations_controller::class,"mostrar"])->name("reservations.mostrar");
Route::get('/edit_reservations/{id}', [Reservations_controller::class, 'edit'])->name('edit_reservations');
Route::post('/update_reservations/{id}', [Reservations_controller::class, 'update'])->name('update_reservations');
Route::get('/delete_reservations/{id}', [Reservations_controller::class, 'delete'])->name('reservations.delete');


Route::post("/registroEmpleados",[Staff_controller::class,"insertar"])->name("staff.insertar");
Route::get("/listadoEmpleados",[Staff_controller::class,"mostrar"])->name("staff.mostrar");
Route::get('/edit_staff/{id}', [Staff_controller::class, 'edit'])->name('staff.edit');
Route::post('/update_staff/{id}', [Staff_controller::class, 'update'])->name('staff.update');
Route::get('/delete_staff/{id}', [Staff_controller::class, 'delete'])->name('staff.delete');

Route::post("/registroProveedores",[Suppliers_controller::class,"insertar"])->name("suppliers.insertar");
Route::get("/listadoProveedores",[Suppliers_controller::class,"mostrar"])->name("suppliers.mostrar");
Route::get('/edit_suppliers/{id}', [Suppliers_controller::class, 'edit'])->name('suppliers.edit');
Route::post('/update_suppliers/{id}', [Suppliers_controller::class, 'update'])->name('suppliers.update');
Route::get('/delete_suppliers/{id}', [Suppliers_controller::class, 'delete'])->name('suppliers.delete');

Route::post("/registroMesas",[Tables_controller::class,"insertar"])->name("tables.insertar");
Route::get("/listadoMesas",[Tables_controller::class,"mostrar"])->name("tables.mostrar");
Route::get('/edit_tables/{id}', [Tables_controller::class, 'edit'])->name('edit_tables');
Route::post('/update_tables/{id}', [Tables_controller::class, 'update'])->name('update_tables');
Route::get('/delete_tables/{id}', [Tables_controller::class, 'delete'])->name('tables.delete');

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