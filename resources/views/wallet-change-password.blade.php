@extends('layouts.app')

@section('content')

		<!-- Change password -->
		<!-- <section class="subPage">
			<div class="container">
				<h2 class="sectionHeading">How to change password</h2>
				<p><strong>Step 1:</strong> When users need to change their password, they can go to the <strong>"Change password"</strong> section when they login successfully. Password should be changed 3-6 months/ one time to increase security for user accounts.</p>
				<p class="text-center"><img src="{{ asset('img/subpage/wallet-change-password-1.jpg') }}" alt="" class="img-thumbnail"></p>
				<p><strong>Step 2:</strong> Enter the current password, the new password, and confirm the new password. The password needs to be <strong>at least 10 characters</strong> including uppercase letters, lowercase letters, numbers and special characters to increase the security of the account.</p>
				<div class="row justify-content-center">
					<div class="col-md-3">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-change-password-2.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
					<div class="col-md-5">
						<p class="text-center"><img src="{{ asset('img/subpage/wallet-change-password-3.jpg') }}" alt="" class="img-thumbnail"></p>
					</div>
				</div>
				<p><strong>Step 3:</strong> After filling in the current password and new password, click on <strong>"Change password"</strong> to next step.</p>
				<p class="text-center"><img src="{{ asset('img/subpage/wallet-change-password-4.jpg') }}" alt="" class="img-thumbnail"></p>
				<p><strong>Step 4:</strong> Filling in two-factor verification information including email verification code and Google Authentication, then click on <strong>"Confirm"</strong> button to complete.</p>
				<p class="text-center"><img src="{{ asset('img/subpage/wallet-change-password-5.jpg') }}" alt="" class="img-thumbnail"></p>
			</div>
		</section> -->
		{!! $news->content !!}

@endsection
