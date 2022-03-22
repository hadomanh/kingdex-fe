@extends('layouts.app')

@section('content')

<!-- Tax and fees -->
<section class="subPage">
    <div class="container">
        <h2 class="sectionHeading">Tax and fees trading updates</h2>
        <p class="text-center"><img src="{{ asset('img/subpage/cex-tax-and-fees-trading-updates-1.jpg') }}" alt="" class="img-thumbnail"></p>
        <p class="text-center">What do <strong>"Maker"</strong> and <strong>"Taker"</strong> mean?</p>
        <p>
            <strong>Taker:</strong> <br>
            When you place an order to trade immediately, by partial or full matching, before entering the order book, those trades will be <strong>"Taker"</strong> trades. Trades from Market Orders are always Taker because Market Orders never enter the order book. These transactions are "Taking" a volume of transactions off the order book, hence the name taker.
        </p>
        <p>
            <strong>Maker:</strong> <br>
            When you place an order that partially or fully enters the order book, such as a limit order, any subsequent trades that come from that order are <strong>"Maker"</strong>. These orders add volume to the order book, helping to "Make the market", so every subsequent trade is called a "Maker"
        </p>
        <p class="text-center fw-bold mb-2">P2P fee on KGD CEX</p>
        <p>P2P fee on KGD CEX exchange is 2 USDT/transaction, this fee is fixed for each transaction and to pay for service staff to take care of and resolve complaints or disputes (if any). It is possible to exchange many different currencies on the KGD ecosystem.</p>
        <p class="text-center"><img src="{{ asset('img/subpage/cex-tax-and-fees-trading-updates-2.jpg') }}" alt="" class="img-thumbnail"></p>
        <p class="text-center fw-bold mb-2">Deposit fee on KGD CEX</p>
        <p>The great benefit is free to deposit into the KGD exchange. This is favorable to bring more cash flow into the market.</p>
        <p class="text-center fw-bold mb-2">Withdraw fee on KGD CEX</p>
        <p>Withdraw fee on KGD CEX will be calculated not only based on different coins but also adjusted according to market situation. Each type of Coin/Token when withdrawing will require a small and fixed fee, please see carefully the withdrawal fee for each type when withdrawing.</p>
        <p class="text-center fw-bold mb-2">Transaction fees on KGD CEX</p>
        <p>Currently, the transaction fee on KGD CEX is calculated depending on the type of trading order, the fee <strong>for "Maker" orders is 0.08%</strong> and for <strong>"Taker" orders is 0.12%</strong>. The transaction fee is reduced unless there is a referral of the user to another person, <strong class="fst-italic">the inviter will be entitled to 20% of the transaction fee from the referred person, referred person will get 5% discount on transaction fees forever</strong>. Each user has a unique referral code, used to refer new users, each new user can only enter the referred code once.</p>
        <p class="text-center"><img src="{{ asset('img/subpage/cex-tax-and-fees-trading-updates-3.jpg') }}" alt="" class="img-thumbnail"></p>
    </div>
</section>
@endsection
