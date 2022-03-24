@extends('layouts.app')

@section('content')
<!-- P2P tool -->
<!-- <section class="subPage">
    <div class="container">
        <h2 class="sectionHeading">How to use P2P tool</h2>
        <p>The P2P function where users can exchange Coins/Tokens with different currencies, there is a process to ensure safe transactions and 24/7 support of the project's customer care team. </p>
        <p class="text-center"><img src="{{ asset('img/subpage/cex-how-to-use-p2p-tool-1.jpg') }}" alt="" class="img-thumbnail"></p>
        <p>All acts of fraud aimed at obtaining property will have adequate sanctions. P2P supports buyers and sellers, requires full proof of deposit on the buyer side and transfers Coin/Token on the seller side. </p>
        <p class="text-center"><img src="{{ asset('img/subpage/cex-how-to-use-p2p-tool-2.jpg') }}" alt="" class="img-thumbnail"></p>
        <p>Fixed transaction fee for a buy or sell transaction is 2 USDT for one side, no limit on transaction amount and there is always a team of intermediaries to ensure accurate, fast and safe transactions.</p>
        <p class="text-center"><img src="{{ asset('img/subpage/cex-how-to-use-p2p-tool-3.jpg') }}" alt="" class="img-thumbnail"></p>
    </div>
</section> -->
{!! $news->content !!}
@endsection
