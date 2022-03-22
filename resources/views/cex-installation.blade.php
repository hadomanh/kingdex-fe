@extends('layouts.app')

@section('content')
<!-- Installation Guide -->
<section class="subPage">
    <div class="container">
        <h2 class="sectionHeading">CEX Installation Guide</h2>
        <p class="fw-bold fst-italic">The KGD decentralized exchange has the following outstanding advantages:</p>
        <ul>
            <li class="mb-2">
                <p>Fast and accurate transaction speed, with a transaction speed of up to 100,000 orders/second.</p>
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <p class="text-center"><img src="{{ asset('img/subpage/cex-installation-guide-1.jpg') }}" alt="" class="img-thumbnail"></p>
                    </div>
                    <div class="col-md-5">
                        <p class="text-center"><img src="{{ asset('img/subpage/cex-installation-guide-2.jpg') }}" alt="" class="img-thumbnail"></p>
                    </div>
                </div>
            </li>
            <li class="mb-2">The system uses AWS (Amazon) provider-side database and Cloudflare security to ensure the safety of customer assets and transactions.</li>
            <li class="mb-2">Having a risk fund through the mechanism of monthly risk fund deduction from the transaction fee of the KGD exchange, this fund ensures the interests of users, fully paying for losses caused by the system's security.</li>
            <li class="mb-2">Game wallets, social network wallets can be used to connect with exchange wallets easily and conveniently, creating a closed ecosystem.</li>
            <li class="mb-2">
                <p>There are some new functions such as heirs, chart comparison line between two or more different Coins/Tokens, detailed calculation of PNL amount for each trading and common for all tradings, integration  added marketplaces of games on the ecosystem.</p>
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <p class="text-center"><img src="{{ asset('img/subpage/cex-installation-guide-3.jpg') }}" alt="" class="img-thumbnail"></p>
                    </div>
                    <div class="col-md-5">
                        <p class="text-center"><img src="{{ asset('img/subpage/cex-installation-guide-4.jpg') }}" alt="" class="img-thumbnail"></p>
                    </div>
                </div>
            </li>
            <li class="mb-2">Having full features like a CEX including Spot, Margin, Future trading and P2P, Defi-Bank 2.0, Coinlaunch and launchpad, NFT marketplace.</li>
            <li class="mb-2">Users can download the CEX dapp for PC, IOS and Android on the project's official website or on the Apple Store and Google Play. Note: We do not call or ask for any link to download and install applications, absolutely do not use public WIFI networks to log in to financial related applications.</li>
        </ul>
    </div>
</section>
@endsection
