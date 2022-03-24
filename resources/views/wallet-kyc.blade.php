@extends('layouts.app')

@section('content')

		<!-- KYC Guide -->
		<!-- <section class="subPage">
			<div class="container">
				<h2 class="sectionHeading">KYC Guide</h2>
				<p><strong>Step 1:</strong> <span class="text-danger">KYC is a mandatory procedure before fully using all functions, because of relating to money, KYC to verify user identity is a must before using any service in the ecosystem. This guarantees the legality of the user in the event of a dispute or claim.</span> KYC information will be kept secure and used only to verify real user, and not used for any other purpose. Click on “KYC” icon in the user’s account.</p>
				<p class="text-center"><img src="{{ asset('img/subpage/wallet-kyc-guide-1.jpg') }}" alt="" class="img-thumbnail"></p>
				<p><strong>Step 2:</strong> Users should take a portrait, take a photo of one of the following documents for KYC including: Passport, Driver's license, ID card or social security. If it's a passport, you can use a photo for both the frontal and lateral photos (same as passports are only one-way). The number on the personal papers must match the number when filling in the personal profile in <strong>"Profile"</strong> section.</p>
				<div class="row justify-content-center">
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-kyc-guide-2.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
					<div class="col-md-5">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-kyc-guide-3.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
				</div>
				<p><strong>Step 3:</strong> Click on the portrait icon, frontal icon and lateral icon to upload the edited photos according to the standards, pay attention to choose the correct order of the corresponding images and choose the correct edited images so that the KYC process is quick and convenient. Click on <strong>"Update images"</strong> to finish, each account can use KYC only once and within 24 hours to be confirmed. If the KYC process fails, the support team will unlock the KYC again and send an error message to the user in ID mail section in detail, user can read and fix.</p>
				<div class="row justify-content-center">
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-kyc-guide-4.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-kyc-guide-5.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
				</div>
				<p class="text-danger">Note: Information services only verify when you have successfully logged in, do not go to any links that require wallet connection or other verification requirements, we are not responsible for violating regulations, users especially note.</p>
			</div>
		</section> -->
		{!! $news->content !!}

@endsection
