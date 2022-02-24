@extends('layouts.app')

@section('content')

		<!-- Guide -->
		<section class="subPage">
			<div class="container">
				<h2 class="sectionHeading">Account registration guide</h2>
				<p><strong>Step 1:</strong> Click on the <strong>"Register"</strong> icon on the homepage of the website, fill out the registration information completely. The account is registered only once and is used to login for the entire ecosystem. </p>
				<p class="text-center"><img src="{{ asset('img/subpage/wallet-account-registration-1.jpg') }}" alt="" class="img-thumbnail"></p>
				<p>Registered email needs to be kept carefully because of the security of the account. The password needs to be at least 10 characters including uppercase letters, lowercase letters, numbers and special characters to increase the security of the account. Click into the 2 confirmation boxes and the <strong>"Join now"</strong> button to complete the first stage.</p>
				<div class="row justify-content-center">
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-account-registration-2.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-account-registration-3.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
				</div>
				<p><strong>Step 2:</strong> Re-enter the email that is used to register the account, use the 6-digit verification code in the email to fill in the account verification box.</p>				
				<p class="text-center"><img src="{{ asset('img/subpage/wallet-account-registration-5.jpg') }}" alt="" class="img-thumbnail"></p>
				<p>If you have not received the verification code, then click on the <strong>"Resend Email"</strong> button. Click on <strong>"Active"</strong> button to next stage.</p>
				<div class="row justify-content-center">
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-account-registration-4.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-account-registration-6.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
				</div>
				<p><strong>Step 3:</strong> Sign in again with your newly registered email and password to conduct Google Authentication verification; then click into the confirmation boxes and the </strong>"Log in"</strong> button for next stage.</p>
				<div class="row justify-content-center">
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-account-registration-7.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-account-registration-8.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
				</div>
				<p><strong>Step 4:</strong> In the Google authentication verification interface, click the <strong>"Get the activation code"</strong> button to get the installation code. Copy the installation code and install it according to the instructions <strong>"Google Authentication installation guide?"</strong>. The setting code should be kept in a secret place so that it can be reset when changing to another phone. In case, the installation code is lost, you can contact the admin by email: <a href="mailto:kingofgameanddex86@gmail.com" class="fw-bold text-primary">kingofgameanddex86@gmail.com</a>, to get it back, the cost of getting the code back is 5 usdt for each reset code.</p>
				<div class="row justify-content-center">
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-account-registration-9.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-account-registration-10.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
				</div>
				<p><strong>Step 5:</strong> After the installation is finished, use the 6-digit key to enter the Google Authentication verification box, click the <strong>"Confirm"</strong> button to complete the installation process.</p>
				<div class="row justify-content-center">
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-account-registration-11.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-account-registration-12.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
				</div>
				<p>Each account needs to verify Google Authentication only once, each time to login, you need to verify your account with Email and Google Authentication to ensure safety.</p>
				<div class="row justify-content-center">
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-account-registration-13.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-account-registration-14.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
				</div>
				<p class="text-danger"><strong class="text-dark">Note:</strong> Only accounts that have completed KYC and added personal information in the <strong>"Profile"</strong> section will be able to fully use the functions of the ecosystem, in which KYC is a must to avoid virtual accounts.</p>
			</div>
		</section>

@endsection
