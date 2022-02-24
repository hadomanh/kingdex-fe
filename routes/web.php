<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
})->name('home');

Route::prefix('news')->group(function () {
    Route::get('analysis', function () {
        return view('news-analysis');
    })->name('news.analysis');

    Route::get('dev', function () {
        return view('news-dev');
    })->name('news.dev');

    Route::get('information', function () {
        return view('news-information');
    })->name('news.information');

    Route::get('market', function () {
        return view('news-market');
    })->name('news.market');
});

Route::prefix('wallet')->group(function () {
    Route::get('change-password', function () {
        return view('wallet-change-password');
    })->name('wallet.change-password');
    
    Route::get('change-info', function () {
        return view('wallet-change-info');
    })->name('wallet.change-info');
    
    Route::get('deposit', function () {
        return view('wallet-deposit');
    })->name('wallet.deposit');
    
    Route::get('deposit', function () {
        return view('wallet-deposit');
    })->name('wallet.deposit');
    
    Route::get('getbackpass', function () {
        return view('wallet-getbackpass');
    })->name('wallet.getbackpass');
    
    Route::get('google', function () {
        return view('wallet-google');
    })->name('wallet.google');
    
    Route::get('introduce', function () {
        return view('wallet-introduce');
    })->name('wallet.introduce');
    
    Route::get('kyc', function () {
        return view('wallet-kyc');
    })->name('wallet.kyc');
    
    Route::get('login', function () {
        return view('wallet-login');
    })->name('wallet.login');
    
    Route::get('registration', function () {
        return view('wallet-registration');
    })->name('wallet.registration');
    
    Route::get('withdraw', function () {
        return view('wallet-withdraw');
    })->name('wallet.withdraw');
    
});

Auth::routes();

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', 'HomeController@index')->name('admin.index');
    Route::get('/news/toggle/{news}', [NewsController::class, 'toggle'])->name('news.toggle');
    Route::post('/news/image', [NewsController::class, 'imageUpload'])->name('news.image.upload');
    Route::resource('/news', 'NewsController');
});
