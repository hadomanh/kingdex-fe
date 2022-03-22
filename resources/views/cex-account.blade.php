@extends('layouts.app')

@section('content')


<!-- Change account info -->
<section class="subPage">
    <div class="container">
        <h2 class="sectionHeading">How to change account information</h2>								
        <p>Users needs to provide full information that is only used to authenticate the owner's account, resolve disputes or complaints between  involve dparties, be absolutely confidential and not used for any purpose.</p>
        <p class="text-center"><img src="{{ asset("img/subpage/cex-how-to-change-account-information-1.jpg") }}" alt="" class="img-thumbnail"></p>
        <p>In the <strong>"Information"</strong> section, users can use to change their personal information, the information on the papers has changed due to the requirements of the law in the place where they live.</p>
        <p class="text-center"><img src="{{ asset("img/subpage/cex-how-to-change-account-information-2.jpg") }}" alt="" class="img-thumbnail"></p>
        <p>Users can change their password <strong class="fst-italic">periodically 6-12 months/time</strong> to ensure security and safety when using, <strong class="fst-italic">note that</strong> should logout the account when being not in frequent use, <strong class="fst-italic">do not use public WIFI</strong> to avoid stolen account security information.</p>
        <p class="text-center"><img src="{{ asset("img/subpage/cex-how-to-change-account-information-3.jpg") }}" alt="" class="img-thumbnail"></p>
        <p><span class="text-danger">KYC is a mandatory procedure before fully using all functions, because of relating to money, KYC to verify user identity is a must before using any service in the ecosystem. This guarantees the legality of the user in the event of a dispute or claim.</span> KYC information will be kept secure and used only to verify real user, and not used for any other purpose. Click on <strong>“KYC”</strong> icon in the user’s account.</p>
        <p class="text-center"><img src="{{ asset("img/subpage/cex-how-to-change-account-information-4.jpg") }}" alt="" class="img-thumbnail"></p>
        <p>Users can add information about the heir to the property, when there is any risk, the heir can contact the customer service team of the KGD project, which will be supported to recover the balance in the account, however However, the account's email (including the email address and login password of the email) should be shared with the heir or recorded in a secret place for the heir to know.</p>
        <p class="text-center"><img src="{{ asset("img/subpage/cex-how-to-change-account-information-5.jpg") }}" alt="" class="img-thumbnail"></p>
        <p>Users can buy more KNB tokens to play games in the ecosystem by using the <strong>“P2Bank”</strong> section.</p>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <p class="text-center"><img src="{{ asset("img/subpage/cex-how-to-change-account-information-6.jpg") }}" alt="" class="img-thumbnail"></p>
            </div>
            <div class="col-md-5">
                <p class="text-center"><img src="{{ asset("img/subpage/cex-how-to-change-account-information-7.jpg") }}" alt="" class="img-thumbnail"></p>
            </div>
        </div>
    </div>
</section>
@endsection
