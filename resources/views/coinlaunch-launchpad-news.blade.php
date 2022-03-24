@extends('layouts.app')

@section('content')
<!-- Launchpad news -->
<!-- <section class="subPage">
    <div class="container">
        <h2 class="sectionHeading">Launchpad news</h2>
        <p class="text-center"><img src="{{ asset('img/subpage/coinlaunch-launchpad-news-1.jpg') }}" alt="" class="img-thumbnail"></p>
        <h5>1. Timeline of ICO sale for KGD token</h5>
        <ul>
            <li class="mb-2">Start time: 25 February 2022.</li>
            <li class="mb-2">End time: 24 April 2022.</li>
            <li class="mb-2">Total amount for ICO: 5,000,000 KGD</li>
            <li class="mb-2">Price: 0.15 USDT/KGD</li>
            <li class="mb-2">Min amount to buy: 333 KGD</li>
            <li class="mb-2">Max amount to but: 166,666 KGD</li>
            <li class="mb-2">Coin/Token award: KGD and KNB</li>
        </ul>
        <table class="table table-bordered text-center">
            <thead>
                <tr class="bg-primary text-white">
                    <th>Level</th>
                    <th>KGD buying amount (USDT)</th>
                    <th>KGD award</th>
                    <th>KNB award</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>50-500</td>
                    <td>2</td>
                    <td>1000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>501-1000</td>
                    <td>4</td>
                    <td>2500</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>1001-2500</td>
                    <td>8</td>
                    <td>5000</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>2501-5000</td>
                    <td>16</td>
                    <td>10000</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>5001-10000</td>
                    <td>32</td>
                    <td>20000</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>10001-25000</td>
                    <td>64</td>
                    <td>50000</td>
                </tr>
            </tbody>
        </table>
        <ul>
            <li class="mb-2">The amount of KGD bonus is paid immediately after buying directly to personal wallets in the ecosystem by Level.</li>
            <li class="mb-2">The bonus KNB will be returned to the game wallet in the exchange dapp that can be used in the marketplace and in games.</li>
        </ul>
        <h5>2. How to join in ICO sale</h5>
        <p><strong class="fst-italic">Step 1:</strong> Register an account on the KGD ecosystem in a free manner, fill in all information in the <strong>"Profile"</strong> section and KYC is successful <span class="fst-italic text-danger">(This is mandatory).</span> The registration information is only used for the purpose of resolving disputes or complaints, not for any other purpose.</p>
        <h5 class="text-center">BONUS TABLE FOR USER ACCOUNT REGISTRATION</h5>
        <table class="table table-bordered text-center">
            <thead>
                <tr class="bg-primary text-white">
                    <th>Level</th>
                    <th>Registration number</th>
                    <th>KGD award</th>
                    <th>KNB award</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>1-15000</td>
                    <td>1</td>
                    <td>1000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>15001-60000</td>
                    <td>0</td>
                    <td>1000</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>60001-100000</td>
                    <td>0</td>
                    <td>700</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>100001-150000</td>
                    <td>0</td>
                    <td>500</td>
                </tr>
            </tbody>
        </table>
        <ul>
            <li>Accounts that register and complete KYC are numbered in real time from 1 to the end, depending on the order number, they receive different rewards.</li>
            <li>Bonus KGD will be sent to the personal wallet in the ecosystem when registering an account and completing KYC, the bonus KNB will be sent to the games wallet in the exchange dapp that can be used in the marketplace and in games.</li>
        </ul>
        <p><strong class="fst-italic">Step 2:</strong> After filling in personal information in Profile section and completing KYC, users need to deposit USDT with the amount that they want to buy KGD of ICO sale, and deposit minimum BNB for BSC gas fees (deposits have no fees, but sometimes some exchanges require to transfer the minimum amount of BNB larger than necessary and there will be many Coins/Tokens open for sale on the KGD ecosystem). Gas fee for each purchase for ICO sale is 0.00063 BNB; in an ICO sale, multiple purchases can be made. The purchased amount of volume in a batch is calculated by the total volume of all purchases, all purchases are paid at the same time and at the same rate in an ICO sale.</p>
        <div class="row justify-content-center mb-4">
            <div class="col-md-4">
                <div class="d-flex bg-primary justify-content-between text-white p-2 rounded-3 mb-1">
                    <div>Total supply:</div>
                    <div>578,000,000</div>
                </div>
                <div class="d-flex bg-primary justify-content-between text-white p-2 rounded-3 mb-1">
                    <div>Circulating supply:</div>
                    <div>45,000</div>
                </div>
                <div class="d-flex bg-primary justify-content-between text-white p-2 rounded-3 mb-1">
                    <div>Locked supply:</div>
                    <div>0</div>
                </div>
                <div class="d-flex bg-primary justify-content-between text-white p-2 rounded-3 mb-1">
                    <div>Burned supply:</div>
                    <div>504,000,000</div>
                </div>
            </div>
        </div>
        <div class="bg-primary text-white text-center p-2">Detail plan for unlocked KGD amount for Circulating supply</div>
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>Details</th>
                        <th>Locked</th>
                        <th>Price</th>
                        <th>Unlocked</th>
                        <th>Unlocked timeline</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Registration award</td>
                        <td>15,000</td>
                        <td>$0</td>
                        <td>15,000</td>
                        <td>From 25/02/2022</td>
                    </tr>
                    <tr>
                        <td>ICO award</td>
                        <td>30,000</td>
                        <td>$0</td>
                        <td>30,000</td>
                        <td>From 25/02/2022</td>
                    </tr>
                    <tr>
                        <td>IDO on Pancakeswap</td>
                        <td>2,000,000</td>
                        <td>$0.60</td>
                        <td>0</td>
                        <td>From 25/04/2022</td>
                    </tr>
                    <tr>
                        <td>IEO on CEX</td>
                        <td>40,000,000</td>
                        <td>$0.75</td>
                        <td>0</td>
                        <td>From 25/07/2022</td>
                    </tr>
                    <tr>
                        <td>ICO refund</td>
                        <td>5,000,000</td>
                        <td>$0.15</td>
                        <td>0</td>
                        <td>From 25/10/2022, 10%/month</td>
                    </tr>
                    <tr>
                        <td>Angel Investors refund</td>
                        <td>6,000,000</td>
                        <td>$0.12</td>
                        <td>0</td>
                        <td>From 25/08/2023, 10%/month</td>
                    </tr>
                    <tr>
                        <td>Founder, DEV Team</td>
                        <td>20,955,000</td>
                        <td>$0</td>
                        <td>0</td>
                        <td>From 2/2032, 10%/year</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="text-center fst-italic">(updated on 21 February 2022)</p>
        <h5>3. Payment time for ICO sale</h5>
        <p>The amount of ICO purchases will be locked for 3 months from the time of IEO on any centralized exchange, expected in July 2022. And start paying for ICO buyers from October 25, 2022 until the end, 10% of the total each month.</p>
        <p class="text-center"><img src="{{ asset('img/subpage/news-kgd-coin-info-11.jpg') }}" alt="" class="img-thumbnail"></p>
        <p class="text-danger">Note: ICO is sold in a time-based competitive mode, gradually deducting the number of tokens, when the remaining amount reaches 0, it cannot be bought more, even though the opening time has not expired.</p>
        <hr>
        <h2 class="sectionHeading">Rewards for ICO referral code, exchange KYC 🎁🎁🎁🎁🎁</h2>
        <p><strong class="fst-italic">Step 1:</strong> The referral code is the <strong>"username"</strong> to register for the account (username must be written immediately without accents, from 8-12 characters, do not contain special characters, distinguish between uppercase and lowercase)</p>
        <p><strong class="fst-italic">Step 2:</strong> In the <strong>"Profile"</strong> section, the user fills in the user's full name + the referrer's username to receive the reward.</p>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <p class="text-center"><img src="{{ asset('img/subpage/coinlaunch-launchpad-news-2.jpg')}}" alt="" class="img-thumbnail"></p>
            </div>
            <div class="col-md-4">
                <p class="text-center"><img src="{{ asset('img/subpage/coinlaunch-launchpad-news-3.jpg') }}" alt="" class="img-thumbnail"></p>
            </div>
        </div>
        <p>For example <strong>“Nguyen Van A + nguyenvanb1008”</strong>, where: <strong>"Nguyen Van A"</strong> is the full name of the user; <strong>"nguyenvanb1008"</strong> is the username of the referrer.</p>
        <p class="mb-2">Bonus levels for Ref milestones are as follows:</p>
        <ul>
            <li class="mb-2">The purchase amount of 500 USDT or more, the buyer & the referrer can add 5-7% of the total purchased KGD.</li>
            <li class="mb-2">The amount of bonus KGD will be immediately returned to the personal wallet for both people when the total buying volume of the buyer's KGD reaches 500 USDT (can be accumulated if buying many times).</li>
        </ul>
        <p>The rate of bonus KGD depends on the purchase timelines as follows:</p>
        <div class="table-responsive">
            <table class="table table-bordered text-center align-middle">
                <tr class="bg-primary text-white">
                    <th rowspan="2">Level</th>
                    <th rowspan="2">Purchased KGD Amount</th>
                    <th rowspan="2">Period</th>
                    <th colspan="2">KGD Bonus</th>
                </tr>
                <tr class="bg-primary text-white">
                    <th>Buyer</th>
                    <th>Ref usser</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td rowspan="3">500-999 USDT</td>
                    <td>01/03 - 21/03/2022</td>
                    <td>5%</td>
                    <td>5%</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>22/03 - 06/04/2022</td>
                    <td>4%</td>
                    <td>4%</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>07/04 - 30/04/2022</td>
                    <td>3%</td>
                    <td>3%</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td rowspan="3">>1000 USDT</td>
                    <td>01/03 - 21/03/2022</td>
                    <td>7%</td>
                    <td>7%</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>22/03 - 06/04/2022</td>
                    <td>6%</td>
                    <td>6%</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>07/04 - 30/04/2022</td>
                    <td>5%</td>
                    <td>5%</td>
                </tr>
            </table>
        </div>
        <p>All users who complete KYC & the total purchase reaches the buying milestones, they will receive KGD rewards and transfer to their personal wallets immediately, and can trade as soon as KGD coin is listed on CEX or DEX.</p>
        <p>For more details, please see the bonus levels at: <a href="https://www.kingdex.io/coinlaunch-launchpad-news" class="text-primary">https://www.kingdex.io/coinlaunch-launchpad-news</a>.</p>
        <p>Be informed that you can buy ICO now, according to the formula, the quantity will decrease until 0 KGD, then you can't buy anymore. </p>
        <p><strong>Steps to buy ICO</strong>: After filling out the profile and completing KYC, you can buy ICO. </p>
        <p><a href="https://www.kingdex.io/wallet-deposit-guide" class="text-primary">https://www.kingdex.io/wallet-deposit-guide</a></p>
        <p class="mb-2"><strong class="fst-italic">Step 1:</strong> Deposit USDT and BNB (as gas fee, each purchase costs 0.00063 BNB = 0.22 USDT)</p>
        <ul>
            <li class="mb-2">Go to the Deposit section to get your deposit wallet address.</li>
            <li class="mb-2">Be noted to choose the BEP20 system only to deposit.</li>
            <li class="mb-2">The same address is used for both USDT and BNB, which automatically transfer to the wallet.</li>
            <li class="mb-2">The amount of USDT to load = the amount of KGD you want to buy x 0.15 USDT (the smallest number can buy 333 KGD, the largest 166,666 KGD). Remember to make enough deposit of required USDT amount.</li>
            <li class="mb-2">Pay attention to the milestones of KGD award for the purchase, see details here: <a href="https://www.kingdex.io/coinlaunch-launchpad-news" class="text-primary">https://www.kingdex.io/coinlaunch-launchpad-news</a></li>
            <li class="mb-2">The number of BNB needs to be loaded in minimum amount which the exchange required. For example, the Binance exchange has a minimum deposit of 0.01 BNB, then you can buy ICO nearly 16 times, because each time it only costs 0.00063 BNB. </li>
        </ul>
        <p class="fw-bold fst-italic mb-2">Step 2:</p>
        <ul>
            <li class="mb-2">After deposit USDT and BNB, go to Coinlaunch (bottom toolbar) to launchpad</li>
            <li class="mb-2">Click <strong>"Join in"</strong> button</li>
            <li class="mb-2">Fill in the amount of KGD you want to buy</li>
            <li class="mb-2">Check information about the sale, the price, the payment, then press the <strong>"Accept"</strong> button, two-factor authentication via email and Google authentication. It is done.</li>
            <li class="mb-2">The <strong>"Transactions History"</strong> section will record the purchase history: the number of purchases, the detailed payment process.</li>
            <li class="mb-2">The amount of purchased USDT will be automatically deducted from the user's wallet after each transaction.</li>
            <li class="mb-2">Go to the information section to update the project progress daily and weekly. The number of coins in circulation is transparent:  <a href="https://www.kingdex.io/news-information-of-kgd-coin" class="text-primary">https://www.kingdex.io/news-information-of-kgd-coin</a>.</li>
        </ul>
        <hr>
        <p>The company has registered business in Vietnam, with full legal name <strong class="fst-italic">"King of Games and DEX Trade and Communications Joint Stock Company".</strong> Charter capital: 57,000,000,000 VND ($2,500,000), total shares: 5,700,000. In March 2022, the project will complete business registration procedures in Central America and may expand to Singapore in the next 3-6 months.</p>
        <p class="text-center"><img src="{{ asset('img/subpage/license-1.jpg') }}" alt="" class="img-thumbnail" width="800"></p>
        <p class="text-center"><img src="{{ asset('img/subpage/license-2.jpg') }}" alt="" class="img-thumbnail" width="800"></p>
        <p class="text-center"><img src="{{ asset('img/subpage/license-3.jpg') }}" alt="" class="img-thumbnail" width="800"></p>
        <p class="text-center"><img src="{{ asset('img/subpage/license-4.jpg') }}" alt="" class="img-thumbnail" width="800"></p>
    </div>
</section> -->
{!! $news->content !!}
@endsection
