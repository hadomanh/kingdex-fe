@extends('layouts.app')

@section('content')
<!-- CEX News -->
<!-- <section class="subPage">
    <div class="container">
        <h2 class="sectionHeading">CEX news</h2>
        <p class="text-center"><img src="{{ asset('img/subpage/cex-news-1.jpg') }}" alt="" class="img-thumbnail"></p>
        <p>According to the roadmap, July-August 2022, Alphatest version of KGD centralized exchange will be launched, in this version there are full <span class="fst-italic">Spot-market transactions, P2P function, Coinlaunch function, Defi-bank 2.0 function</span>. There are full versions for PC, IOS and Android, users can download the trial version on the official website of the project. The function of Coin/Token withdraw and deposit  has not been opened. Users will be given 1,000,000 virtual USDT each account to be able to trade freely and detect trading errors for <strong>"Spot-market"</strong> functionality in two months.</p>
        <p class="text-center"><img src="{{ asset('img/subpage/cex-news-2.jpg') }}" alt="" class="img-thumbnail"></p>
        <p>Expected to test errors in 2 months and add <strong>"Margin"</strong> function, continue to test margin trading in the system and detect errors and complete repairs. The next 2 months add the <strong>"Future"</strong> function and test the future function for 1 month. End the Alphatest for the entire exchange system, and move to the official version, deleting alltransaction data in the alphatest.</p>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <p class="text-center"><img src="{{ asset('img/subpage/cex-news-3.jpg') }}" alt="" class="img-thumbnail"></p>
            </div>
            <div class="col-md-5">
                <p class="text-center"><img src="{{ asset('img/subpage/cex-news-4.jpg') }}" alt="" class="img-thumbnail"></p>
            </div>
        </div>
        <p>During the trial period of Alphatest, there will be <strong class="fst-italic">many attractive programs that reward users for finding system errors and exchange errors</strong>, ranking users according to their level of dedication and paying in KGD or USDT, for details, see the section <strong>“CEX events”</strong></p>
    </div>
</section> -->
{!! $news->content !!}
@endsection
