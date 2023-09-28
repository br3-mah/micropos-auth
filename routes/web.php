<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MainController;
use App\Livewire\Products\CreateProductView;
use App\Livewire\Products\MyProductListView;
use App\Livewire\Products\ProductListView;
use App\Livewire\Users\AdvisorListView;
use App\Livewire\Users\AgronomistListView;
use App\Livewire\Users\CallCenterListView;
use App\Livewire\Users\FarmerListView;
use App\Livewire\Users\GuestListView;
use App\Livewire\Users\PaymentProviderListView;
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


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Users
    Route::get('/guests', GuestListView::class)->name('guests'); 
    Route::get('/advisors', AdvisorListView::class)->name('advisors'); 
    Route::get('/call-center', CallCenterListView::class)->name('call-center'); 
    Route::get('/farmers', FarmerListView::class)->name('farmers'); 
    Route::get('/agronomists', AgronomistListView::class)->name('agronomists'); 
    Route::get('/payment-providers', PaymentProviderListView::class)->name('payment-providers'); 
    Route::get('/marketplace-users', GuestListView::class)->name('marketplace-users'); 

    //Products
    Route::get('/products', ProductListView::class)->name('products'); 
    Route::get('/my-products', MyProductListView::class)->name('my-products'); 
    Route::get('/create-product', CreateProductView::class)->name('create-product'); 
    Route::get('/products/{id}', [MainController::class, 'destroyProduct'])->name('products.destroy');

    //Order & Deliveries
    // Route::get('/customer-orders', ProductListView::class)->name('cust-orders'); 
    // Route::get('/my-orders', ProductListView::class)->name('my-orders');

});
