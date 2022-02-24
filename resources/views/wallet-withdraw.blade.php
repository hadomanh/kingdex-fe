@extends('layouts.app')

@section('content')

		<!-- Withdraw guide -->
		<section class="subPage">
			<div class="container">
				<h2 class="sectionHeading">Withdraw Guide</h2>
				<p><strong>Step 1:</strong> Users who want to transfer money to another wallet, after successfully logging in, go to withdraw button, pay attention that they should not go to any fake links to transfer money to another wallet.</p>
				<p class="text-center"><img src="{{ asset('img/subpage/wallet-withdraw-1.jpg') }}" alt="" class="img-thumbnail"></p>
				<p><strong>Step 2:</strong> Choose the currency to transfer, note that a certain amount of BNB is required as a transfer fee, transferring to another wallet or participating in Coinlaunch requires a transfer fee in BNB. This fee is very small and is used as a gas fee for the <strong class="text-danger">BEP20 system (BSC system)</strong>.</p>
				<div class="row justify-content-center">
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-withdraw-2.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-withdraw-3.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
				</div>
				<p><strong>Step 3:</strong> Copy the recipient wallet address and paste to the sending address, notice that the address is in the <strong class="text-danger">BEP 20 system (BSC system)</strong>. Users can use the scan button to scan the recipient's wallet address QR code.  </p>
				<div class="row justify-content-center">
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-withdraw-4.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-withdraw-5.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
				</div>
				<p><strong>Step 4:</strong> Checking the sending address is correct completely before sending, enter the amount to be shipped and click on <strong>"Withdraw"</strong> button.</p>
				<div class="row justify-content-center">
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-withdraw-6.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-withdraw-7.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
				</div>
			</div>
		</section>

@endsection
