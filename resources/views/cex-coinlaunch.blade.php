@extends('layouts.app')

@section('content')

<!-- Instruction -->
<!-- <section class="subPage">
    <div class="container">
        <h2 class="sectionHeading">Instructions to join Coinlaunch</h2>
        <p>After logging in the KGD centralized exchange application of the ecosystem, on the main screen, go to the <strong>“Coinlaunch”</strong> section to participate in buying ICOs of potential projects opening for sale.</p>
        <p class="text-center"><img src="img/subpage/cex-instructions-to-join-coinlauinch-1.jpg" alt="" class="img-thumbnail"></p>
        <p>In the list of Coins/Tokens being opened for sale in the ICO rounds, select the project that has looked up the detail information and wants to participate in investing in the project at an early stage. There is also a list of purchased Coins/Tokens and details of the payments according to the time of the ICO sale</p>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <p class="text-center"><img src="{{ asset('img/subpage/cex-instructions-to-join-coinlauinch-2.jpg') }}" alt="" class="img-thumbnail"></p>
            </div>
            <div class="col-md-5">
                <p class="text-center"><img src="{{ asset('img/subpage/cex-instructions-to-join-coinlauinch-3.jpg') }}" alt="" class="img-thumbnail"></p>
            </div>
        </div>
        <p>Click on the <strong>“Join in”</strong> button to participate in the ICO sale of the selected Coin/Token, enter the interface that is detailing this sale. Enter the Coin/Token amount you want to participate and press the <strong>“Check”</strong> button.</p>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <p class="text-center"><img src="{{ asset('img/subpage/cex-instructions-to-join-coinlauinch-4.jpg') }}" alt="" class="img-thumbnail"></p>
            </div>
            <div class="col-md-5">
                <p class="text-center"><img src="{{ asset('img/subpage/cex-instructions-to-join-coinlauinch-5.jpg') }}" alt="" class="img-thumbnail"></p>
            </div>
        </div>
        <p>After checking the details of the payments, if you agree to buy at the selected price and quantity, then click on the <strong>“Accept”</strong> button, two-factor authentication (2FA) to complete the ICO purchase procedure. When buying ICO on the exchange's application, there is no gas fee like using Cold wallets on the website.</p>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <p class="text-center"><img src="{{ asset('img/subpage/cex-instructions-to-join-coinlauinch-6.jpg') }}" alt="" class="img-thumbnail"></p>
            </div>
            <div class="col-md-5">
                <p class="text-center"><img src="{{ asset('img/subpage/cex-instructions-to-join-coinlauinch-7.jpg') }}" alt="" class="img-thumbnail"></p>
            </div>
        </div>
    </div>
</section> -->
{!! $news->content !!}
@endsection
