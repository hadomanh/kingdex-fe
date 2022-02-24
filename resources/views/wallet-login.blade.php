@extends('layouts.app')

@section('content')

		<!-- Guide -->
		<section class="subPage">
			<div class="container">
				<h2 class="sectionHeading">Account login guide</h2>
				<p><strong>Step 1:</strong> Click on the <strong>"Login"</strong> icon on the homepage of the website, fill out the information completely.</p>
				<p class="text-center"><img src="{{ asset('img/subpage/wallet-account-login-guide-1.jpg') }}" alt="" class="img-thumbnail"></p>
				<p><strong>Step 2:</strong> After filling out the information in the login boxes with registered Email and Password correctly, click into the confirmation boxes and the <strong>"Login"</strong> button to complete the stage.</p>
				<div class="row justify-content-center">
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-account-login-guide-2.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-account-login-guide-3.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
				</div>
				<p><strong>Step 3:</strong> Using the 6-digit verification code in the registered email and Google Authentication to fill in the account verification box.</p>
				<div class="row justify-content-center">
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-account-login-guide-4.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-account-login-guide-5.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
				</div>
				<p>Each email verification code is only valid for 30 minutes, outside of this time, you need to send the confirmation code again. Each Google Authentication verification code is only valid for one minute, it needs to be used within the specified time period.</p>
				<div class="row justify-content-center">
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-account-login-guide-6.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-account-login-guide-7.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
				</div>
				<p>Press <strong>"Confirm"</strong> button to complete, you can use full functions of Wallets. Each login has been valid for 7 days, after which it will automatically log out. However, we recommend that users should log out as soon as they are no longer in use. Avoid software or websites that contain malicious code, which may lose secure login data for users, Absolutely, do not give login email and password to others.</p>
				<p>Users <strong>should not</strong> enter <strong class="fst-italic">pages or websites</strong> containing malicious source code, should not enter the currency management system using a <strong class="fst-italic">public Wifi network</strong>, this may reveal security information when logging in to their account. Users should use a login device only for currency application to ensure the security of their accounts.</p>
				<p class="text-danger">Note: Each time you log in, you can only enter the wrong password up to 5 times, after 5 times the wrong password will lock the account, need to contact the Admin via email: <a href="mailto:kingofgameanddex86@gmail.com" class="text-primary text-decoration-underline">kingofgameanddex86@gmail.com</a> to unlock, however the unlocking service fee is <strong>5 USDT / time</strong>. So really consider when the password is wrong for the 3rd time, use the <strong>"Forgot password"</strong> function.</p>
			</div>
		</section>

@endsection
