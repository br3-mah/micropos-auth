<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\eCategoryContrl;
use App\Http\Controllers\eProductContrl;
use App\Http\Controllers\eUserController;
use App\Livewire\Category\CategoryListView;
use App\Livewire\Category\CreateCategoryView;
use App\Livewire\Orders\OrderDetailView;
use App\Livewire\Orders\OrderListView;
use App\Livewire\Products\CreateProductView;
use App\Livewire\Products\MyProductListView;
use App\Livewire\Products\ProductListView;
use App\Livewire\Tag\CreateTagView;
use App\Livewire\Tag\TagListView;
use App\Livewire\Users\AdvisorListView;
use App\Livewire\Users\AgronomistListView;
use App\Livewire\Users\CallCenterListView;
use App\Livewire\Users\FarmerListView;
use App\Livewire\Users\GuestListView;
use App\Livewire\Users\PaymentProviderListView;
use App\Livewire\Users\SellerListView;
use App\Livewire\Users\UserView;
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
    Route::get('/sellers', SellerListView::class)->name('sellers'); 
    Route::get('/guests', GuestListView::class)->name('guests'); 
    Route::get('/advisors', AdvisorListView::class)->name('advisors'); 
    Route::get('/agronomists', AgronomistListView::class)->name('agronomists'); 
    Route::get('/call-center', CallCenterListView::class)->name('call-center'); 
    Route::get('/farmers', FarmerListView::class)->name('farmers'); 
    Route::get('/agronomists', AgronomistListView::class)->name('agronomists'); 
    Route::get('/payment-providers', PaymentProviderListView::class)->name('payment-providers'); 
    Route::get('/marketplace-users', GuestListView::class)->name('marketplace-users'); 
    Route::get('/users/{id}', UserView::class)->name('view-user'); 
    Route::get('/users/{id}', UserView::class)->name('view-user'); 
    Route::post('/user-approve-now', [eUserController::class, 'approve'])->name('user.approve');
    
    //Products
    Route::get('/products', ProductListView::class)->name('products'); 
    Route::get('/my-products', MyProductListView::class)->name('my-products'); 
    Route::get('/create-product', CreateProductView::class)->name('create-product'); 

    //Categroies
    Route::get('/product-categories', CategoryListView::class)->name('categories'); 
    Route::get('/create-categories', CreateCategoryView::class)->name('create-categories'); 
    //Categroies
    Route::get('/product-tags', TagListView::class)->name('tags'); 
    Route::get('/create-tag', CreateTagView::class)->name('create-tag'); 

    // External DB Ops
    Route::get('/products/{id}', [eProductContrl::class, 'destroyProduct'])->name('products.destroy');
    Route::post('/store-product', [eProductContrl::class, 'storeProduct'])->name('product.store');
    Route::post('/store-category', [eCategoryContrl::class, 'storeCategory'])->name('category.store');
    Route::post('/store-tag', [eCategoryContrl::class, 'storeTag'])->name('tag.store');

    //Order & Deliveries
    Route::get('/customer-orders', OrderListView::class)->name('cust-orders'); 
    Route::get('/customer-order-details/{id}', OrderDetailView::class)->name('orders-detail'); 
    // Route::get('/my-orders', ProductListView::class)->name('my-orders');

});
