@extends('layouts.app')

@section('content')

		<!-- Change Infomation -->
		<!-- <section class="subPage">
			<div class="container">
				<h2 class="sectionHeading">Instrustions for changing information</h2>
				<p><strong>Step 1:</strong> Upon successful login, change personal information in the <strong>"Profile"</strong> section, personal information is only used to verify information when there is a complaint or dispute between two users, not used for any other purposes and is absolutely secure in the blockchain network. Filling in the information so that the support team can take care of and contact the user directly when there is any problem during use.</p>
				<p class="text-center"><img src="{{ asset('img/subpage/wallet-change-info-1.jpg') }}" alt="" class="img-thumbnail"></p>
				<p><strong>Step 2:</strong> Users can click on the KGD logo icon, select an image in their personal photo store to set it as an avatar image for their account. Profile pictures are not published without the user's permission.</p>
				<div class="row justify-content-center">
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-change-info-2.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-change-info-3.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
				</div>
				<p><strong>Step 3:</strong> Complete personal information to confirm that the user is real and unique for each account. The information includes: Passport/Social security, nation, full name, phone number, bank account number, bank name. Personal information is used to handle disputes and complaints between two users, of which passport/Social security is required information, other information can be added later.</p>
				<div class="row justify-content-center">
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-change-info-4.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-change-info-5.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
				</div>				
			</div>
		</section> -->
		{!! $news->content !!}
@endsection
