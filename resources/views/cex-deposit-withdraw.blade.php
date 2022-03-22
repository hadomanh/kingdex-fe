@extends('layouts.app')

@section('content')
<!-- Deposit / withdraw tool -->
<section class="subPage">
    <div class="container">
        <h2 class="sectionHeading">How to use deposit and withdraw tools</h2>
        <h5 class="fw-bold text-center">DEPOSIT</h5>
        <p>Click on <strong>"Deposit"</strong> section of the exchange's wallet, select the type of Coin/Token to transfer, select the deposit network, you can choose one of three popular networks including: BEP20, TRC20, ERC20.</p>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <p class="text-center"><img src="{{ asset('img/subpage/cex-how-to-use-deposit-and-withdraw-tools-1.jpg') }}" alt="" class="img-thumbnail"></p>
            </div>
            <div class="col-md-5">
                <p class="text-center"><img src="{{ asset('img/subpage/cex-how-to-use-deposit-and-withdraw-tools-2.jpg') }}" alt="" class="img-thumbnail"></p>
            </div>
        </div>                
        <p>Users can scan the QR code to get the wallet address or copy the address that appears in the deposit section, note that <strong class="text-danger">only in BEP 20, ERC20 or TRC20 system</strong> ,if the wrong system is transferred, we are not responsible for reimbursement.</p>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <p class="text-center"><img src="{{ asset('img/subpage/cex-how-to-use-deposit-and-withdraw-tools-3.jpg') }}" alt="" class="img-thumbnail"></p>
            </div>
            <div class="col-md-5">
                <p class="text-center"><img src="{{ asset('img/subpage/cex-how-to-use-deposit-and-withdraw-tools-4.jpg') }}" alt="" class="img-thumbnail"></p>
            </div>
        </div>
        <h5 class="fw-bold text-center">Withdraw</h5>
        <p>Users who want to transfer money to another wallet, after successfully logging in, go to withdraw button, pay attention that they should not go to any fake links to transfer money to another wallet.</p>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <p class="text-center"><img src="{{ asset('img/subpage/cex-how-to-use-deposit-and-withdraw-tools-5.jpg') }}" alt="" class="img-thumbnail"></p>
            </div>
            <div class="col-md-5">
                <p class="text-center"><img src="{{ asset('img/subpage/cex-how-to-use-deposit-and-withdraw-tools-6.jpg') }}" alt="" class="img-thumbnail"></p>
            </div>
        </div>
        <p>Withdraw fee on KGD CEX will be calculated not only based on different coins but also adjusted according to market situation. Each type of Coin/Token when withdrawing will require a small and fixed fee, please see carefully the withdrawal fee for each type when withdrawing.</p>
        <p><strong class="text-danger fst-italic">Note</strong> that the user needs to choose the correct system to withdraw, if the system is wrong, the KGD exchange will not be responsible for this, so the user should pay special attention and check the received wallet address carefully and the system to withdraw.</p>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <p class="text-center"><img src="{{ asset('img/subpage/cex-how-to-use-deposit-and-withdraw-tools-7.jpg') }}" alt="" class="img-thumbnail"></p>
            </div>
            <div class="col-md-5">
                <p class="text-center"><img src="{{ asset('img/subpage/cex-how-to-use-deposit-and-withdraw-tools-8.jpg') }}" alt="" class="img-thumbnail"></p>
            </div>
        </div>
    </div>
</section>
@endsection
