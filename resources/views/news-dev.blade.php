@extends('layouts.app')

@section('content')
	<!-- Dev Team -->
	<!-- {{-- <section id="members" class="subPage">
		<div class="container">
			<h2 class="sectionHeading">DEV team updates</h2>
			<div class="row justify-content-center listMembers">
				<div class="col-lg-2 col-md-3 col-6">
					<img src="{{ asset('img/member-1.png') }}" alt="">
					<div class="name">PhD. DrSam</div>
					<div class="title">CEO and Founder</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="{{ asset('img/member-2.png') }}" alt="">
					<div class="name">MD. Sinh Harris</div>
					<div class="title">CMO and Marketing</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="{{ asset('img/member-3.png') }}" alt="">
					<div class="name">Liberty Hoang</div>
					<div class="title">Appraiser Director</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="{{ asset('img/member-4.png') }}" alt="">
					<div class="name">Tracy Luu</div>
					<div class="title">Game design CTO</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="{{ asset('img/member-5.png') }}" alt="">
					<div class="name">IT.PhD. Hung Nguyen</div>
					<div class="title">Web &amp; CEX CTO</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="{{ asset('img/member-6.png') }}" alt="">
					<div class="name">IT. Luan Pham</div>
					<div class="title">Funny Game CTO</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="{{ asset('img/member-7.png') }}" alt="">
					<div class="name">Trang Beauty</div>
					<div class="title">Suport team leader</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="{{ asset('img/member-8.png') }}" alt="">
					<div class="name">Hoi Tran</div>
					<div class="title">Animator &amp; Painter</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="{{ asset('img/member-9.png') }}" alt="">
					<div class="name">MD. Thuy Luong</div>
					<div class="title">Language Leader</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="{{ asset('img/member-10.png') }}" alt="">
					<div class="name">Duy Hung</div>
					<div class="title">Social media leader</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="{{ asset('img/member-11.png') }}" alt="">
					<div class="name">MD. Thanh Nguyen</div>
					<div class="title">3D Art Design Leader</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="{{ asset('img/member-12.png') }}" alt="">
					<div class="name">MD. Bxt Wiliam</div>
					<div class="title">3D game editor Leader</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="{{ asset('img/member-13.png') }}" alt="">
					<div class="name">MD. Nam Hoang</div>
					<div class="title">Law advisor leader</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="{{ asset('img/member-14.png') }}" alt="">
					<div class="name">IT.PhD. Louis Pito</div>
					<div class="title">Node blockchain CTO</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="{{ asset('img/member-15.png') }}" alt="">
					<div class="name">Truong Ngo</div>
					<div class="title">Market Research Analyst</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="{{ asset('img/member-16.png') }}" alt="">
					<div class="name">Johnny Vo</div>
					<div class="title">Design &amp; Test leader</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="{{ asset('img/member-17.png') }}" alt="">
					<div class="name">Luong Ngoc Tu</div>
					<div class="title">System advisor leader</div>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<img src="{{ asset('img/member-18.png') }}" alt="">
					<div class="name">MD. Sammie</div>
					<div class="title">R &amp; D Leader</div>
				</div>
			</div>
			<div class="memberInfo">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="row align-items-center overview">
									<div class="col-md-auto">
										<img src="{{ asset('img/member-1.png') }}" alt="">
									</div>
									<div class="col-md">
										<h5 class="card-title">CEO & Founder</h5>
										<ul class="mb-0">
											<li>Full name: Truong Dinh Khoi</li>
											<li>Birth date: 10/08/1985</li>
											<li>Nickname: Dr Sam</li>
											<li>Nation: Vietnam</li>
										</ul>
									</div>
								</div>
								<hr>
								<p>Certification: Graduated from Hanoi Medical University in 2010 (Faculty of Odonto – Stomatology), PhD in Macroeconomics of New Jersey Institute of Technology in 2014, and PhDs at Hanoi Medical University from 2016 to now.</p>
								<p>Experience: CEO and founder of Dento – Beauty Spa and Clinic from 2010 to now with sevent Spa and clinics, and more 60 medical workers, our websites:</p>
								<ul>
									<li><a href="https://nhakhoahathuy.com" target="_blank" class="text-primary">https://nhakhoahathuy.com</a></li>
									<li><a href="https://maslign.com" target="_blank" class="text-primary">https://maslign.com</a></li>
								</ul>
								<p>CEO and founder of The Gia Oriental and Food Production Joint Stock Company from 2015 to 2020 with pharmaceutical factory at Thac Hoa 3 street, Son Thinh town, Van Chan district, Yen Bai Province, Vietnam, and more 200 workers and 12.000 Stores in Vietnam, China, Hongkong, Singapore and Europe, our websites:</p>
								<ul>
									<li><a href="https://dongduocthegia.com" target="_blank" class="text-primary">https://dongduocthegia.com</a></li>
									<li><a href="http://nuoctaomeo.com" target="_blank" class="text-primary">http://nuoctaomeo.com</a></li>
									<li><a href="http://caoquocky.com" target="_blank" class="text-primary">http://caoquocky.com</a></li>
									<li><a href="http://vienuonglamdep.com" target="_blank" class="text-primary">http://vienuonglamdep.com</a></li>
								</ul>
								<p>However, two owned companies have handed over to another person to take over the work because these companise have been stabilizing and developing to focus on this project for at least the next 10 years. KGD company is a passion when it has a solid financial backing from the previous two companies that have good and sustainable profits. The pharmaceutical company has a current audited valuation of 180 billion VND ($9 million) and is in the process of completing an IPO procedure on the Vietnamese stock exchange in 2022, with an estimated 30 - 35% growth in value per year. The CEO has a passion for technology and many innovative online game ideas, has a well-organized organization, proper background, and useful hands-on experience. CEO builds products from his own design and based on needs of users with the deepest understanding, always take product quality as the core to create sustainable value for the business. Desire to build a complete, sustainable, secure, closed and convenient Blockchain ecosystem for users, Builds a transparent, public and practical blockchain technology company.</p>
								<p>Social media contact: </p>
								<ul>
									<li>Twitter: <a href="https://twitter.com/khoitru17797581" target="_blank" class="text-primary">https://twitter.com/khoitru17797581</a></li>
									<li>Facebook: <a href="https://www.facebook.com/khoi.chales" target="_blank" class="text-primary">https://www.facebook.com/khoi.chales</a></li>
									<li>Email: <a href="mailto:kingofgameanddex86@gmail.com" class="text-primary">kingofgameanddex86@gmail.com</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="row align-items-center overview">
									<div class="col-md-auto">
										<img src="{{ asset('img/member-2.png') }}" alt="">
									</div>
									<div class="col-md">
										<h5 class="card-title">CMO and marketing</h5>
										<ul class="mb-0">
											<li>Full name: Bui Van Sinh</li>
											<li>Birth year: 1991</li>
											<li>Nickname: Sinh Harris</li>
											<li>Nation: Vietnam</li>
										</ul>
									</div>
								</div>
								<hr>
								<p>Certification: Graduated from National University of Singapore in 2013 (Faculty of Marketing), MD in Marketing of National University of Singapore in 2018. </p>
								<p>Experience: 8 years of experience in community development for a number of technology corporations in Southeast Asia and Central Asia.</p>
								<p>Social media contact: </p>
								<ul>
									<li>Twitter: <a href="https://twitter.com/TamSinh35" target="_blank" class="text-primary">https://twitter.com/TamSinh35</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="row align-items-center overview">
									<div class="col-md-auto">
										<img src="{{ asset('img/member-3.png') }}" alt="">
									</div>
									<div class="col-md">
										<h5 class="card-title">Appraiser Director</h5>
										<ul class="mb-0">
											<li>Full name: Hoang Ha</li>
											<li>Birth year: 1982</li>
											<li>Nickname: Liberty Hoang</li>
											<li>Nation: Vietnam</li>
										</ul>
									</div>
								</div>
								<hr>
								<p>Certification: Bachelor of Telecommunications Engineering Backend and Database Specialist.</p>
								<p>Experience: A lover of computer analysis, projection and development, has been active in the blockchain world since 2017. 5 years of experience and understanding of what works makes her the ideal business strategist for KDG.</p>
								<p>Social media contact: </p>
								<ul>
									<li>LinkIn: <a href="https://www.linkedin.com/in/liberty-hoang/" target="_blank" class="text-primary">https://www.linkedin.com/in/liberty-hoang/</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="row align-items-center overview">
									<div class="col-md-auto">
										<img src="{{ asset('img/member-4.png') }}" alt="">
									</div>
									<div class="col-md">
										<h5 class="card-title">Game design CTO</h5>
										<ul class="mb-0">
											<li>Full name: Tracy Luu</li>
											<li>Birth year: 1976</li>
											<li>Nickname: Tracy</li>
											<li>Nation: US</li>
										</ul>
									</div>
								</div>
								<hr>
								<p>Certification: Graduated from Newyork University in 1999 (Faculty of Art 2d, 3D Design), PhD in Art Design of Newyork University in 2007. </p>
								<p>Experience: 23 years of experience in Art Design for games Companies over the world. Content creation, game balancing, character creation and levels in 2D and 3D games.</p>
								<p>Social media contact: </p>
								<ul>
									<li>Twitter: <a href="https://twitter.com/TracyLuu8" target="_blank" class="text-primary">https://twitter.com/TracyLuu8</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="row align-items-center overview">
									<div class="col-md-auto">
										<img src="{{ asset('img/member-5.png') }}" alt="">
									</div>
									<div class="col-md">
										<h5 class="card-title">Web & CEX CTO</h5>
										<ul class="mb-0">
											<li>Full name: Nguyen Manh Hung</li>
											<li>Birth year: 1992</li>
											<li>Nickname: Hung Manh</li>
											<li>Nation: France</li>
										</ul>
									</div>
								</div>
								<hr>
								<p>Certification: Graduated in computer science from Pantheon - Sorbonne University in 2014. Graduated PhD in AI web applications and decentralized networks in 2019 from Pantheon - Sorbonne University.</p>
								<p>Experience: 8 years of experience in programming and securing AI webs, decentralized exchanges of crypto currencies, in programming blockchain applications.</p>
								<p>Social media contact: </p>
								<ul>
									<li>Twitter: <a href="https://twitter.com/HungNgu08224700" target="_blank" class="text-primary">https://twitter.com/HungNgu08224700</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="row align-items-center overview">
									<div class="col-md-auto">
										<img src="{{ asset('img/member-6.png') }}" alt="">
									</div>
									<div class="col-md">
										<h5 class="card-title">Funny game CTO</h5>
										<ul class="mb-0">
											<li>Full name: Pham Manh Luan</li>
											<li>Birth year: 1992</li>
											<li>Nickname: Luan Pham</li>
											<li>Nation: Vietnam</li>
										</ul>
									</div>
								</div>
								<hr>									
								<p>Social media contact: </p>
								<p>Certification: Graduated with Blender and Unity programming at Hanoi University of Science and Technology in 2015. </p>
								<p>Experience: 5 years of experience in programming online games with blockchain applications, using unity software and C# and C++ programming languages. Served as CTO of several completed NFT games.</p>
								<ul>
									<li>Twitter: <a href="https://twitter.com/Ln26220519" target="_blank" class="text-primary">https://twitter.com/Ln26220519</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="row align-items-center overview">
									<div class="col-md-auto">
										<img src="{{ asset('img/member-7.png') }}" alt="">
									</div>
									<div class="col-md">
										<h5 class="card-title">Support team leader</h5>
										<ul class="mb-0">
											<li>Full name: Truong Thi Huyen Trang</li>
											<li>Birth year: 1992</li>
											<li>Nickname: Trang Beauty</li>
											<li>Nation: Vietnam</li>
										</ul>
									</div>
								</div>
								<hr>						
								<p>Certification: Graduated from Hanoi College of Commerce and Tourism, majoring in accounting in 2013.</p>			
								<p>Experience: 8 years of experience in customer service and support for online game publishers, in charge of customer care teams for several communities on social networking sites.</p>
								<p>Social media contact: </p>
								<ul>
									<li>Twitter: <a href="https://twitter.com/HuynTra4698766" target="_blank" class="text-primary">https://twitter.com/HuynTra4698766</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="row align-items-center overview">
									<div class="col-md-auto">
										<img src="{{ asset('img/member-8.png') }}" alt="">
									</div>
									<div class="col-md">
										<h5 class="card-title">Animator & Painter</h5>
										<ul class="mb-0">
											<li>Full name: Tran Thi Hoi</li>
											<li>Birth year: 1986</li>
											<li>Nickname: Hoi Tran</li>
											<li>Nation: Vietnam</li>
										</ul>
									</div>
								</div>
								<hr>				
								<p>Certification: Graduated from College of Graphic Arts in 2007, majoring in graphic design, currently completing a program at Vietnam University of Fine Arts, Faculty of Painting.</p>					
								<p>Experience: 15 years of experience in drawing and creating characters, creating backgrounds for online games, professional painters for some graphic design companies using intensive digital drawing applications.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="row align-items-center overview">
									<div class="col-md-auto">
										<img src="{{ asset('img/member-9.png') }}" alt="">
									</div>
									<div class="col-md">
										<h5 class="card-title">Language Leader</h5>
										<ul class="mb-0">
											<li>Full name: Luong Thi Thu Thuy</li>
											<li>Birth year: 1995</li>
											<li>Nickname: Thu Thuy</li>
											<li>Nation: France</li>
										</ul>
									</div>
								</div>
								<hr>			
								<p>Certification: Graduated from Foreign Trade University in 2017, majoring in External economics, Graduated Master of Arts Degree in Teaching English to Speakers of Other Languages at University of Huddersfield, UK in 2019. </p>						
								<p>Experience: 5 years of experience in discussing cooperation with multinational companies, teaching and preparing for IELTS in particular and English in general.</p>
								<p>Social media contact: </p>
								<ul>
									<li>Facebook: <a href="https://www.facebook.com/luongthuthuyteacher" target="_blank" class="text-primary">https://www.facebook.com/luongthuthuyteacher</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="row align-items-center overview">
									<div class="col-md-auto">
										<img src="{{ asset('img/member-10.png') }}" alt="">
									</div>
									<div class="col-md">
										<h5 class="card-title">Social media leader</h5>
										<ul class="mb-0">
											<li>Full name: Nguyen Van Duy Hung</li>
											<li>Nickname: Huwngn0bii</li>
											<li>Nation: Vietnam</li>
										</ul>
									</div>
								</div>
								<hr>		
								<p>Certification: Graduated from Ho Chi Minh College of Information Technology, majoring in multimedia communication in 2021.</p>							
								<p>Experience: Having a passion for the financial market in general and the crypto currency market, having experience in managing social networking groups including facebook, telegram, twitter, discord in the field of financial investment.</p>
								<p>Social media contact: </p>
								<ul>
									<li>Twitter: <a href="https://twitter.com/huwngn0bii" target="_blank" class="text-primary">https://twitter.com/huwngn0bii</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="row align-items-center overview">
									<div class="col-md-auto">
										<img src="{{ asset('img/member-11.png') }}" alt="">
									</div>
									<div class="col-md">
										<h5 class="card-title">3D Art Design Lead</h5>
										<ul class="mb-0">
											<li>Full name: Nguyen Van Thanh</li>
											<li>Birth year: 1989</li>
											<li>Nickname: Thanh Nguyen</li>
											<li>Nation: Vietnam</li>
										</ul>
									</div>
								</div>
								<hr>									
								<p>Certification: Graduated from Ho Chi Minh College of Information Technology, majoring in graphic design in 2012.</p>
								<p>Experience: Having 9 years of experience in graphic design for online game companies, designing 2D and 3D character routes. Having 5 years of experience in graphic design for NFT game companies around the world.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="row align-items-center overview">
									<div class="col-md-auto">
										<img src="{{ asset('img/member-12.png') }}" alt="">
									</div>
									<div class="col-md">
										<h5 class="card-title">3D game editor Leader</h5>
										<ul class="mb-0">
											<li>Full name: Bui Xuan Truong</li>
											<li>Birth year: 1994</li>
											<li>Nickname: Bxt Wiliam</li>
											<li>Nation: Vietnam</li>
										</ul>
									</div>
								</div>
								<hr>								
								<p>Certification: Graduated from College of Graphic Arts in 2016, majoring in graphic design</p>	
								<p>Experience: Having 6 years of experience in graphic design for online game companies, designing 2D and 3D character routes, posters for multinational advertising agencies. Having 6 years of experience in graphic design for NFT game companies around the world.</p>
								<p>Social media contact: </p>
								<ul>
									<li>Twitter: <a href="https://twitter.com/BXTWill" target="_blank" class="text-primary">https://twitter.com/BXTWill</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="row align-items-center overview">
									<div class="col-md-auto">
										<img src="{{ asset('img/member-13.png') }}" alt="">
									</div>
									<div class="col-md">
										<h5 class="card-title">Law advisor leader</h5>
										<ul class="mb-0">
											<li>Full name: Nguyen Hoang Nam</li>
											<li>Birth year: 1985</li>
											<li>Nickname: Nam Hoang</li>
											<li>Nation: Vietnam</li>
										</ul>
									</div>
								</div>
								<hr>
								<p>Certification: Graduated from Hanoi Law University in 2008, obtained a judge certificate at the people's court.</p>
								<p>Experience: Having 14 years of experience in corporate law, successfully advising thousands of businesses on legal status with host governments. Drafting contract terms for multinational companies.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="row align-items-center overview">
									<div class="col-md-auto">
										<img src="{{ asset('img/member-14.png') }}" alt="">
									</div>
									<div class="col-md">
										<h5 class="card-title">Node blockchain CTO</h5>
										<ul class="mb-0">
											<li>Full name: Louis Pito</li>
											<li>Birth year: 1981</li>
											<li>Nickname: Pito</li>
											<li>Nation: Philippine</li>
										</ul>
									</div>
								</div>
								<hr>									
								<p>Certification: Graduated from the National University of Singapore in 2004, graduated PhD in 2013, majoring in information security.</p>
								<p>Experience: Having 18 years of working in information security for multinational media corporations, including google and facebook. Having 6 years of experience in blockchain network programming and decentralized database for blockchain companies in Singapore.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="row align-items-center overview">
									<div class="col-md-auto">
										<img src="{{ asset('img/member-15.png') }}" alt="">
									</div>
									<div class="col-md">
										<h5 class="card-title">Market Research Analyst</h5>
										<ul class="mb-0">
											<li>Full name: Ngo Minh Truong</li>
											<li>Birth year: 1983</li>
											<li>Nickname: Truong Ngo</li>
											<li>Nation: Vietnam</li>
										</ul>
									</div>
								</div>
								<hr>			
								<p>Certification: Graduated from the University of Mines and Geology in 2005.</p>						
								<p>Experience: Participating in the financial market since 2013, participating in many domestic and foreign courses on financial investment. Joined the crypto currency market since 2013, has extensive experience in project analysis, technical analysis and cash flow analysis in the financial market. The influence of world policies on financial markets.</p>
								<p>Social media contact: </p>
								<ul>
									<li>Facebook: <a href="https://www.facebook.com/profile.php?id=100005401533024" target="_blank" class="text-primary">https://www.facebook.com/profile.php?id=100005401533024</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="row align-items-center overview">
									<div class="col-md-auto">
										<img src="{{ asset('img/member-16.png') }}" alt="">
									</div>
									<div class="col-md">
										<h5 class="card-title">Design & Test leader</h5>
										<ul class="mb-0">
											<li>Full name: Vo Van Thanh</li>
											<li>Birth year: 1989</li>
											<li>Nickname: Johnny Vo</li>
											<li>Nation: Vietnam</li>
										</ul>
									</div>
								</div>
								<hr>				
								<p>Certification: Graduated from Hanoi University of Business and Technology in 2015, majoring in business administration.</p>					
								<p>Experience: Passionate about online games, worked as a contributor to create a community specializing in testing online game features of domestic and foreign game publishers, detecting errors in game functions: Play, synthesize and come up with solutions since 2017. </p>
								<p>Social media contact: </p>
								<ul>
									<li>Facebook: <a href="https://www.facebook.com/thanhselo" target="_blank" class="text-primary">https://www.facebook.com/thanhselo</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="row align-items-center overview">
									<div class="col-md-auto">
										<img src="{{ asset('img/member-17.png') }}" alt="">
									</div>
									<div class="col-md">
										<h5 class="card-title">System advisor leader</h5>
										<ul class="mb-0">
											<li>Full name: Luong Ngoc Tu</li>
											<li>Birth year: 1982</li>
											<li>Nickname: Ngoc Tu</li>
											<li>Nation: Vietnam</li>
										</ul>
									</div>
								</div>
								<hr>			
								<p>Certification: Graduated from Financial and banking University in 2005, majoring in management and finance.</p>						
								<p>Experience: 17 years of experience in consulting and strategic planning for multinational media companies, financial and insurance companies globally. Strategic planning for startups is related to governance and finance as well as global financial markets.</p>
								<p>Social media contact: </p>
								<ul>
									<li>Facebook: <a href="https://facebook.com/profile.php?id=100057069524217" target="_blank" class="text-primary">https://facebook.com/profile.php?id=100057069524217</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="row align-items-center overview">
									<div class="col-md-auto">
										<img src="{{ asset('img/member-18.png') }}" alt="">
									</div>
									<div class="col-md">
										<h5 class="card-title">R & D Leader</h5>
										<ul class="mb-0">
											<li>Full name: Luong Thi Thuy Thu</li>
											<li>Birth year: 1995</li>
											<li>Nickname: Sammie</li>
											<li>Nation: Vietnam</li>
										</ul>
									</div>
								</div>
								<hr>									
								<p>Certification: Graduated with a bachelor's degree in human resource management from the National University of Singapore in 2020.</p>
								<p>Experience: 5 years of experience in building market demand research projects for products, evaluating and analyzing results of investigating user problems when using applications, especially financial applications, and administration human resources for multinational companies.</p>
							</div>
						</div>
					</div>						
				</div>
			</div>
		</div>
	</section> --}} -->

	{!! $news->content !!}
@endsection
