<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;

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

// Route::get('/', [bookController::class, 'index'])->name('books');
// Route::get('/books', [bookController::class, 'all']);
// Route::post('/create', [bookController::class, 'store']);
// Route::get('/show', [bookController::class, 'show'])->id('books');

Route::resource('library', LibraryController::class);
Route::get('/', function(){
    // return redirect()->route('library.index');
    return "hi, it's from oxy!";
});
