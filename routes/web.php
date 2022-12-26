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
    $news = News::where('id', 55)->first();
        return view('subpage-content')->with(compact('news'));
})->name('home');

Route::prefix('wallet')->group(function () {
    Route::get('introduce', function () {
        $news = News::where('id', 3)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('wallet.introduce');

    Route::get('google', function () {
        $news = News::where('id', 4)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('wallet.google');

    Route::get('registration', function () {
        $news = News::where('id', 5)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('wallet.registration');

    Route::get('login', function () {
        $news = News::where('id', 6)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('wallet.login');

    Route::get('change-info', function () {
        $news = News::where('id', 7)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('wallet.change-info');

    Route::get('kyc', function () {
        $news = News::where('id', 8)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('wallet.kyc');

    Route::get('getbackpass', function () {
        $news = News::where('id', 9)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('wallet.getbackpass');

    Route::get('change-password', function () {
        $news = News::where('id', 10)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('wallet.change-password');
    
    Route::get('deposit', function () {
        $news = News::where('id', 11)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('wallet.deposit');
    
    Route::get('withdraw', function () {
        $news = News::where('id', 12)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('wallet.withdraw');

    Route::get('swap-and-dex', function () {
        $news = News::where('id', 57)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('wallet.swap-and-dex');

    Route::get('wallet-transfers', function () {
        $news = News::where('id', 58)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('wallet.transfers');

    Route::get('earn-money-4.0', function () {
        $news = News::where('id', 59)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('wallet.earn-money');

    Route::get('hot-wallets', function () {
        $news = News::where('id', 60)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('wallet.hot-wallets');

    Route::get('game-wallets', function () {
        $news = News::where('id', 61)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('wallet.game-wallets');
    
});

Route::prefix('coinlaunch')->group(function () {

    Route::get('introduce', function () {
        $news = News::where('id', 13)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('coinlaunch.introduce');

    Route::get('launchpad-news', function () {
        $news = News::where('id', 14)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('coinlaunch.launchpad-news');

    Route::get('participation-guide', function () {
        $news = News::where('id', 16)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('coinlaunch.participation-guide');
});

Route::prefix('defi-bank-2.0')->group( function () {

    Route::get('kgd-staking', function () {
        $news = News::where('id', 18)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('defi.kgd');

});

Route::prefix('cex')->group(function () {

    Route::get('installation-guide', function () {
        $news = News::where('id', 19)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('cex.installation');

    Route::get('instruction-to-join-coinlaunch', function () {
        $news = News::where('id', 20)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('cex.coinlaunch');

    Route::get('instruction-to-join-defi-bank-2.0', function () {
        $news = News::where('id', 17)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('cex.defi');

    Route::get('how-to-use-p2p-tool', function () {
        $news = News::where('id', 22)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('cex.p2p');

    Route::get('how-to-change-account-information', function () {
        $news = News::where('id', 23)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('cex.account');

    Route::get('how-to-use-deposit-and-withdraw-tool', function () {
        $news = News::where('id', 24)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('cex.deposit-withdraw');

    Route::get('how-to-use-transfer-tool', function () {
        $news = News::where('id', 25)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('cex.transfer-tool');

    Route::get('tax-and-fees-trading-updates', function () {
        $news = News::where('id', 26)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('cex.tax-fee');

    Route::get('spot-market-trading-guide', function () {
        $news = News::where('id', 34)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('cex.spot-market-trading-guide');

    Route::get('margin-trading-guide', function () {
        $news = News::where('id', 35)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('cex.margin-trading-guide');

    Route::get('future-trading-guide', function () {
        $news = News::where('id', 36)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('cex.future-trading-guide');    

    Route::get('news', function () {
        $news = News::where('id', 27)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('cex.news');

    Route::get('events', function () {
        $news = News::where('id', 54)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('cex.events');
});

Route::prefix('games')->group(function () {

    Route::get('introduce', function () {
        $news = News::where('id', 37)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('games.introduce');

    Route::get('news', function () {
        $news = News::where('id', 38)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('games.news');

    Route::get('avenger-plot-and-characters', function () {
        $news = News::where('id', 39)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('games.avenger-plot-and-characters');

    Route::get('avenger-news', function () {
        $news = News::where('id', 40)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('games.avenger-news');

    Route::get('avenger-marketplace', function () {
        $news = News::where('id', 41)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('games.avenger-marketplace');

    Route::get('avengers-events', function () {
        $news = News::where('id', 42)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('games.avengers-events');

    Route::get('avengers-installation-and-login-instructions', function () {
        $news = News::where('id', 43)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('games.avengers-installation-and-login-instructions');

    Route::get('avengers-how-to-use-the-avatar-tool', function () {
        $news = News::where('id', 44)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('games.avengers-how-to-use-the-avatar-tool');

    Route::get('avengers-using-chat-tool-and-making-friends', function () {
        $news = News::where('id', 45)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('games.avengers-using-chat-tool-and-making-friends');

    Route::get('avengers-instructions-for-using-ingame-wallet', function () {
        $news = News::where('id', 46)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('games.avengers-instructions-for-using-ingame-wallet');

    Route::get('avengers-guide-to-join-pvp-adventure-and-arena', function () {
        $news = News::where('id', 47)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('games.avengers-guide-to-join-pvp-adventure-and-arena');

    Route::get('avengers-guide-to-join-championship-final-tour', function () {
        $news = News::where('id', 48)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('games.avengers-guide-to-join-championship-final-tour');

    Route::get('avengers-guide-to-join-lucky-wheel', function () {
        $news = News::where('id', 49)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('games.avengers-guide-to-join-lucky-wheel');

    Route::get('avengers-guide-to-join-minigames', function () {
        $news = News::where('id', 50)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('games.avengers-guide-to-join-minigames');

    Route::get('avengers-how-to-use-ugrade-tools', function () {
        $news = News::where('id', 51)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('games.avengers-how-to-use-ugrade-tools');

    Route::get('popo-turnbase-3d-game', function () {
        $news = News::where('id', 52)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('games.popo-turnbase-3d-game');

    Route::get('kgd-moba-3d-game', function () {
        $news = News::where('id', 53)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('games.kgd-moba-3d-game');

});

Route::prefix('social-network-3.0')->group(function () {

    Route::get('introduce', function () {
        $news = News::where('id', 28)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('social.introduce');

});

Route::prefix('news')->group(function () {

    Route::get('dev', function () {
        $news = News::where('id', 29)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('news.dev');

    Route::get('information', function () {
        $news = News::where('id', 15)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('news.information');

    Route::get('analysis', function () {
        $news = News::where('id', 31)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('news.analysis');

    Route::get('market', function () {
        $news = News::where('id', 32)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('news.market');

    Route::get('master-trading-strategy', function () {
        $news = News::where('id', 33)->first();
        return view('subpage-content')->with(compact('news'));
    })->name('news.trading');
});

Auth::routes();

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', 'HomeController@index')->name('admin.index');
    Route::get('/news/toggle/{news}', [NewsController::class, 'toggle'])->name('news.toggle');
    Route::post('/news/image', [NewsController::class, 'imageUpload'])->name('news.image.upload');
    Route::resource('/news', 'NewsController');
});
