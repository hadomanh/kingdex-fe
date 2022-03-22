@extends('layouts.app')

@section('content')
<!-- How to use -->
<section class="subPage">
    <div class="container">
        <h2 class="sectionHeading">How to use transfer tool</h2>                
        <p>The function is to transfer Coins/Tokens between wallets in KGD's ecosystem, transferring money between wallets on the exchange is free, but switching to cold wallets still incurs gas fees of BSC system because cold wallets are real wallets and users fully manage that wallet themselves.</p>
        <p class="text-center"><img src="{{ asset('img/subpage/cex-how-to-use-transfer-tool-0.jpg') }}" alt="" class="img-thumbnail"></p>
        <p>When entering the interface of the <strong>"Transfer"</strong> section, select the type of Coin/Token to be transferred, the currency can be found in the <strong> "Search"</strong> section and the Coin/Token list.</p>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <p class="text-center"><img src="{{ asset('img/subpage/cex-how-to-use-transfer-tool-1.jpg') }}" alt="" class="img-thumbnail"></p>
            </div>
            <div class="col-md-5">
                <p class="text-center"><img src="{{ asset('img/subpage/cex-how-to-use-transfer-tool-2.jpg') }}" alt="" class="img-thumbnail"></p>
            </div>
        </div>
        <p>Select the type of wallets to transfer to from the list of opened wallets, pay attention to choose the correct wallet type and check again after choosing carefully.</p>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <p class="text-center"><img src="{{ asset('img/subpage/cex-how-to-use-transfer-tool-3.jpg') }}" alt="" class="img-thumbnail"></p>
            </div>
            <div class="col-md-5">
                <p class="text-center"><img src="{{ asset('img/subpage/cex-how-to-use-transfer-tool-4.jpg') }}" alt="" class="img-thumbnail"></p>
            </div>
        </div>
        <p>Check the type of wallet to be transferred, check the transfer fee (if any), click on the <strong>“Accept”</strong> button to transfer, the balance will be deducted from the transferred wallet and reported in the received wallet.</p>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <p class="text-center"><img src="{{ asset('img/subpage/cex-how-to-use-transfer-tool-5.jpg') }}" alt="" class="img-thumbnail"></p>
            </div>
            <div class="col-md-5">
                <p class="text-center"><img src="{{ asset('img/subpage/cex-how-to-use-transfer-tool-6.jpg') }}" alt="" class="img-thumbnail"></p>
            </div>
        </div>
    </div>
</section>
@endsection
