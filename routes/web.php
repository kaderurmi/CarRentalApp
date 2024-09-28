<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Admin\CarController as AdminCarController;
use App\Http\Controllers\Admin\RentalController as AdminRentalController;
use App\Http\Controllers\Admin\CustomerController as AdminCustomerController;
use App\Http\Controllers\Frontend\CarController as FrontendCarController;
use App\Http\Controllers\Frontend\RentalController as FrontendRentalController;

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
/*
Route::get('/', function () {
    return view('welcome');
});



*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/',[PageController::class,'HomePage'])->name('frontend.home');
Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
Route::get('/about', [PageController::class, 'about'])->name('frontend.about');
Route::get('/contact', [PageController::class, 'contact'])->name('frontend.contact');
/*
// Frontend Routes (User Interface)

// Car listings (browse cars)
Route::get('/cars', [FrontendCarController::class, 'index'])->name('cars.index');

// Car booking form and store booking
Route::middleware('auth')->group(function () {
    Route::get('/cars/book/{car}', [FrontendCarController::class, 'bookForm'])->name('frontend.cars.bookForm');
    Route::post('/cars/book/{car}', [FrontendCarController::class, 'book'])->name('frontend.cars.book');

    // View current and past rentals
    Route::get('/rentals', [FrontendRentalController::class, 'index'])->name('frontend.rentals.index');

    // Cancel a booking
    Route::delete('/rentals/{rental}', [FrontendRentalController::class, 'cancel'])->name('frontend.rentals.cancel');
});

// User authentication (Laravel Auth scaffolding)
//Auth::routes();


// Admin Routes (Admin Dashboard)
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {

    // Admin dashboard overview
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Manage Cars
    Route::resource('cars', AdminCarController::class);

    // Manage Rentals
    Route::resource('rentals', AdminRentalController::class)->except(['show']);

    // Manage Customers
    Route::get('customers', [AdminCustomerController::class, 'index'])->name('customers.index');
    Route::delete('customers/{customer}', [AdminCustomerController::class, 'destroy'])->name('customers.destroy');
});

*/
