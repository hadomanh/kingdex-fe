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
        $news = News::where('id', 13)->first();
        return view('coinlaunch-introduce')->with(compact('news'));
    })->name('coinlaunch.introduce');

    Route::get('launchpad-news', function () {
        $news = News::where('id', 14)->first();
        return view('coinlaunch-launchpad-news')->with(compact('news'));
    })->name('coinlaunch.launchpad-news');

    Route::get('participation-guide', function () {
        $news = News::where('id', 16)->first();
        return view('coinlaunch-participation-guide')->with(compact('news'));
    })->name('coinlaunch.participation-guide');
});

Route::prefix('defi-bank-2.0')->group( function () {

    Route::get('kgd-staking', function () {
        $news = News::where('id', 18)->first();
        return view('defi-kgd')->with(compact('news'));
    })->name('defi.kgd');

});

Route::prefix('cex')->group(function () {

    Route::get('installation-guide', function () {
        $news = News::where('id', 19)->first();
        return view('cex-installation')->with(compact('news'));
    })->name('cex.installation');

    Route::get('instruction-to-join-coinlaunch', function () {
        $news = News::where('id', 20)->first();
        return view('cex-coinlaunch')->with(compact('news'));
    })->name('cex.coinlaunch');

    Route::get('instruction-to-join-defi-bank-2.0', function () {
        $news = News::where('id', 17)->first();
        return view('cex-defi')->with(compact('news'));
    })->name('cex.defi');

    Route::get('how-to-use-p2p-tool', function () {
        $news = News::where('id', 22)->first();
        return view('cex-p2p')->with(compact('news'));
    })->name('cex.p2p');

    Route::get('how-to-change-account-information', function () {
        $news = News::where('id', 23)->first();
        return view('cex-account')->with(compact('news'));
    })->name('cex.account');

    Route::get('how-to-use-deposit-and-withdraw-tool', function () {
        $news = News::where('id', 24)->first();
        return view('cex-deposit-withdraw')->with(compact('news'));
    })->name('cex.deposit-withdraw');

    Route::get('how-to-use-transfer-tool', function () {
        $news = News::where('id', 25)->first();
        return view('cex-transfer-tool')->with(compact('news'));
    })->name('cex.transfer-tool');

    Route::get('tax-and-fees-trading-updates', function () {
        $news = News::where('id', 26)->first();
        return view('cex-tax-fee')->with(compact('news'));
    })->name('cex.tax-fee');

    Route::get('news', function () {
        $news = News::where('id', 27)->first();
        return view('cex-news')->with(compact('news'));
    })->name('cex.news');
});

Route::prefix('social-network-3.0')->group(function () {

    Route::get('introduce', function () {
        $news = News::where('id', 28)->first();
        return view('social-introduce')->with(compact('news'));
    })->name('social.introduce');

});

Route::prefix('news')->group(function () {
    Route::get('analysis', function () {
        $news = News::where('id', 31)->first();
        return view('news-analysis')->with(compact('news'));
    })->name('news.analysis');

    Route::get('dev', function () {
        $news = News::where('id', 29)->first();
        return view('news-dev')->with(compact('news'));
    })->name('news.dev');

    Route::get('information', function () {
        $news = News::where('id', 15)->first();
        return view('news-information')->with(compact('news'));
    })->name('news.information');

    Route::get('market', function () {
        $news = News::where('id', 32)->first();
        return view('news-market')->with(compact('news'));
    })->name('news.market');

    Route::get('master-trading-strategy', function () {
        $news = News::where('id', 33)->first();
        return view('news-trading')->with(compact('news'));
    })->name('news.trading');
});

Route::prefix('wallet')->group(function () {
    Route::get('change-password', function () {
        $news = News::where('id', 10)->first();
        return view('wallet-change-password')->with(compact('news'));
    })->name('wallet.change-password');
    
    Route::get('change-info', function () {
        $news = News::where('id', 7)->first();
        return view('wallet-change-info')->with(compact('news'));
    })->name('wallet.change-info');
    
    Route::get('deposit', function () {
        $news = News::where('id', 11)->first();
        return view('wallet-deposit')->with(compact('news'));
    })->name('wallet.deposit');
    
    
    Route::get('getbackpass', function () {
        $news = News::where('id', 9)->first();
        return view('wallet-getbackpass')->with(compact('news'));
    })->name('wallet.getbackpass');
    
    Route::get('google', function () {
        $news = News::where('id', 4)->first();
        return view('wallet-google')->with(compact('news'));
    })->name('wallet.google');
    
    Route::get('introduce', function () {
        $news = News::where('id', 3)->first();
        return view('wallet-introduce')->with(compact('news'));
    })->name('wallet.introduce');
    
    Route::get('kyc', function () {
        $news = News::where('id', 8)->first();
        return view('wallet-kyc')->with(compact('news'));
    })->name('wallet.kyc');
    
    Route::get('login', function () {
        return view('wallet-login');
    })->name('wallet.login');
    
    Route::get('registration', function () {
        $news = News::where('id', 5)->first();
        return view('wallet-registration')->with(compact('news'));
    })->name('wallet.registration');
    
    Route::get('withdraw', function () {
        $news = News::where('id', 12)->first();
        return view('wallet-withdraw')->with(compact('news'));
    })->name('wallet.withdraw');
    
});

Auth::routes();

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', 'HomeController@index')->name('admin.index');
    Route::get('/news/toggle/{news}', [NewsController::class, 'toggle'])->name('news.toggle');
    Route::post('/news/image', [NewsController::class, 'imageUpload'])->name('news.image.upload');
    Route::resource('/news', 'NewsController');
});
