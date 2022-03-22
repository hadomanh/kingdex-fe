@extends('layouts.app')

@section('content')
<!-- Guide -->
<section class="subPage">
    <div class="container">
        <h2 class="sectionHeading">Coinlaunch participation guide</h2>
        <p><strong class="fst-italic">Step 1:</strong> Register an account on the KGD ecosystem in a free manner, fill in all information in the <strong>"Profile"</strong> section and KYC is successful <span class="text-danger">(This is mandatory).</span> The registration information is only used for the purpose of resolving disputes or complaints, not for any other purpose.</p>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <p class="text-center"><img src="{{ asset('img/subpage/coinlaunch-participation-guide-1.jpg') }}" alt="" class="img-thumbnail"></p>
            </div>
            <div class="col-md-3">
                <p class="text-center"><img src="{{ asset('img/subpage/coinlaunch-participation-guide-2.jpg') }}" alt="" class="img-thumbnail"></p>
            </div>
        </div>
        <p><strong class="fst-italic">Step 2:</strong> After filling in personal information in Profile section and completing KYC, users need to deposit USDT with the amount that they want to buy, and deposit minimum BNB for BSC gas fees (deposits have no fees, but sometimes some exchanges require to transfer the minimum amount of BNB larger than necessary and there will be many Coins/Tokens open for sale on the KGD ecosystem). Gas fee for each purchase for ICO sale is 0.00063 BNB; in an ICO sale, multiple purchases can be made. The purchased amount of volume in a batch is calculated by the total volume of all purchases, all purchases are paid at the same time and at the same rate in an ICO sale.</p>
        <p><strong class="fst-italic">Step 3:</strong> Go to the Launchpad section of <strong>Coinlaunch</strong> to participate in buying ICO.</p>	
        <p class="text-center"><img src="{{ asset('img/subpage/coinlaunch-participation-guide-3.jpg') }}" alt="" class="img-thumbnail"></p>
        <p>In the Launchpad window, there are full of Coins/Tokens that are opened for sale on the KGD ecosystem, with each different type and full information on previous purchases or payments.</p>
        <p class="text-center"><img src="{{ asset('img/subpage/coinlaunch-participation-guide-4.jpg') }}" alt="" class="img-thumbnail"></p>
        <p>The <strong>“Transaction history”</strong> section shows details of previous ICO purchases, the amount of Coin/Token be paid for each different ICO.</p>
        <p class="text-center"><img src="{{ asset('img/subpage/coinlaunch-participation-guide-5.jpg') }}" alt="" class="img-thumbnail"></p>
        <p><strong class="fst-italic">Step 4:</strong> Click on the <strong>“Join in”</strong> button to enter the ICO buying window, which contains all the parameters of the ICO sale. Users should carefully check the Coin/Token amount to be sold, information about Coin/Token and details of payments to participants.</p>
        <p class="text-center"><img src="{{ asset('img/subpage/coinlaunch-participation-guide-6.jpg') }}" alt="" class="img-thumbnail"></p>
        <p><strong class="fst-italic">Step 5:</strong> Enter the amount of Coin/Token you want to buy and press the <strong>“Check”</strong> button to see the details for the user's purchase. All the times that are paid are showed including additionally rewarded Coin/Token. After carefully checking the information, the user presses the <strong>"Accept"</strong> button and two-factor authentication to complete the ICO purchase procedure. The amount of USDT used to buy and the amount of BNB used for gas fees will be deducted from the user's wallet.</p>
        <p class="text-center"><img src="{{ asset('img/subpage/coinlaunch-participation-guide-7.jpg') }}" alt="" class="img-thumbnail"></p>
    </div>
</section>
@endsection
