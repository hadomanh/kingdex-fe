@extends('layouts.app')

@section('content')
	<!-- Market news -->
	<!-- <section class="subPage">
		<div class="container">
			<h2 class="sectionHeading">Market news</h2>
			<h3 class="text-center mb-4">SUMMARY OF EVENTS 2020 SO FAR</h3>
			<p class="text-center"><img src="{{ asset('img/subpage/news-analysis-1.jpg') }}" alt="" class="img-thumbnail"></p>
			<ul>
				<li class="mb-2">In August 2020, MicroStrategy invested $250 million in Bitcoin as a reserve asset. </li>
				<li class="mb-2">In October 2020, Square, Inc. invest about 1% of total assets ($50 million) buying Bitcoin. </li>
				<li class="mb-2">In November 2020, PayPal announced that US users could buy, hold, or sell Bitcoin. </li>
				<li class="mb-2">On November 30, 2020, the bitcoin value hit a new all-time high of $19,860. Alexander Vinnik - the founder of BTC-e was convicted and sentenced to 5 years in prison for money laundering in France. </li>
				<li class="mb-2">In December 2020, Massachusetts Mutual Life Insurance Company announced a $100 million Bitcoin purchase - or 0.04% of its investment assets. </li>
				<li class="mb-2">On January 19, 2021, Elon Musk repeatedly shared about Bitcoin on his Twitter. This caused BTC to rapidly increase around 5,000 prices in 1 hour to $37,299. </li>
				<li class="mb-2">On January 25, 2021, Microstrategy announced that it would continue to buy Bitcoin, bringing the amount of Bitcoin it holds to $2.38 billion. </li>
				<li class="mb-2">On February 8, 2021, Tesla announced $1.5 billion worth of Bitcoin purchases and plans to start accepting Bitcoin for transportation payments, pushing the Bitcoin price to $44,141. </li>
				<li class="mb-2">In September 2020, the Canton of Zug, Switzerland announced that it would begin accepting tax payments in Bitcoin in February 2021. </li>
				<li class="mb-2">In June 2021, the Legislative Assembly of El Salvador voted to pass a law to make Bitcoin legal tender in El Salvador. </li>
				<li class="mb-2">Also in June, a Taproot software upgrade was approved, adding support for Schnorr signatures, improving the functionality of Smart Contracts and the Lightning Network. This upgrade was installed in November. </li>
				<li class="mb-2">On October 16, 2021, the SEC approved the ProShares Bitcoin Strategy ETF - a cash-settled futures exchange-traded fund.</li>
				<li class="mb-2">1/2022: Ferrari entered blockchain when establishing a partnership with Swiss blockchain company Velas; Shanghai City focuses on developing Metaverse in its 5-year development plan to 2022-2027; famous game company Square Enix has a plan to invest in blockchain games in the period of 2022-2023; Russia's major bank Sberbank introduces the first ETF to help investors get closer to blockchain; NFTs are recognized by a number of brewers and farmers who preserve the beer heritage in Belgium by UNESCO.</li>
				<li class="mb-2">2/2022: India approves and levies a 30% tax on crypto income; Venezuelan government approves new tax law for cryptocurrency and foreign currency trading; The UK government updated a number of changes to the rules on Defi and Staking in favor of blockchain development.</li>
			</ul>
		</div>
	</section> -->
	{!! $news->content !!}
@endsection

		