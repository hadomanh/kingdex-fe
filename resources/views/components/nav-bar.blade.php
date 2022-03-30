<!-- Header -->
<header>
    <div class="container">
        <div class="top">
            <div class="navbarMobile">
                <span class="navbarToggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <div class="logo">
                    <lottie-player src="{{ asset('json/lf30_3ohbco1w.json') }}"  background="transparent" speed="1" loop autoplay></lottie-player>
                    <img src="{{ asset('img/logo.gif') }}" alt="" width="127">
                </div>
            </div>
            <h1 class="title">King of Games and Dex</h1>
            <div class="subTitle">is a leading technological company in the industries of Finance, Crypto and Decentralized and Centralized Exchange</div>
            <div class="buttonAction">
                <a href="https://wallet.kingdex.io/register" target="_blank" class="btn btn-light">Register</a>
                <a href="https://wallet.kingdex.io/login" target="_blank" class="btn btn-danger">Login</a>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg dropdown-hover-all_">
            <span class="closeMenu">
                <span></span>
                <span></span>
            </span>
            <ul class="navbar-nav">
                <li class="nav-item menu-home">
                    <a class="nav-link {{ $isActive('home') }}" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item dropdown menu-wallets">
                    <a class="nav-link dropdown-toggle {{ $isActive('wallet') }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Wallets</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('wallet.introduce') }}">Introduce</a></li>
                        <li><a class="dropdown-item" href="{{ route('wallet.google') }}">Google Authentication installation guide?</a></li>
                        <li><a class="dropdown-item" href="{{ route('wallet.registration') }}">Account registration guide?</a></li>
                        <li><a class="dropdown-item" href="{{ route('wallet.login') }}">Account login guide?</a></li>
                        <li><a class="dropdown-item" href="{{ route('wallet.change-info') }}">Instrustions for changing information</a></li>
                        <li><a class="dropdown-item" href="{{ route('wallet.kyc') }}">KYC guide</a></li>
                        <li><a class="dropdown-item" href="{{ route('wallet.getbackpass') }}">Instructions for getting your password back?</a></li>
                        <li><a class="dropdown-item" href="{{ route('wallet.change-password') }}">How to change password?</a></li>
                        <li><a class="dropdown-item" href="{{ route('wallet.deposit') }}">Deposit Guide?</a></li>
                        <li><a class="dropdown-item" href="{{ route('wallet.withdraw') }}">Withdraw Guide?</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown menu-coinlaunch">
                    <a class="nav-link dropdown-toggle {{ $isActive('coinlaunch') }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Coinlaunch</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('coinlaunch.introduce') }}">Introduce</a></li>
                        <li><a class="dropdown-item" href="{{ route('coinlaunch.launchpad-news') }}">Launchpad news</a></li>
                        <li class="dropdown dropend">
                            <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Information of Coinlaunch</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown-layouts">
                                <li><a class="dropdown-item" href="{{ route('news.information') }}">KGD information</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('coinlaunch.participation-guide') }}">Participation guide?</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown menu-defi">
                    <a class="nav-link dropdown-toggle {{ $isActive('cex') }} {{ $isActive('defi') }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Defi-bank 2.0</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('cex.defi') }}">Introduce</a></li>
                        <li class="dropdown dropend">
                            <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Defi-bank 2.0 news</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown-layouts">
                                <li><a class="dropdown-item" href="{{ route('defi.kgd') }}">KGD Staking</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown menu-cex">
                    <a class="nav-link dropdown-toggle {{ $isActive('cex') }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">CEX</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('cex.installation') }}">CEX Installation Guide?</a></li>
                        <li><a class="dropdown-item" href="{{ route('cex.coinlaunch') }}">Instructions to join Coinlaunch</a></li>
                        <li><a class="dropdown-item" href="{{ route('cex.defi') }}">Instructions to join Defi-Bank 2.0</a></li>
                        <li><a class="dropdown-item" href="{{ route('cex.p2p') }}">How to use P2P tool?</a></li>
                        <li><a class="dropdown-item" href="{{ route('cex.account') }}">How to change account information?</a></li>
                        <li><a class="dropdown-item" href="{{ route('cex.deposit-withdraw') }}">How to use deposit and withdraw tools?</a></li>
                        <li><a class="dropdown-item" href="{{ route('cex.transfer-tool') }}">How to use tranfer tool?</a></li>
                        <li><a class="dropdown-item" href="{{ route('cex.tax-fee') }}">Tax and fees trading updates</a></li>
                        <li><a class="dropdown-item" href="{{ route('cex.spot-market-trading-guide') }}">Spot-Market trading guide?</a></li>
                        <li><a class="dropdown-item" href="{{ route('cex.margin-trading-guide') }}">Margin trading guide?</a></li>
                        <li><a class="dropdown-item" href="{{ route('cex.future-trading-guide') }}">Future trading guide?</a></li>
                        <li><a class="dropdown-item" href="{{ route('cex.news') }}">CEX news?</a></li>
                        <li><a class="dropdown-item" href="{{ route('cex.events') }}">CEX events?</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown menu-game">
                    <a class="nav-link dropdown-toggle {{ $isActive('games') }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Games</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown-layouts">
                        <li><a class="dropdown-item" href="{{ route('games.introduce') }}">Introduce</a></li>
                        <li><a class="dropdown-item" href="{{ route('games.news') }}">Games news?</a></li>
                        <li class="dropdown dropend">
                            <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Avenger game</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown-layouts">
                                <li><a class="dropdown-item" href="{{ route('games.avenger-plot-and-characters') }}">Plot and characters</a></li>
                                <li><a class="dropdown-item" href="{{ route('games.avenger-news') }}">AVENGERS news?</a></li>
                                <li><a class="dropdown-item" href="{{ route('games.avenger-marketplace') }}">Marketplace</a></li>
                                <li><a class="dropdown-item" href="{{ route('games.avengers-events') }}">Avengers events?</a></li>
                                <li><a class="dropdown-item" href="{{ route('games.avengers-installation-and-login-instructions') }}">Installation and login instructions?</a></li>
                                <li><a class="dropdown-item" href="{{ route('games.avengers-how-to-use-the-avatar-tool') }}">How to use the avatar tool?</a></li>
                                <li><a class="dropdown-item" href="{{ route('games.avengers-using-chat-tool-and-making-friends') }}">Using chat tool and making friends?</a></li>
                                <li><a class="dropdown-item" href="{{ route('games.avengers-instructions-for-using-ingame-wallet') }}">Instructions for using ingame wallet?</a></li>
                                <li><a class="dropdown-item" href="{{ route('games.avengers-guide-to-join-pvp-adventure-and-arena') }}">Guide to join PVP, Adventure and Arena</a></li>
                                <li><a class="dropdown-item" href="{{ route('games.avengers-guide-to-join-championship-final-tour') }}">Guide to join Championship, Final tour</a></li>
                                <li><a class="dropdown-item" href="{{ route('games.avengers-guide-to-join-lucky-wheel') }}">Guide to join Lucky wheel?</a></li>
                                <li><a class="dropdown-item" href="{{ route('games.avengers-guide-to-join-minigames') }}">Guide to join minigames?</a></li>
                                <li><a class="dropdown-item" href="{{ route('games.avengers-how-to-use-ugrade-tools') }}">How to use ugrade tools?</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('games.popo-turnbase-3d-game') }}">POPO turnbase 3D Game</a></li>
                        <li><a class="dropdown-item" href="{{ route('games.kgd-moba-3d-game') }}">KGD moba 3D Game</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown menu-social">
                    <a class="nav-link dropdown-toggle {{ $isActive('social') }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Social network 3.0</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('social.introduce') }}">Introduce</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown menu-news">
                    <a class="nav-link dropdown-toggle {{ $isActive('news') }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">News</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('news.dev') }}">DEV Team updates?</a></li>
                        <li><a class="dropdown-item" href="{{ route('news.information') }}">Information of KGD coin?</a></li>
                        <li><a class="dropdown-item" href="{{ route('news.analysis') }}">BTC, ETH, BNB, KGD Analysis</a></li>
                        <li><a class="dropdown-item" href="{{ route('news.market') }}">Market news?</a></li>
                        <li><a class="dropdown-item" href="{{ route('news.trading') }}">Master trading strategy</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>
