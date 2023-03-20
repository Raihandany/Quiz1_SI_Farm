<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\SellController;

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

// Route::get('/welcome', function () {
//     return view('welcome');

// });

Route::get('/bb', function () {
    return view('billboard');

});

Auth::routes();

use Tests\TestCase;
 
class ExampleTest extends TestCase
{
    public function test_without_vite_example(): void
    {
        $this->withoutVite();
 
        Route::get('/home', [App\Http\Controllers\AppController::class, 'index'])->name('home');
        Route::get('/', [App\Http\Controllers\AppController::class, 'index'])->name('home');
        Route::get('/shop', [App\Http\Controllers\AppController::class, 'index'])->name('home')->middleware('auth');
        Route::get('/cart', [App\Http\Controllers\AppController::class, 'index'])->name('home')->middleware('auth');
        Route::get('/admin', [App\Http\Controllers\AppController::class, 'admin'])->name('admin')->middleware('auth');
        Route::get('/admin/{any}', [App\Http\Controllers\AppController::class, 'admin'])->where('any', '.*')->middleware('auth');
        Route::get('/{any}', [App\Http\Controllers\AppController::class, 'index'])->where('any', '.*');
        
    }
}



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
