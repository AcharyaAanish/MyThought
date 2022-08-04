<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('Front.landing');
});

Route::resource('/front','FrontController');

Route::get('/searchbooks','BookController@search');
Route::get('/searchmovies','MovieController@search');
Route::get('/searchblogs','BlogController@search');
Route::get('/searchtakeme','TakeController@search');

// Route::resource('/dashboard','AdminController');
// require __DIR__.'/auth.php';
Route::resource('/about', 'AboutController');
Route::resource('/book', 'BookController');
Route::resource('/movie', 'MovieController');
Route::resource('/blog','BlogController');
Route::resource('/take','TakeController');
Route::resource('/contact', 'ContactController');
Route::resource('/user', 'UserManagementController');



Route::get('/bookaction',function(){
    return view('Book.action');
});
Route::get('/bookclassics',function(){
    return view('Book.classics');
});
Route::get('/bookcomic',function(){
    return view('Book.comic');
});
Route::get('/bookhorror',function(){
    return view('Book.horror');
});
Route::get('/bookliterary',function(){
    return view('Book.literarcy');
});
Route::get('/bookfront',function(){
    return view('Front.books');
});
Route::get('/moviefront',function(){
    return view('Front.movie');
});
Route::get('/blogfront',function(){
    return view('Blog.blogs');
});
Route::get('/movieaction',function(){
    return view('Movies.action');
});
Route::get('/moviecomedy',function(){
    return view('Movies.comedy');
});
Route::get('/moviedrama',function(){
    return view('Movies.drama');
});
Route::get('/moviefantasy',function(){
    return view('Movies.fantasy');
});
Route::get('/moviehorror',function(){
    return view('Movies.horror');
});
Route::get('/movieromance',function(){
    return view('Movies.romance');
});
Route::get('/moviethriller',function(){
    return view('Movies.thriller');
});
Route::get('/moviemystery',function(){
    return view('Movies.mystery');
});
Route::get('/contactfront', function(){
    return view('Contact.contact');
});
Route::get('/takemefront', function(){
    return view('Takeme.takeme');
});
Route::get('/payment', function(){
    return view('Takeme.paymentmethod');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
