<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrivateController;
use App\Http\Controllers\LocalizationController;

use Illuminate\Support\Facades\App as FacadesApp;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/about-us', [HomeController::class, 'about']);


Route::post('/inquiry', [HomeController::class, 'inquiry']);

Route::get('/media-center', [HomeController::class, 'mediaCenter']);

Route::get('/products', [HomeController::class, 'store']);



// register routes //
// post: check form data and send it to database 
Route::post('/register', [HomeController::class, 'register']);
// get: fetch the register view page and show it to the user
Route::get('/register', [HomeController::class, 'registerPage']);



Route::get('/login', [HomeController::class, 'loginPage'])->name('login');

Route::post('/login', [PrivateController::class, 'login']);
Route::get('/dashboard', [PrivateController::class, 'dashboard'])->middleware('auth');
Route::get('/support', [PrivateController::class, 'supportPage'])->middleware('auth');

Route::get('/add-news', [PrivateController::class, 'addNewsPage'])->middleware('auth');

Route::post('/add-media-center', [PrivateController::class, 'addMediaCenter'])->middleware('auth');


// Route::get('/edit-menu', [PrivateController::class, 'editMenuPage'])->middleware('auth');
// Route::get('/add-menu', [PrivateController::class, 'addMenuPage'])->middleware('auth');
// Route::post('/add-menu', [PrivateController::class, 'addMenu'])->middleware('auth');
// Route::get('/edit-menu/{id}', [PrivateController::class, 'editMenuByIDPage'])->middleware('auth');



Route::post('/logout', [PrivateController::class, 'logout']);

Route::get('/edit-news/{id}', function ($id) {

    $mediaCenter = DB::table('media_center')->where('id', $id)->get();

    return view('private.editNews', ["mediaCenter" => $mediaCenter]);
})->middleware('auth');

Route::get('/delete-news/{id}', function ($id) {
    DB::table('media_center')->where('id', $id)->delete();
    return redirect()->back()->with('message', 'تم حذف الخبر بنجاح!');
})->middleware('auth');

Route::post('/edit-news/{id}', [PrivateController::class, 'editMediaCenter'])->middleware('auth');


Route::get('/books', [PrivateController::class, 'BooksPage'])->middleware('auth');

Route::get('/add-books', [PrivateController::class, 'addBooksPage'])->middleware('auth');

Route::post('/add-books', [PrivateController::class, 'addBooks'])->middleware('auth');

Route::get('/users', [PrivateController::class, 'usersPage'])->middleware('auth');

Route::get('/add-user', [PrivateController::class, 'adduserPage'])->middleware('auth');

Route::post('/add-user', [PrivateController::class, 'addUser'])->middleware('auth');

Route::get('/edit-book/{id}', [PrivateController::class, 'editBooksPage'])->middleware('auth');

Route::post('/edit-book/{id}', [PrivateController::class, 'editBooks'])->middleware('auth');


Route::get('/delete-book/{id}', function ($id) {
    DB::table('books')->where('id', $id)->delete();
    return redirect()->back()->with('message', 'تم حذف الكتاب بنجاح!');
})->middleware('auth');


// Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => LocalizationController::class, 'index']);
// Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
Route::get('lang/{lang}', [LocalizationController::class, 'index'])->name('lang.switch');
