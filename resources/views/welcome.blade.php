@extends('layouts.app')

@section('content')
	<section id="aboutUs" class="gradBg">
		<div class="container">
			<h2 class="sectionHeading">
				<span>About us</span>
				<div class="dropdown">
					<button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
						Download whitepaper
					</button>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" target="_blank" href="{{ asset('whitepaper/Arab-Whitepaper.pdf') }}">Arab</a></li>
						<li><a class="dropdown-item" target="_blank" href="{{ asset('whitepaper/Chinese-Whitepaper.pdf') }}">Chinese</a></li>
						<li><a class="dropdown-item" target="_blank" href="{{ asset('whitepaper/English-Whitepaper.pdf') }}">English</a></li>
						<li><a class="dropdown-item" target="_blank" href="{{ asset('whitepaper/French-Whitepaper.pdf') }}">French</a></li>
						<li><a class="dropdown-item" target="_blank" href="{{ asset('whitepaper/German-Whitepaper.pdf') }}">German</a></li>
						<li><a class="dropdown-item" target="_blank" href="{{ asset('whitepaper/Indonesian-Whitepaper.pdf') }}">Indonesian</a></li>
						<li><a class="dropdown-item" target="_blank" href="{{ asset('whitepaper/Italian-Whitepaper.pdf') }}">Italian</a></li>
						<li><a class="dropdown-item" target="_blank" href="{{ asset('whitepaper/Japanese-Whitepaper.pdf') }}">Japanese</a></li>
						<li><a class="dropdown-item" target="_blank" href="{{ asset('whitepaper/Korean-Whitepaper.pdf') }}">Korean</a></li>
						<li><a class="dropdown-item" target="_blank" href="{{ asset('whitepaper/Latin-Whitepaper.pdf') }}">Latin</a></li>
						<li><a class="dropdown-item" target="_blank" href="{{ asset('whitepaper/Malaysian-Whitepaper.pdf') }}">Malaysian</a></li>
						<li><a class="dropdown-item" target="_blank" href="{{ asset('whitepaper/Russian-Whitepaper.pdf') }}">Russian</a></li>
						<li><a class="dropdown-item" target="_blank" href="{{ asset('whitepaper/Spanish-Whitepaper.pdf') }}">Spanish</a></li>
						<li><a class="dropdown-item" target="_blank" href="{{ asset('whitepaper/Thailand-Whitepaper.pdf') }}">Thailand</a></li>
						<li><a class="dropdown-item" target="_blank" href="{{ asset('whitepaper/Turkish-Whitepaper.pdf') }}">Turkish</a></li>
						<li><a class="dropdown-item" target="_blank" href="{{ asset('whitepaper/Vietnamese-whitepaper.pdf') }}">Vietnamese</a></li>
					</ul>
				</div>
			</h2>
			<div class="social text-center">
				<a href="https://www.facebook.com/kogad68" target="_blank"><img src="img/icon-facebook.svg" alt=""></a>
				<a href="https://twitter.com/kingofgamesdex" target="_blank"><img src="img/icon-twitter.svg" alt=""></a>
				<a href="https://t.me/kogadglobal" target="_blank"><img src="img/icon-telegram.svg" alt=""></a>
				<a href="https://discord.gg/5fB5DK5369" target="_blank"><img src="img/icon-discord.svg" alt=""></a>
				<a href="https://tiktok.com/@kinggamesanddex" target="_blank"><img src="img/icon-tiktok.svg" alt=""></a>
			</div>
			<div class="videoWrapper">
				<iframe src="https://www.youtube.com/embed/OgSAy47isZk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>				
			<div class="row align-items-center item">
				<div class="col-lg-4 col-md-5">
					<div class="item">
						<lottie-player src="json/lf30_c9jqieok.json" background="transparent" speed="1" loop autoplay></lottie-player>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-1">
					<h3 class="title">Vision</h3>
					<div>
						Become a leading prestigious, classy and professional investment company on blockchain technology with some major activities: Web 3.0 and Token Wallet, Centralized Exchange, Defi-Bank 2.0, Gamefi and Metaverse, Social Network 3.0
					</div>
				</div>
			</div>
			<div class="row align-items-center item">
				<div class="col-lg-4 col-md-5 offset-md-1 order-md-2">
					<div class="item">
						<lottie-player src="json/lf30_w3z1rpnn.json"  background="transparent"  speed="1" loop autoplay></lottie-player>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-lg-3 order-md-1">
					<h3 class="title">Core Values</h3>
					<div>
						Provide services on the decentralized platform to the globe be an ecosystem managed by a leading organization King of Games and DEX is built to serve those who like entertaining contents in the world. All the members of KGD will benefit from the company’s prosperity
					</div>
				</div>
			</div>
			<div class="row align-items-center item">
				<div class="col-lg-4 col-md-5">
					<div class="item">
						<lottie-player src="json/lf30_7tgczukk.json"  background="transparent" speed="1" loop autoplay></lottie-player>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-1">
					<h3 class="title">Mission</h3>
					<div>
						Create technological and financial revolution for the future of the globe
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Ecosystem -->
	<section id="ecosystem">
		<div class="container">
			<h2 class="sectionHeading">
				<span>KGD Ecosystem</span>
				<span class="subHeading">Decentralized finance - Technologies change the world</span>
			</h2>
			<div class="row text-center justify-content-center">
				<div class="col-lg-4 col-md-3">
					<div class="item-1">
						<img src="img/icon-wallet.png" alt="">
						<div class="text">Wallet coinlaunch</div>
					</div>
					<div class="item-2">
						<img src="img/icon-dex.png" alt="">
						<div class="text">CEX</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="logo">
						<img src="img/logo.png" alt="">
					</div>
					<div class="item-3">
						<img src="img/icon-game.png" alt="">
						<div class="text">Games</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-3">
					<div class="item-4">
						<img src="img/icon-social-dapp.png" alt="">
						<div class="text">Social network 3.0</div>
					</div>
					<div class="item-5">
						<img src="img/icon-bank.png" alt="">
						<div class="text">Defi - bank 2.0</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Tokenomics -->
	<section id="tokenomics">
		<div class="container">
			<h2 class="sectionHeading">KGD Tokenomics</h2>
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-3 col-md-5">
					<ul>
						<li class="d-flex justify-content-between align-items-center c1">
							<div>Foundation</div>
							<div class="number">3,11%</div>
						</li>
						<li class="d-flex justify-content-between align-items-center c2">
							<div>Teams</div>
							<div class="number">3,46%</div>
						</li>
						<li class="d-flex justify-content-between align-items-center c3">
							<div>Angel investors</div>
							<div class="number">1,56%</div>
						</li>
						<li class="d-flex justify-content-between align-items-center c4">
							<div>ICO</div>
							<div class="number">0,87%</div>
						</li>
						<li class="d-flex justify-content-between align-items-center c5">
							<div>IEO</div>
							<div class="number">6,92%</div>
						</li>
						<li class="d-flex justify-content-between align-items-center c6">
							<div>Ecosystem growth</div>
							<div class="number">84,08%</div>
						</li>
					</ul>
				</div>
				<div class="col-lg-5 col-md-7 offset-lg-1 text-center">
					<img class="percentChart" src="img/tokenomics.png" alt="">
				</div>
			</div>
		</div>
	</section>

	<!-- Roadmap -->
	<section id="roadmap">
		<h2 class="sectionHeading">KGD Roadmap</h2>
		<div class="inner">
			<div class="timeline">
				<div class="item">
					<span class="date">08/2021</span>
					<ul class="list-unstyled">
						<li>Finished Plan</li>
						<li>Investment and Team DEVs</li>
					</ul>
				</div>
				<div class="item">
					<span class="date">02-04/2022</span>
					<ul class="list-unstyled">
						<li>Web 3.0 (Personal information) and Wallet</li>
						<li>CoinLaunch Functions</li>
						<li>ICO token KGD</li>
						<li>Build KGD Communication</li>
						<li>Update information on BSCscan</li>
					</ul>
				</div>
				<div class="item">
					<span class="date">06-08/2022</span>
					<ul class="list-unstyled">
						<li>Funny Game (test core game PVP, PVE, Arena, Upgrade, Event) (Android, IOS)</li>
						<li>Enhance Global Marketing Campaign 1</li>
						<li>IEO on Centralized Exchange</li>
						<li>List on Coinmarketcap, CoinGecko, Pancakeswap</li>
					</ul>
				</div>
				<div class="item">
					<span class="date">11,12/2022</span>
					<ul class="list-unstyled">
						<li>IEO on Centralized Exchange</li>
						<li>Open Global Communication</li>
						<li>Funny Game (beta core game and update minigame 1,2&3)</li>
						<li>Enhance Global Marketing Campaign 2</li>
						<li>CoinLaunch token of potential Company</li>
					</ul>
				</div>
				<div class="item">
					<span class="date">Q1/2023</span>
					<ul class="list-unstyled">
						<li>Open Global Communication</li>
						<li>Enhance Global Marketing Campaign 3</li>
						<li>Enhance CoinLaunch token of potential Company</li>
						<li>Funny Game (update minigame 4, 5 &6)</li>
					</ul>
				</div>
				<div class="item">
					<span class="date">Q2,3/2023</span>
					<ul class="list-unstyled">
						<li>KGD CEX Dapp (Web, Android, IOS) (Spot, P2P)</li>
						<li>Open Global Communication</li>
						<li>Launch DEFI-Bank 2.0 (Staking, Loans, Mortage)</li>
						<li>Enhance CoinLaunch token of potential Company</li>
						<li>IEO on KGD Centralized (KGD CEX)</li>
					</ul>
				</div>
				<div class="item">
					<span class="date">Q1,2/2024</span>
					<ul class="list-unstyled">
						<li>Open Global Communication</li>
						<li>Game 3D Turnbase (Android, IOS)</li>
						<li>Social network (full options)</li>
						<li>KGD CEX Dapp (Web, Android, IOS) (Margin)</li>
						<li>KGD CEX Dapp (Web, Android, IOS) (Future)</li>
					</ul>
				</div>
				<div class="item">
					<span class="date">Q3/2024 - 2030</span>
					<ul class="list-unstyled">
						<li>Social network (alpha test-funtion Video, chat, message, Zoom)</li>
						<li>Update web 3.0 on KGD Blockchain</li>
						<li>Game Moba 3D PVP (full options)</li>
						<li>Upgrade Funny game, Turnbase game and Moba game</li>
						<li>Upgrade Web 3.0 (Virtual Assistant, AI on Social Network 3.0)</li>
						<li>Research and Launch Dapp 3D Metaverse Games</li>
						<li>Research and creat hand metaverse equipments</li>
					</ul>
				</div>
			</div>
			<div class="stage">
				<div class="row g-0">
					<div class="col-auto item">
						<span>STAGE 1</span>
					</div>
					<div class="col-auto item">
						<span>STAGE 2</span>
					</div>
					<div class="col-auto item">
						<span>STAGE 3</span>
					</div>
					<div class="col-auto item">
						<span>STAGE 4</span>
					</div>
					<div class="col-auto item">
						<span>STAGE 5</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Members -->
	<section id="members">
		<div class="container">				
			<h2 class="sectionHeading">
				KGD Members
				<span class="subHeading">Our awesome team</span>
			</h2>
			<div class="row justify-content-center listMembers">
				<div class="col-lg-2 col-md-3 col-6">
					<img src="img/member-1.png" alt="">
					<div class="name">PhD. DrSam</div>
					<div class="title">CEO and Founder</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="img/member-2.png" alt="">
					<div class="name">MD. Sinh Harris</div>
					<div class="title">CMO and Marketing</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="img/member-3.png" alt="">
					<div class="name">Liberty Hoang</div>
					<div class="title">Appraiser Director</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="img/member-4.png" alt="">
					<div class="name">Tracy Luu</div>
					<div class="title">Game design CTO</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="img/member-5.png" alt="">
					<div class="name">IT.PhD. Hung Nguyen</div>
					<div class="title">Web & CEX CTO</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="img/member-6.png" alt="">
					<div class="name">IT. Luan Pham</div>
					<div class="title">Funny Game CTO</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="img/member-7.png" alt="">
					<div class="name">Trang Beauty</div>
					<div class="title">Suport team leader</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="img/member-8.png" alt="">
					<div class="name">Hoi Tran</div>
					<div class="title">Animator & Painter</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="img/member-9.png" alt="">
					<div class="name">MD. Thuy Luong</div>
					<div class="title">Language Leader</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="img/member-10.png" alt="">
					<div class="name">Duy Hung</div>
					<div class="title">Social media leader</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="img/member-11.png" alt="">
					<div class="name">MD. Thanh Nguyen</div>
					<div class="title">3D Art Design Leader</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="img/member-12.png" alt="">
					<div class="name">MD. Bxt Wiliam</div>
					<div class="title">3D game editor Leader</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="img/member-13.png" alt="">
					<div class="name">MD. Nam Hoang</div>
					<div class="title">Law advisor leader</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="img/member-14.png" alt="">
					<div class="name">IT.PhD. Louis Pito</div>
					<div class="title">Node blockchain CTO</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="img/member-15.png" alt="">
					<div class="name">Truong Ngo</div>
					<div class="title">Market Research Analyst</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="img/member-16.png" alt="">
					<div class="name">Johnny Vo</div>
					<div class="title">Design & Test leader</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="img/member-17.png" alt="">
					<div class="name">Luong Ngoc Tu</div>
					<div class="title">System advisor leader</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="img/member-18.png" alt="">
					<div class="name">MD. Sammie</div>
					<div class="title">R & D Leader</div>
				</div>
			</div>
		</div>
	</section>
@endsection
