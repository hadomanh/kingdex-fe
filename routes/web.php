<?php

use App\Http\Controllers\NewsController;
use App\Models\News;
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

Route::prefix('coinlaunch')->group(function () {

    Route::get('introduce', function () {
        return view('coinlaunch-introduce');
    })->name('coinlaunch.introduce');

    Route::get('launchpad-news', function () {
        return view('coinlaunch-launchpad-news');
    })->name('coinlaunch.launchpad-news');

    Route::get('participation-guide', function () {
        return view('coinlaunch-participation-guide');
    })->name('coinlaunch.participation-guide');
});

Route::prefix('defi-bank-2.0')->group( function () {

    Route::get('kgd-staking', function () {
        return view('defi-kgd');
    })->name('defi.kgd');

});

Route::prefix('cex')->group(function () {

    Route::get('installation-guide', function () {
        return view('cex-installation');
    })->name('cex.installation');

    Route::get('instruction-to-join-coinlaunch', function () {
        return view('cex-coinlaunch');
    })->name('cex.coinlaunch');

    Route::get('instruction-to-join-defi-bank-2.0', function () {
        return view('cex-defi');
    })->name('cex.defi');

    Route::get('how-to-use-p2p-tool', function () {
        return view('cex-p2p');
    })->name('cex.p2p');

    Route::get('how-to-change-account-information', function () {
        return view('cex-account');
    })->name('cex.account');

    Route::get('how-to-use-deposit-and-withdraw-tool', function () {
        return view('cex-deposit-withdraw');
    })->name('cex.deposit-withdraw');

    Route::get('how-to-use-transfer-tool', function () {
        return view('cex-transfer-tool');
    })->name('cex.transfer-tool');

    Route::get('tax-and-fees-trading-updates', function () {
        return view('cex-tax-fee');
    })->name('cex.tax-fee');

    Route::get('news', function () {
        return view('cex-news');
    })->name('cex.news');
});

Route::prefix('social-network-3.0')->group(function () {

    Route::get('introduce', function () {
        return view('social-introduce');
    })->name('social.introduce');

});

Route::prefix('news')->group(function () {
    Route::get('analysis', function () {
        return view('news-analysis');
    })->name('news.analysis');

    Route::get('dev', function () {
        $news = News::where('id', 2)->first();
        return view('news-dev')->with(compact('news'));
    })->name('news.dev');

    Route::get('information', function () {
        return view('news-information');
    })->name('news.information');

    Route::get('market', function () {
        return view('news-market');
    })->name('news.market');

    Route::get('master-trading-strategy', function () {
        return view('news-trading');
    })->name('news.trading');
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
