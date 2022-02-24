@extends('layouts.app')

@section('content')

		<!-- Introduce -->
		<section class="subPage">
			<div class="container">
				<h2 class="sectionHeading">Introduce</h2>
				<p>The wallet in the system is a real wallet or a cold wallet, located in the general ecosystem of the BSC system (BEP20), the wallet has the function of storing long-term coins/ tokens. The wallet is secured by offline mode when not logged in, prevents junk coins/tokens and does not allow access to the wallet freely.</p>
				<p class="text-center"><img src="{{ asset('img/subpage/wallet-intro-1.jpg') }}" alt="" class="img-thumbnail"></p>
				<p>The wallet is directly managed and used by the user, so you only need to pay the system's gas fee when using withdraw without incurring any other costs.</p>
				<p class="text-center"><img src="{{ asset('img/subpage/wallet-intro-2.jpg') }}" alt="" class="img-thumbnail"></p>
				<p>When the centralized exchange KGD CEX is completed, the wallet will be integrated into a Cold Wallet button in the general ecosystem, but the functionality and security still reach a high level. Allows users to store long-term coins/Tokens safely and securely.</p>
				<div class="row justify-content-center">
					<div class="col-md-3">
						<p><img src="{{ asset('img/subpage/wallet-intro-3.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
					<div class="col-md-3">
						<p><img src="{{ asset('img/subpage/wallet-intro-4.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
				</div>
			</div>
		</section>

@endsection
