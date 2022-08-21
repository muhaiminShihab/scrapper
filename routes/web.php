<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScrapperController;

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
    return view('welcome');
});


Route::get('/yoyo', function() {
    $crawler = Goutte::request('GET', 'https://medex.com.bd/companies');
    $crawler->filter('.col-xs-12 .data-row')->each(function ($node) {
      dump($node->text());
    });
});

Route::get('/scrapper', [ScrapperController::class, 'scrapper']);
