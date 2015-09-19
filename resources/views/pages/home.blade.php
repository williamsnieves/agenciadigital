@extends('base')
@section('title')
	3wv - Home
@endsection
@section('content')
<div class="container-fluid" id="home">
	<div class="row">
		<div class="Background">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 MainTitle">
						<h2 class="MainTitle-sub">Unique ideas</h2>
						<h2 class="MainTitle-sub">and passion</h2>
						<h2 class="MainTitle-sub">We are more than a</h2>
						<h1 class="MainTitle-main">digital media</h1>
						<h1 class="MainTitle-main">agency</h1>			
					</div> 
				</div>
			</div>
			
		</div>		
	</div>
</div>

<div class="container-fluid" id="about">
	<div class="row">
		<div class="Background-about">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 MainAbout">
						<h1 class="MainAbout-main">who we are</h1>			
						<h4 class="MainAbout-sub">3WV Group as a company</h4>
						<p class="MainAbout-content">3WV is the most convenient multi-faceted and international web marketing agency for you. With more than fifteen years of experience on bringing success to our clients, we are unique because we understand that the technical value is just as important as the aesthetical one, and the message is as vital as the way you deliver it. Winner of numerous national and international awards, 3WV is known as one of the most diversified companies in its field.</p>
						<p class="MainAbout-content">
						We are worldwide communicators that embrace the internet and all its possibilities as the medium to achieve what our clients need, regardless of where they are located.
						</p>
						<p class="MainAbout-content">
							Our team has the best system engineers and the most creative designers, advertisers, marketing specialists and writters who work together in order to conceptualize, plan, execute and deliver winning and endearing digital and web marketing campaigns. 
						</p>
						<p class="MainAbout-content">
							We believe that technology is the greatest tool to reach the global audience.
						</p>
					</div> 
				</div>
			</div>
			
		</div>		
	</div>
</div>

<div class="container-fluid" id="choose">
	<div class="row">
		<div class="Background-choose">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 MainChoose">
						<h1 class="MainChoose-main">how we think</h1>			
						<h4 class="MainChoose-sub">3WV Group philosophy</h4>

						<figure class="MainChoose-objectives wow slideInLeft">
							<img src="{{ URL::to('/') }}/images/objectives.png" alt="objectives">
						</figure>

						<h2 class="MainChoose-objectives-title">objectives</h2>

						<ul class="MainChoose-objectives-list">
							<li>To offer our customers the most engaging and innovative marketing strategies, specifically designed based on the company's budget, style and purpose.</li>
							<li>To provide our clients with a complete range of IT services.</li>
							<li>To maintain the highest quality standards.</li>
							<li>To strengthen our team of highly trained professionals.</li>
						</ul>

						<p class="MainChoose-objectives-subtitle">
							We want to maximize the potential of our customer's company and integrate it into the market place in a modern way.
						</p>

						<figure class="MainChoose-objectives wow slideInLeft">
							<img src="{{ URL::to('/') }}/images/vision.png" alt="vision">
						</figure>

						<h2 class="MainChoose-objectives-title">vision</h2>

						<p class="MainChoose-objectives-subtitle">At 3WV, we want to become the first resource for small, medium and large size companies/businesses that are looking to expand themselves by means of pioneering digital marketing campaigns for Latin-American and US markets. As well, for those clients demanding excellence in services related to consulting, e-business and IT integrated solutions.</p>

						
						<figure class="MainChoose-objectives wow slideInLeft">
							<img src="{{ URL::to('/') }}/images/mission.png" alt="mission">
						</figure>

						<h2 class="MainChoose-objectives-title">mission</h2>						

						<p class="MainChoose-objectives-subtitle">
							At 3WV, we develop, execute and provide our clients with thriving digital marketing strategies and IT solutions, by means of the most innovative and engaging designs and sophisticated engineering techniques that are entirely friendly to the user and very helpful to our clients. These are customized to your needs in order to assist you efficiently in achieving your business goals.
						</p>

						<p class="MainChoose-objectives-subtitle">
							We listen. We craft. We deliver the most creative strategies and solutions for your success.
						</p>

					</div> 
				</div>
			</div>
			
		</div>		
	</div>
</div>

<div class="container-fluid" id="services">
	<div class="row">
		<div class="Background-service">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 MainService">
						<h1 class="MainService-main">what we offer</h1>			
						<h4 class="MainService-sub">3WV Group services</h4>

						<ul class="MainService-list">						
							<li>
								Digital Marketing.
								<ul style="display:none;">
									<li>Planning and execution of marketing and advertising campaigns in digital media.</li>
									<li>Mailing list.</li>
									<li>Solutions for phones, tablets and another mobile devices.</li>
									<li>Custom Database design, development and management.</li>
									<li>Google, Bing, Yahoo and Facebook Ads.</li>
									<li>Search Engine Marketing (SEM).</li>
									<li>Managing Social Media Influencers.</li>
									<li>Promotional Websites (Mini Sites).</li>
									<li>Social Media and Community Management.</li>
									<li>Graphic Design.</li>
								</ul>
							</li>
							<li>Websites and web applications.
								<ul style="display:none;">
									<li>Development of proposals and project drafts.</li>
									<li>System architecture and components' design.</li>
									<li>Graphic Design.</li>
									<li>Programming.</li>
									<li>Prototype creation and launching.</li>
									<li>Maintenance, support and help.</li>
									<li>Web applications.</li>
									<li>Search Engine Optimization (SEO).</li>
									<li>Development and setting of Content Management System (CMS).</li>
									<li>Development of applications for e-Commerce and e-Business.</li>
									<li>Intranets and Extranets.</li>
								</ul>
							</li>
							<li>Social Media and Community Management.
								<ul style="display:none;">
									<li>Development and implementation of social media strategies.</li>
									<li>Planning, designing and posting content in social media.</li>
									<li>Monitoring of actions and activities to measure influence in audiences.</li>
									<li>Drafting, designing, and posting content from clients and related content in websites and/or blogs.</li>
									<li>Organization and management of contests and drafts on social media.</li>
									<li>Preparing reports of results.</li>
								</ul>
							</li>
							<li>Graphic Design.
								<ul style="display:none;">
									<li>Graphic Identity.</li>
									<li>Design and redesign of logos.</li>
									<li>Digital Web presence.</li>
									<li>Cards and stationery.</li>
									<li>Brochures, triptychs, catalogs, newsletters, magazines.</li>
									<li>Packaging and Labels.</li>
									<li>Signs.</li>
									<li>Illustrations.</li>
								</ul>
							</li>
							<li>Multimedia.
								<ul style="display:none;">
									<li>Multimedia Applications..</li>
									<li>Electronic cards (e-cards).</li>
									<li>Interactive CDs.</li>
									<li>3D Animations.</li>
									<li>Online learning (e-learning).</li>
									<li>Video.</li>
								</ul>
							</li>
						</ul>						

					</div> 
				</div>
			</div>
			
		</div>		
	</div>
</div>

<div class="container-fluid" id="alliances">
	<div class="row">
		<div class="Background-alliance">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 MainAlliance">
						<h1 class="MainAlliance-main">alliances</h1>					

						<figure class="MainAlliance-partner wow slideInLeft">
							<img src="{{ URL::to('/') }}/images/partner1.png" alt="partner">
						</figure>

						<figure class="MainAlliance-partner wow slideInRight">
							<img src="{{ URL::to('/') }}/images/partner2.png" alt="partner">
						</figure>

						<figure class="MainAlliance-partner wow slideInLeft">
							<img src="{{ URL::to('/') }}/images/partner3.png" alt="partner">
						</figure>

					</div> 
				</div>
			</div>
			
		</div>		
	</div>
</div>


<div class="container-fluid" id="clients">
	<div class="row">
		<div class="Background-clients">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 MainClients">
						<h1 class="MainClients-main">clients</h1>					

						

					</div> 
				</div>
			</div>
			
		</div>		
	</div>
</div>

<div class="container-fluid" id="portfolio">
	<div class="row">
		<div class="Background-portfolio">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 MainPortfolio">
						<h1 class="MainPortfolio-main">portfolio</h1>					

						

					</div> 
				</div>
			</div>
			
		</div>		
	</div>
</div>

<div class="container-fluid" id="contact">
	<div class="row">
		<div class="Background-contact">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 MainContact">
						<h1 class="MainContact-main">contact</h1>					

						

					</div> 
				</div>
			</div>
			
		</div>		
	</div>
</div>

@endsection