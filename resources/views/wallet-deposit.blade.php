@extends('layouts.app')

@section('content')

		<!-- Guide -->
		<section class="subPage">
			<div class="container">
				<h2 class="sectionHeading">Deposit Guide</h2>
				<p><strong>Step 1:</strong> When you want to transfer money to the wallet, the user logs into the system, goes to the deposit section, and notices that only a successful login that will have the correct address transferred to the wallet.</p>
				<p class="text-center"><img src="{{ asset('img/subpage/wallet-deposit-1.jpg') }}" alt="" class="img-thumbnail"></p>
				<p><strong>Step 2:</strong> Users can scan the QR code to get the wallet address or copy the address that appears in the deposit section, note that <strong class="text-danger">only in BEP 20 system</strong>, if the wrong system is transferred, we are not responsible for reimbursement.</p>
				<p class="text-center"><img src="{{ asset('img/subpage/wallet-deposit-2.jpg') }}" alt="" class="img-thumbnail"></p>
			</div>
		</section>

@endsection
