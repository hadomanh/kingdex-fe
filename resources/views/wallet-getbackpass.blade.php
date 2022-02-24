@extends('layouts.app')

@section('content')

		<!-- Reset password -->
		<section class="subPage">
			<div class="container">
				<h2 class="sectionHeading">Instructions for getting your password back</h2>
				<p><strong>Step 1:</strong> When users forget their password, they can recover their password easily, go to the <strong>"Forgot password"</strong> in the login section.</p>
				<p class="text-center"><img src="{{ asset('img/subpage/wallet-reset-password-1.jpg') }}" alt="" class="img-thumbnail"></p>
				<p><strong>Step 2:</strong> Enter the email address that used to register an account for the ecosystem, email is very important, so you need to make sure that the email has enough information to ensure safety when using. Then, click on <strong>Reset password</strong> button.</p>
				<div class="row justify-content-center">
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-reset-password-2.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-reset-password-3.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
				</div>
				<p><strong>Step 3:</strong> Filling in two-factor verification information including email verification code and Google Authentication, then click on <strong>"Confirm"</strong> button to next stage. </p>
				<div class="row justify-content-center">
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-reset-password-4.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-reset-password-5.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
				</div>
				<p><strong>Step 4:</strong> A temporary password will be sent back to the email address, the user can use this password to login and change another password to make it easier to remember.</p>
				<p class="text-center"><img src="{{ asset('img/subpage/wallet-reset-password-6.jpg') }}" alt="" class="img-thumbnail"></p>
			</div>
		</section>

@endsection
