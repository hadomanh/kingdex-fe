@extends('layouts.app')

@section('content')
		<!-- Guide -->
		<!-- <section class="subPage">
			<div class="container">
				<h2 class="sectionHeading">Google Authentication installation guide?</h2>
				<p class="mb-2 fw-bold">Step 1: Downloading the Google Authenticator application:</p>
				<p>Tap the <strong>App Store</strong>, <strong>Google Play</strong>, <strong>Windows store</strong>  icon on your device and tap to open. Using the search function simply type in 'Google Authenticator' and tap the search icon, then the 'install' button. </p>
				<p class="text-center"><img src="{{ asset('img/subpage/wallet-google-authen-1.jpg') }}" alt="" class="img-thumbnail"></p>
				<p class="mb-2 fw-bold">Step 2: Open and create Google Authenticator account:</p>
				<p>Open 'Google Authenticator' application, tap <strong>"+"</strong> and choose <strong>"Scan QR code"</strong> when login on PC or choose <strong>"Manual entry"</strong> when login on the phone. </p>
				<div class="row justify-content-center">
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-google-authen-5.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-google-authen-2.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
				</div>
				<p>With <strong>"Scan QR code"</strong>, tap the plus sign at the top of the screen and select Scan barcode. Then, hold your camera over the KGD_QR code onscreen. The app will automatically recognize the account and enter account name to complete.</p>
				<p>With <strong>"Manual entry"</strong>, enter account name, copy KGD_QR code from KGD website then paste it into the key blank, and tap the <strong>"Add"</strong> icon to complete.</p>
				<p class="text-center"><img src="{{ asset('img/subpage/wallet-google-authen-3.jpg') }}" alt="" class="img-thumbnail"></p>
				<p>Using the 6 numbers to verify when login the account on KGD system.  Note: Secret key for verifying only lasts for one minute, so it is necessary to correctly verify with this code before it expires.</p>
				<p class="text-center"><img src="{{ asset('img/subpage/wallet-google-authen-4.jpg') }}" alt="" class="img-thumbnail"></p>
			</div>
		</section> -->
		{!! $news->content !!}
@endsection
