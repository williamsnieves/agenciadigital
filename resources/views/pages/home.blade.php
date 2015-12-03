@extends('base')
@section('title')
	3wv - Home
@endsection
@section('content')
<div class="container-fluid" id="home">
	<div class="row">
		<div class="Background">
			<div id="bg1" data-0="background-position:0px 0px;" data-end="background-position:-500px -10000px;"></div>
			<div id="bg2" data-0="top:40em;" data-end="top:-100em"></div>
			<div id="bg3" data-0="background-position:0px 0px;" data-end="background-position:-500px -6000px;"></div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 MainTitle">
						@if($lang == 'en')
							<h2 class="MainTitle-sub">Unique ideas</h2>
							<h2 class="MainTitle-sub">and passion</h2>
							<h2 class="MainTitle-sub">We are more than a</h2>
							<h1 class="MainTitle-main">digital media</h1>
							<h1 class="MainTitle-main">agency</h1>
							<h2 class="MainTitle-sub-web">Unique ideas and passion</h2>
							<h2 class="MainTitle-sub-web">We are more than a <span class="MainTitle-main-web">digital media agency</span></h2>
						@endif

						@if($lang == 'es')
							<h2 class="MainTitle-sub">Ideas Unicas</h2>
							<h2 class="MainTitle-sub">y pasión</h2>
							<h2 class="MainTitle-sub">Somos mas que una</h2>
							<h1 class="MainTitle-main">agencia de</h1>
							<h1 class="MainTitle-main">medios digitales</h1>
							<h2 class="MainTitle-sub-web">Ideas Unicas y pasión</h2>
							<h2 class="MainTitle-sub-web">Somos mas que una <span class="MainTitle-main-web">agencia de medios digitales</span></h2>
						@endif			
					
						<figure class="fabric-web">
							<img class="machine" src="{{ URL::to('/') }}/images/machine.png" alt="fabric">
							<img class="absolute gear-big rotating" src="{{ URL::to('/') }}/images/gearbig.png" alt="gear">
							<img class="absolute gear-small rotating" src="{{ URL::to('/') }}/images/gearsmall.png" alt="gear">
						</figure>						
						<div  class="wrapper-anim-move">
							<figure class="boxes-web moving">
								<img src="{{ URL::to('/') }}/images/boxes.png" alt="boxes">
							</figure>	
						</div>

						<figure class="fabric-tablet">
							<img class="machine" src="{{ URL::to('/') }}/images/machine_tablet.png" alt="fabric">
							<img class="absolute gear-big rotating" src="{{ URL::to('/') }}/images/gearbig.png" alt="gear">
							<img class="absolute gear-small rotating" src="{{ URL::to('/') }}/images/gearsmall.png" alt="gear">
						</figure>						
						<div  class="wrapper-anim-move-tablet">
							<figure class="boxes-tablet moving">
								<img src="{{ URL::to('/') }}/images/boxes.png" alt="boxes">
							</figure>	
						</div>
						
						
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
						@if($lang == 'en')
							<h1 class="MainAbout-main">who we are</h1>			
							<h4 class="MainAbout-sub">3WV Group as a company</h4>
							<p class="MainAbout-content">3WV is the most convenient multi-faceted and international web marketing agency for you. With more than fifteen years of experience on bringing success to our clients, we are unique because we understand that the technical value is just as important as the aesthetical one, and the message is as vital as the way you deliver it. Winner of numerous national and international awards, 3WV is known as one of the most diversified companies in its field.</p>
							<p class="MainAbout-content">
							We are worldwide communicators that embrace the internet and all its possibilities as the medium to achieve what our clients need, regardless of where they are located.
							</p>
							<p class="MainAbout-content">
								Our team has the best system engineers and the most creative designers, advertisers, marketing specialists and writters who work together in order to conceptualize, plan, execute and deliver winning and endearing digital and web marketing campaigns. 
							</p>
							<p class="MainAbout-content special-title">
								We believe that technology is the greatest tool to reach the global audience.
							</p>
						@endif

						@if($lang == 'es')
							<h1 class="MainAbout-main">Quiénes somos</h1>			
							<h4 class="MainAbout-sub">3WV Group como empresa</h4>
							<p class="MainAbout-content">3WV Group es la agencia de mercadeo web de presencia internacional más conveniente para impulsar tu negocio. Con más de quince años de experiencia haciendo exitosos a nuestros clientes. Ganadora de numerosos premios nacionales e internacionales, 3WV es reconocida como una de las compañías más diversificadas dentro de su área.</p>
							<p class="MainAbout-content">
							Somos profesionales que asumimos el Internet y todas sus posibilidades como el medio para lograr lo que nuestros clientes necesitan, sin importar dónde se encuentren.
							</p>
							<p class="MainAbout-content">
								Nuestro equipo está conformado por los mejores ingenieros de sistema, los diseñadores, publicistas, especialistas en mercadeo y redactores creativos; quienes trabajan en conjunto para conceptualizar, planificar, ejecutar y lanzar campañas de mercadeo digitales altamente atractivas, diferentes e innovadoras.
							</p>
							<p class="MainAbout-content special-title">
								Creemos en la tecnología como la mejor herramienta para comunicarse con el mundo.
							</p>
						@endif

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
						@if($lang == 'en')
							<h1 class="MainChoose-main">how we think</h1>			
							<h4 class="MainChoose-sub">3WV Group philosophy</h4>
							
							<div class="col-md-4 wrapper-objectives">
								<figure class="MainChoose-objectives wow slideInLeft">
									<img src="{{ URL::to('/') }}/images/objectives.png" alt="objectives">
								</figure>
								<figure class="MainChoose-objectives-web wow slideInDown" data-wow-offset="300">
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
							</div>
							
							<div class="col-md-4 wrapper-vision">
								<figure class="MainChoose-objectives wow slideInLeft">
									<img src="{{ URL::to('/') }}/images/vision.png" alt="vision">
								</figure>

								<figure class="MainChoose-objectives-web wow slideInDown" data-wow-offset="400" data-wow-duration="1s">
									<img src="{{ URL::to('/') }}/images/vision.png" alt="vision">
								</figure>

								<h2 class="MainChoose-objectives-title">vision</h2>

								<p class="MainChoose-objectives-subtitle">At 3WV, we want to become the first resource for small, medium and large size companies/businesses that are looking to expand themselves by means of pioneering digital marketing campaigns for Latin-American and US markets. As well, for those clients demanding excellence in services related to consulting, e-business and IT integrated solutions.</p>

							</div>
							
							<div class="col-md-4 wrapper-mission">
								<figure class="MainChoose-objectives wow slideInLeft">
									<img src="{{ URL::to('/') }}/images/mission.png" alt="mission">
								</figure>

								<figure class="MainChoose-objectives-web wow slideInDown" data-wow-offset="450">
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
						@endif

						@if($lang == 'es')
							<h1 class="MainChoose-main">Cómo pensamos</h1>			
							<h4 class="MainChoose-sub">Filosofía 3WV Group</h4>
							
							<div class="col-md-4 wrapper-objectives">
								<figure class="MainChoose-objectives wow slideInLeft">
									<img src="{{ URL::to('/') }}/images/objectives.png" alt="objectives">
								</figure>
								<figure class="MainChoose-objectives-web wow slideInDown" data-wow-offset="300">
									<img src="{{ URL::to('/') }}/images/objectives.png" alt="objectives">
								</figure>

								<h2 class="MainChoose-objectives-title">Objetivos</h2>

								<ul class="MainChoose-objectives-list">
									<li>Ofrecer las estrategias de mercadeo digital más atractivas y efectivas, específicamente concebidas, diseñadas y basadas en el presupuesto, estilo y propósito de la empresa de nuestros clientes.</li>
									<li>Proveer un amplio rango de servicios de TI (Tecnología de Información).</li>
									<li>Mantener los más altos estándares de calidad.</li>
									<li>Continuar fortaleciendo nuestro equipo de profesionales altamente capacitado.</li>
								</ul>

								<p class="MainChoose-objectives-subtitle">
									Queremos maximizar el potencial de tu negocio e integrarlo al mercado de una forma más moderna.
								</p>	
							</div>
							
							<div class="col-md-4 wrapper-vision">
								<figure class="MainChoose-objectives wow slideInLeft">
									<img src="{{ URL::to('/') }}/images/vision.png" alt="vision">
								</figure>

								<figure class="MainChoose-objectives-web wow slideInDown" data-wow-offset="400" data-wow-duration="1s">
									<img src="{{ URL::to('/') }}/images/vision.png" alt="vision">
								</figure>

								<h2 class="MainChoose-objectives-title">Visión</h2>

								<p class="MainChoose-objectives-subtitle">En 3WV buscamos crecer hasta convertirnos en la primera opción para toda pequeña, mediana y gran empresa, que busque expandirse a través de innovadoras campañas digitales para el mercado Latino-Americano y Norte-Americano, de igual forma para aquellos clientes que buscan excelencia en servicios relacionados con consultoría, negocio/comercio electrónico y soluciones de TI integrales.</p>

							</div>
							
							<div class="col-md-4 wrapper-mission">
								<figure class="MainChoose-objectives wow slideInLeft">
									<img src="{{ URL::to('/') }}/images/mission.png" alt="mission">
								</figure>

								<figure class="MainChoose-objectives-web wow slideInDown" data-wow-offset="450">
									<img src="{{ URL::to('/') }}/images/mission.png" alt="mission">
								</figure>

								<h2 class="MainChoose-objectives-title">Misión</h2>						

								<p class="MainChoose-objectives-subtitle">
									En 3WV Group desarrollamos y ejecutamos exitosas estrategias de mercadeo digital y soluciones de tecnología de información, mediante los diseños más innovadores y llamativos; a través de sofisticadas técnicas de ingeniería que son amigables al usuario y útiles para nuestros clientes. Dichas aplicaciones están elaboradas a la medida de sus necesidades, para poder asistirles eficazmente durante el proceso de alcanzar sus metas de negocio.
								</p>

								<p class="MainChoose-objectives-subtitle">
									Nosotros escuchamos, creamos y brindamos las estrategias y soluciones más creativas a nuestros clientes, para que ellos puedan llegar al éxito.
								</p>
							</div>
						@endif

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
						@if($lang == 'en')
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

							<ul class="MainService-list-web">						
								<li>
									Digital Marketing.							
									
								</li>
								<li>Websites and web applications.
									
								</li>
								<li>Social Media and Community Management.
									
								</li>
								<li>Graphic Design.
									
								</li>
								<li>Multimedia.
									
								</li>
							</ul>
							<div class="box-service-content marketing" id="marketing">
								<h3>Digital Marketing</h3>
								<ul>
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
							</div>
							<div class="box-service-content web" id="web">
								<h3>Websites and web applications</h3>
								<ul>
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
							</div>
							<div class="box-service-content community" id="community">
								<h3>Social Media and Community Management</h3>
								<ul>
									<li>Development and implementation of social media strategies.</li>
									<li>Planning, designing and posting content in social media.</li>
									<li>Monitoring of actions and activities to measure influence in audiences.</li>
									<li>Drafting, designing, and posting content from clients and related content in websites and/or blogs.</li>
									<li>Organization and management of contests and drafts on social media.</li>
									<li>Preparing reports of results.</li>
								</ul>
							</div>
							<div class="box-service-content design" id="design">
								<h3>Graphic Design</h3>
								<ul>
									<li>Graphic Identity.</li>
									<li>Design and redesign of logos.</li>
									<li>Digital Web presence.</li>
									<li>Cards and stationery.</li>
									<li>Brochures, triptychs, catalogs, newsletters, magazines.</li>
									<li>Packaging and Labels.</li>
									<li>Signs.</li>
									<li>Illustrations.</li>
								</ul>
							</div>
							<div class="box-service-content multimedia" id="multimedia">
								<h3>Multimedia</h3>
								<ul>
									<li>Multimedia Applications..</li>
									<li>Electronic cards (e-cards).</li>
									<li>Interactive CDs.</li>
									<li>3D Animations.</li>
									<li>Online learning (e-learning).</li>
									<li>Video.</li>
								</ul>
							</div>
						@endif

						@if($lang == 'es')
							<h1 class="MainService-main">Qué ofrecemos</h1>			
							<h4 class="MainService-sub">Nuestros servicios</h4>

							<ul class="MainService-list">
								<li>
									Mercadeo Digital.								
									<ul style="display:none;">
										<li>Planificación y ejecución de campañas de mercadeo y publicidad en medios digitales.</li>
										<li>Envíos de listas de correo.</li>
										<li>Soluciones para celulares, tabletas y otros dispositivos móviles.</li>
										<li>Diseño, desarrollo y manejo personalizado de Bases de Datos.</li>
										<li>Manejo de pautas publicitarias en Google, Bing, Yahoo y Facebook.</li>
										<li>Mercadeo en Motores de Búsqueda (SEM).</li>
										<li>Manejo de Influenciadores en Redes Sociales.</li>
										<li>Sitios Web Promocionales (Mini Sites).</li>
										<li>Social Media y Community Management.</li>
										<li>Diseño Gráfico.</li>
									</ul>
								</li>
								<li>Sitios y Aplicaciones Web.
									<ul style="display:none;">
										<li>Desarrollo de propuestas y anteproyectos.</li>
										<li>Arquitectura del sistema y sus  componentes.</li>
										<li>Diseño gráfico.</li>
										<li>Programación.</li>
										<li>Creación de prototipo y lanzamiento al mercado.</li>
										<li>Mantenimiento, soporte y ayuda.</li>
										<li>Aplicaciones para la web.</li>
										<li>Optimización de Motores de Búsqueda (SEO).</li>
										<li>Desarrollo y Configuración de Sistemas de Administración de Contenido (CMS).</li>
										<li>Desarrollo de Aplicaciones de e-Commerce y e-Business.</li>
										<li>Intranets y Extranets.</li>
									</ul>
								</li>
								<li>Social Media y Community Management
									<ul style="display:none;">
										<li>Desarrollo e implementación de estrategias en medios sociales.</li>
										<li>Planificación, diseño y publicación de contenidos en medios sociales.</li>
										<li>Monitorización de todas las acciones y actividades para medir la influencia en el público.</li>
										<li>Redacción, diseño y publicación de contenidos de la marca y relacionados con ella.</li>
										<li>Organización y gestión de concursos y sorteos en medios sociales.</li>
										<li>Preparación de informes de resultados.</li>
									</ul>
								</li>
								<li>Diseño Gráfico
									<ul style="display:none;">
										<li>Identidad gráfica.</li>
										<li>Diseño y rediseño de logos.</li>
										<li>Presencia digital en la Web.</li>
										<li>Tarjetas de presentación y papelería.</li>
										<li>Brochures, trípticos, catálogos, boletines, revistas.</li>
										<li>Empaques y etiquetas.</li>
										<li>Señales.</li>
										<li>Ilustraciones.</li>
									</ul>
								</li>
								<li>Multimedia.
									<ul style="display:none;">
										<li>Aplicaciones Multimedia.</li>
										<li>Tarjetas electrónicas (e-cards).</li>
										<li>CDs interactivos.</li>
										<li>Animaciones 3D.</li>
										<li>Aprendizaje en línea (e-learning).</li>
										<li>Video.</li>
									</ul>
								</li>
							</ul>


							<ul class="MainService-list-web">						
								<li>
									Mercadeo Digital.	
								</li>
								<li>
									Sitios y Aplicaciones Web.									
								</li>
								<li>
									Social Media y Community Management									
								</li>
								<li>
									Diseño Gráfico									
								</li>
								<li>
									Multimedia.									
								</li>
							</ul>
							<div class="box-service-content marketing" id="marketing">
								<h3>Mercadeo Digital.</h3>
								<ul>
									<li>Planificación y ejecución de campañas de mercadeo y publicidad en medios digitales.</li>
									<li>Envíos de listas de correo.</li>
									<li>Soluciones para celulares, tabletas y otros dispositivos móviles.</li>
									<li>Diseño, desarrollo y manejo personalizado de Bases de Datos.</li>
									<li>Manejo de pautas publicitarias en Google, Bing, Yahoo y Facebook.</li>
									<li>Mercadeo en Motores de Búsqueda (SEM).</li>
									<li>Manejo de Influenciadores en Redes Sociales.</li>
									<li>Sitios Web Promocionales (Mini Sites).</li>
									<li>Social Media y Community Management.</li>
									<li>Diseño Gráfico.</li>
								</ul>
							</div>
							<div class="box-service-content web" id="web">
								<h3>Sitios y Aplicaciones Web.</h3>
								<ul>
									<li>Desarrollo de propuestas y anteproyectos.</li>
									<li>Arquitectura del sistema y sus  componentes.</li>
									<li>Diseño gráfico.</li>
									<li>Programación.</li>
									<li>Creación de prototipo y lanzamiento al mercado.</li>
									<li>Mantenimiento, soporte y ayuda.</li>
									<li>Aplicaciones para la web.</li>
									<li>Optimización de Motores de Búsqueda (SEO).</li>
									<li>Desarrollo y Configuración de Sistemas de Administración de Contenido (CMS).</li>
									<li>Desarrollo de Aplicaciones de e-Commerce y e-Business.</li>
									<li>Intranets y Extranets.</li>
								</ul>
							</div>
							<div class="box-service-content community" id="community">
								<h3>Social Media y Community Management</h3>
								<ul>
									<li>Desarrollo e implementación de estrategias en medios sociales.</li>
									<li>Planificación, diseño y publicación de contenidos en medios sociales.</li>
									<li>Monitorización de todas las acciones y actividades para medir la influencia en el público.</li>
									<li>Redacción, diseño y publicación de contenidos de la marca y relacionados con ella.</li>
									<li>Organización y gestión de concursos y sorteos en medios sociales.</li>
									<li>Preparación de informes de resultados.</li>
								</ul>
							</div>
							<div class="box-service-content design" id="design">
								<h3>Diseño Gráfico</h3>
								<ul>
									<li>Identidad gráfica.</li>
									<li>Diseño y rediseño de logos.</li>
									<li>Presencia digital en la Web.</li>
									<li>Tarjetas de presentación y papelería.</li>
									<li>Brochures, trípticos, catálogos, boletines, revistas.</li>
									<li>Empaques y etiquetas.</li>
									<li>Señales.</li>
									<li>Ilustraciones.</li>
								</ul>
							</div>
							<div class="box-service-content multimedia" id="multimedia">
								<h3>Multimedia</h3>
								<ul>
									<li>Aplicaciones Multimedia.</li>
									<li>Tarjetas electrónicas (e-cards).</li>
									<li>CDs interactivos.</li>
									<li>Animaciones 3D.</li>
									<li>Aprendizaje en línea (e-learning).</li>
									<li>Video.</li>
								</ul>
							</div>
						@endif												

					</div> 
				</div>
			</div>
			
		</div>		
	</div>
</div>

<div class="container-fluid" id="alliances">
	<div class="row">
		<div class="Background-alliance">

			<div class="bgAllianceTransparent" style="left:0em;" data-0="top:175em;" data-end="top:-80em"></div>
			<div class="bgAllianceSolid" style="left:2em;" data-0="top:175em;" data-end="top:-60em"></div>
			<div class="bgAllianceTransparent" style="left:4em;" data-0="top:170em;" data-end="top:-100em"></div>
			<div class="bgAllianceSolid" style="left:6em;" data-0="top:175em;" data-end="top:-50em"></div>
			<div class="bgAllianceTransparent" style="left:8em;" data-0="top:160em;" data-end="top:-20em"></div>

			<div class="bgAllianceTransparent" style="left:10em;" data-0="top:175em;" data-end="top:-80em"></div>
			<div class="bgAllianceSolid" style="left:12em;" data-0="top:175em;" data-end="top:-60em"></div>
			<div class="bgAllianceTransparent" style="left:14em;" data-0="top:170em;" data-end="top:-100em"></div>
			<div class="bgAllianceSolid" style="left:16em;" data-0="top:175em;" data-end="top:-50em"></div>
			<div class="bgAllianceTransparent" style="left:18em;" data-0="top:160em;" data-end="top:-20em"></div>
			<div class="bgAllianceSolid" style="left:20em;" data-0="top:160em;" data-end="top:-12em"></div>
			<div class="bgAllianceTransparent" style="left:22em;" data-0="top:160em;" data-end="top:-110em"></div>
			<div class="bgAllianceSolid" style="left:24em;" data-0="top:160em;" data-end="top:-55em"></div>
			<div class="bgAllianceTransparent" style="left:26em;" data-0="top:170em;" data-end="top:-75em"></div>
			<div class="bgAllianceSolid" style="left:28em;" data-0="top:170em;" data-end="top:-25em"></div>

			<div class="bgAllianceTransparent" style="left:30em;" data-0="top:175em;" data-end="top:-80em"></div>
			<div class="bgAllianceSolid" style="left:32em;" data-0="top:175em;" data-end="top:-60em"></div>
			<div class="bgAllianceTransparent" style="left:34em;" data-0="top:170em;" data-end="top:-100em"></div>
			<div class="bgAllianceSolid" style="left:36em;" data-0="top:175em;" data-end="top:-50em"></div>
			<div class="bgAllianceTransparent" style="left:38em;" data-0="top:160em;" data-end="top:-20em"></div>
			<div class="bgAllianceSolid" style="left:40em;" data-0="top:160em;" data-end="top:-12em"></div>
			<div class="bgAllianceTransparent" style="left:42em;" data-0="top:160em;" data-end="top:-110em"></div>
			<div class="bgAllianceSolid" style="left:44em;" data-0="top:160em;" data-end="top:-55em"></div>
			<div class="bgAllianceTransparent" style="left:46em;" data-0="top:170em;" data-end="top:-75em"></div>
			<div class="bgAllianceSolid" style="left:48em;" data-0="top:170em;" data-end="top:-25em"></div>

			<div class="bgAllianceTransparent" style="left:50em;" data-0="top:175em;" data-end="top:-80em"></div>
			<div class="bgAllianceSolid" style="left:52em;" data-0="top:175em;" data-end="top:-60em"></div>
			<div class="bgAllianceTransparent" style="left:54em;" data-0="top:170em;" data-end="top:-100em"></div>
			<div class="bgAllianceSolid" style="left:56em;" data-0="top:175em;" data-end="top:-50em"></div>
			<div class="bgAllianceTransparent" style="left:58em;" data-0="top:160em;" data-end="top:-20em"></div>
			<div class="bgAllianceSolid" style="left:60em;" data-0="top:160em;" data-end="top:-12em"></div>
			<div class="bgAllianceTransparent" style="left:62em;" data-0="top:160em;" data-end="top:-110em"></div>
			<div class="bgAllianceSolid" style="left:64em;" data-0="top:160em;" data-end="top:-55em"></div>
			<div class="bgAllianceTransparent" style="left:66em;" data-0="top:170em;" data-end="top:-75em"></div>
			<div class="bgAllianceSolid" style="left:68em;" data-0="top:170em;" data-end="top:-25em"></div>

			<div class="container">
				<div class="row">
					<div class="col-xs-12 MainAlliance">
						@if($lang == 'en')
							<h1 class="MainAlliance-main">alliances</h1>					
						@endif
						@if($lang == 'es')
							<h1 class="MainAlliance-main">alianzas</h1>					
						@endif
						<figure class="col-md-4 MainAlliance-partner wow slideInLeft">
							<img src="{{ URL::to('/') }}/images/partner1.png" alt="partner">
						</figure>

						<figure class="col-md-4 MainAlliance-partner wow slideInRight">
							<img src="{{ URL::to('/') }}/images/partner2.png" alt="partner">
						</figure>

						<figure class="col-md-4 MainAlliance-partner bottom wow slideInLeft">
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
						@if($lang == 'en')
							<h1 class="MainClients-main">clients</h1>					
						@endif
						@if($lang == 'es')
							<h1 class="MainClients-main">clientes</h1>					
						@endif
						<div class="banner">
							<a href="#" class="unslider-arrow prev"><img src="{{ URL::to('/') }}/images/prev.png" alt=""></a>
							<a href="#" class="unslider-arrow next"><img src="{{ URL::to('/') }}/images/next.png" alt=""></a>
						    <ul>
						        <li>
						        	<div class="container-fluid grid-clients-web">
						        		<div class="row lessright">
						        				<div class="col-md-12 content-clients">						        					
						        					<figure class="col-md-2 col-md-offset-1 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_13.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_15.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_17.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_19.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_21.png" alt=""></figure>						        											        					
						        				</div>        				
						        			
						        				<div class="col-md-12 content-clients">						        					
							        				<figure class="col-md-2 col-md-offset-1 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_35.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_37.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_39.png" alt=""></figure>
						        					<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_41.png" alt=""></figure>
						        					<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_43.png" alt=""></figure>
						        				</div>			        						
						        				
						        				<div class="col-md-12 content-clients">						        					
							        				<figure class="col-md-2 col-md-offset-1 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_57.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_59.png" alt=""></figure>	
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_61.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_63.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_65.png" alt=""></figure>	
						        				</div>				        				
						        			
						        		</div>
						        		
						        	</div>
						        </li>
						        <li>
						        	<div class="container-fluid grid-clients-web">
						        		<div class="row lessright">
						        				<div class="col-md-12 content-clients">						        					
						        					<figure class="col-md-2 col-md-offset-1 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-2_13.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-2_15.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-2_17.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-2_19.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-2_21.png" alt=""></figure>						        											        					
						        				</div>        				
						        			
						        				<div class="col-md-12 content-clients">						        					
							        				<figure class="col-md-2 col-md-offset-1 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-2_35.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-2_37.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-2_39.png" alt=""></figure>
						        					<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-2_41.png" alt=""></figure>
						        					<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-2_43.png" alt=""></figure>
						        				</div>			        						
						        				
						        				<div class="col-md-12 content-clients">						        					
							        				<figure class="col-md-2 col-md-offset-1 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-2_57.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-2_59.png" alt=""></figure>	
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-2_61.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-2_63.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-2_65.png" alt=""></figure>	
						        				</div>				        				
						        			
						        		</div>
						        		
						        	</div>
						        </li>

						        <li>
						        	<div class="container-fluid grid-clients-web">
						        		<div class="row lessright">
						        				<div class="col-md-12 content-clients">						        					
						        					<figure class="col-md-2 col-md-offset-1 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_12.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_13.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_15.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_19.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_21.png" alt=""></figure>						        											        					
						        				</div>        				
						        			
						        				<div class="col-md-12 content-clients">						        					
							        				<figure class="col-md-2 col-md-offset-1 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_35.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_37.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_39.png" alt=""></figure>
						        					<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_41.png" alt=""></figure>
						        					<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_43.png" alt=""></figure>
						        				</div>			        						
						        				
						        				<div class="col-md-12 content-clients">						        					
							        				<figure class="col-md-2 col-md-offset-1 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_57.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_59.png" alt=""></figure>	
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_61.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_63.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_65.png" alt=""></figure>	
						        				</div>				        				
						        			
						        		</div>
						        		
						        	</div>
						        </li>


						        <li>			        					
						        	<div class="container-fluid grid-clients-web">
						        		<div class="row lessright">
						        				<div class="col-md-12 content-clients">						        					
						        					<figure class="col-md-2 col-md-offset-1 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-4_13.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-4_15.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-4_17.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-4_19.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-4_21.png" alt=""></figure>						        											        					
						        				</div>        				
						        			
						        				<div class="col-md-12 content-clients">						        					
							        				<figure class="col-md-2 col-md-offset-1 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-4_35.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-4_37.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-4_39.png" alt=""></figure>
						        					<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-4_41.png" alt=""></figure>
						        					<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-4_43.png" alt=""></figure>
						        				</div>			        						
						        				
						        				<div class="col-md-12 content-clients">						        					
							        				<figure class="col-md-2 col-md-offset-1 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-4_57.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-4_59.png" alt=""></figure>	
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-4_61.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-4_63.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-4_65.png" alt=""></figure>	
						        				</div>				        				
						        			
						        		</div>
						        		
						        	</div>
						        </li>

						        <li>
						        	<div class="container-fluid grid-clients-web">
						        		<div class="row lessright">
						        				<div class="col-md-12 content-clients">						        					
						        					<figure class="col-md-2 col-md-offset-1 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-5_13.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-5_15.png" alt=""></figure>
							        				<figure class="col-md-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-5_17.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-5_19.png" alt=""></figure>
						        				</div>        				
						        			
						        				<div class="col-md-12 content-clients">						        					
							        				<figure class="col-md-4 col-md-offset-1 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-5_33.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-5_35.png" alt=""></figure>
							        				<figure class="col-md-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-5_37.png" alt=""></figure>
						        				</div>	
						        		</div>
						        		
						        	</div>
						        </li>
						        
						        
						    </ul>
						</div>

						<div class="banner-tablet">
							<a href="#" class="unslider-arrow prev"><img src="{{ URL::to('/') }}/images/prev.png" alt=""></a>
							<a href="#" class="unslider-arrow next"><img src="{{ URL::to('/') }}/images/next.png" alt=""></a>
						    <ul>
						        <li>
						        	<div class="container-fluid grid-clients-tablet">
						        		<div class="row lessright">
						        				<div class="col-md-12 content-clients">						        					
						        					<figure class="col-xs-4 col-md-offset-1 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_13.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_15.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_17.png" alt=""></figure>
						        				</div>        				
						        			
						        				<div class="col-md-12 content-clients">						        					
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_19.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_21.png" alt=""></figure>						        											        					
							        				<figure class="col-xs-4 col-md-offset-1 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_35.png" alt=""></figure>
						        				</div>			        						
						        				
						        				<div class="col-md-12 content-clients">						        					
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_37.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_39.png" alt=""></figure>
						        					<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_41.png" alt=""></figure>        					
						        				</div>
						        								        				
						        			
						        		</div>
						        		
						        	</div>
						        </li>
						        <li>
						        	<div class="container-fluid grid-clients-tablet">
						        		<div class="row lessright">
						        				<div class="col-md-12 content-clients">						        					
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_43.png" alt=""></figure>
							        				<figure class="col-xs-4 col-md-offset-1 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_57.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_59.png" alt=""></figure>								        				
						        				</div>	
						        				<div class="col-xs-12 content-clients">						        					
						        					<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_61.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_63.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_65.png" alt=""></figure>								        											        											        					
						        				</div>        				
						        			
						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-4 col-md-offset-1 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-2_13.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-2_15.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-2_17.png" alt=""></figure>							        				
						        				</div>
						        		</div>
						        		
						        	</div>
						        </li>

						        <li>
						        	<div class="container-fluid grid-clients-tablet">
						        		<div class="row lessright">
						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-2_19.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-2_21.png" alt=""></figure>
						        					<figure class="col-xs-4 col-md-offset-1 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-2_35.png" alt=""></figure>	
						        				</div>

						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-2_37.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-2_39.png" alt=""></figure>
						        					<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-2_41.png" alt=""></figure>
						        				</div>

						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-2_43.png" alt=""></figure>		        					
							        				<figure class="col-xs-4 col-md-offset-1 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-2_57.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-2_59.png" alt=""></figure>
						        				</div>     				
						        			
						        		</div>
						        		
						        	</div>
						        </li>


						        <li>
									<div class="container-fluid grid-clients-tablet">
						        		<div class="row lessright">
						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-2_61.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-2_63.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-2_65.png" alt=""></figure>
						        				</div>

						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-md-2 col-md-offset-1 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_12.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_13.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_15.png" alt=""></figure>
						        				</div>

						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_19.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_21.png" alt=""></figure>
						        					<figure class="col-md-2 col-md-offset-1 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_35.png" alt=""></figure>
						        				</div> 
						        		</div>
						        	</div>			        					
						        	
						        </li>

						        <li>
						        	<div class="container-fluid grid-clients-tablet">
						        		<div class="row lessright">
						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-2_61.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-2_63.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-2_65.png" alt=""></figure>
						        				</div>

						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-md-2 col-md-offset-1 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_12.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_13.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_15.png" alt=""></figure>
						        				</div>

						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_19.png" alt=""></figure>
							        				<figure class="col-md-2 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_21.png" alt=""></figure>
						        					<figure class="col-md-2 col-md-offset-1 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_35.png" alt=""></figure>
						        				</div> 
						        		</div>
						        	</div>						        	
						        </li>						        
						    </ul>
						</div>

						<div class="banner-mobile">
							<a href="#" class="unslider-arrow prev"><img src="{{ URL::to('/') }}/images/prev.png" alt=""></a>
							<a href="#" class="unslider-arrow next"><img src="{{ URL::to('/') }}/images/next.png" alt=""></a>
						    <ul>
						        <li>
						        	<div class="container-fluid grid-clients">
						        		<div class="row lessright">
						        				<div class="col-xs-12 content-clients">						        					
						        					<figure class="col-xs-6 client-wrapper"><img src="{{ URL::to('/') }}/images/clients/client1_mov.png" alt=""></figure>
							        				<figure class="col-xs-6 client-wrapper"><img src="{{ URL::to('/') }}/images/clients/client2_mov.png" alt=""></figure>						        					
						        				</div>        				
						        			
						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-6 client-wrapper"><img src="{{ URL::to('/') }}/images/clients/client3_mov.png" alt=""></figure>
							        				<figure class="col-xs-6 client-wrapper"><img src="{{ URL::to('/') }}/images/clients/client4_mov.png" alt=""></figure>
						        				</div>			        						
						        				
						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-6 client-wrapper"><img src="{{ URL::to('/') }}/images/clients/client5_mov.png" alt=""></figure>
							        				<figure class="col-xs-6 client-wrapper"><img src="{{ URL::to('/') }}/images/clients/client6_mov.png" alt=""></figure>	
						        				</div>	
						        		</div>
						        	</div>	
						        </li>
						        <li>
						        	<div class="container-fluid grid-clients">
						        		<div class="row lessright">
						        				<div class="col-xs-12 content-clients">						        					
						        					<figure class="col-xs-6 client-wrapper"><img src="{{ URL::to('/') }}/images/clients/client7_mov.png" alt=""></figure>
							        				<figure class="col-xs-6 client-wrapper"><img src="{{ URL::to('/') }}/images/clients/client8_mov.png" alt=""></figure>
						        				</div>        				
						        			
						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-6 client-wrapper"><img src="{{ URL::to('/') }}/images/clients/client9_mov.png" alt=""></figure>
							        				<figure class="col-xs-6 client-wrapper"><img src="{{ URL::to('/') }}/images/clients/client10_mov.png" alt=""></figure>
						        				</div>			        						
						        				
						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-6 client-wrapper"><img src="{{ URL::to('/') }}/images/clients/client11_mov.png" alt=""></figure>
							        				<figure class="col-xs-6 client-wrapper"><img src="{{ URL::to('/') }}/images/clients/client12_mov.png" alt=""></figure>	
						        				</div>				        				
						        			
						        		</div>
						        		
						        	</div>
						        </li>

						        <li>
						        	<div class="container-fluid grid-clients">
						        		<div class="row lessright">
						        				<div class="col-xs-12 content-clients">						        					
						        					<figure class="col-xs-6 client-wrapper"><img src="{{ URL::to('/') }}/images/clients/client13_mov.png" alt=""></figure>
							        				<figure class="col-xs-6 client-wrapper"><img src="{{ URL::to('/') }}/images/clients/client14_mov.png" alt=""></figure>
						        				</div>        				
						        			
						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-6 client-wrapper"><img src="{{ URL::to('/') }}/images/clients/client15_mov.png" alt=""></figure>
							        				<figure class="col-xs-6 client-wrapper"><img src="{{ URL::to('/') }}/images/clients/client16_mov.png" alt=""></figure>
						        				</div>			        						
						        				
						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-6 client-wrapper"><img src="{{ URL::to('/') }}/images/clients/client17_mov.png" alt=""></figure>
							        				<figure class="col-xs-6 client-wrapper"><img src="{{ URL::to('/') }}/images/clients/client18_mov.png" alt=""></figure>	
						        				</div>				        				
						        			
						        		</div>
						        		
						        	</div>
						        </li>				        
						        
						        
						    </ul>
						</div>
						

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
						@if($lang == 'en')
							<h1 class="MainPortfolio-main">portfolio</h1>
						@endif
						@if($lang == 'es')
							<h1 class="MainPortfolio-main">portafolio</h1>
						@endif

						<ul class="wrapper-buttons-filter">
							<li><a href="" data-category="web"><span class="icon-sphere"></span></a></li>
							<li><a href="" data-category="social"><span class="icon-bubbles"></span></a></li>
							<li><a href="" data-category="paper"><span class="icon-profile"></span></a></li>
							<li><a href="" data-category="video"><span class="icon-film"></span></a></li>
						</ul>
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">							  

							  <!-- Wrapper for slides -->
							  <div class="carousel-inner" role="listbox">
							    <div class="item active">
							      <div class="gallery-portfolio col-12-md">
										<figure class="col-md-3 content-img-portfolio video">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/1.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModal1" data-target="#myModal1"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio">
												<img src="{{ URL::to('/') }}/images/multimedia.png" alt="" />
											</div>
											<div id="myModal1" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/1.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-md-3 content-img-portfolio social">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/2.jpg" alt="" />
											<div class="overlay-portfolio">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModal2" data-target="#myModal2"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio">
												<img src="{{ URL::to('/') }}/images/social.png" alt="" />									
											</div>
											<div id="myModal2" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/2.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-md-3 content-img-portfolio paper">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/3.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModal3" data-target="#myModal3"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio">
												<img src="{{ URL::to('/') }}/images/paper.png" alt="" />
											</div>
											<div id="myModal3" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/3.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-md-3 content-img-portfolio web">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/4.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModal4" data-target="#myModal4"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio">
												<img src="{{ URL::to('/') }}/images/web.png" alt="" />
											</div>
											<div id="myModal4" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/4.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										
										
										<figure class="col-md-3 content-img-portfolio web">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/5.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModal5" data-target="#myModal5"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio">
												<img src="{{ URL::to('/') }}/images/web.png" alt="" />
											</div>
											<div id="myModal5" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/5.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-md-3 content-img-portfolio web">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/6.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModal6" data-target="#myModal6"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio">
												<img src="{{ URL::to('/') }}/images/web.png" alt="" />
											</div>
											<div id="myModal6" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/6.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-md-3 content-img-portfolio video">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/7.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModal7" data-target="#myModal7"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio">
												<img src="{{ URL::to('/') }}/images/multimedia.png" alt="" />
											</div>
											<div id="myModal7" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/7.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-md-3 content-img-portfolio paper">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/8.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModal8" data-target="#myModal8"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio">
												<img src="{{ URL::to('/') }}/images/paper.png" alt="" />
											</div>
											<div id="myModal8" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/8.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>

										<figure class="col-md-3 content-img-portfolio social">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/9.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModal9" data-target="#myModal9"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio">
												<img src="{{ URL::to('/') }}/images/social.png" alt="" />
											</div>
											<div id="myModal9" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/9.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-md-3 content-img-portfolio social">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/10.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModal10" data-target="#myModal10"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio">
												<img src="{{ URL::to('/') }}/images/social.png" alt="" />
											</div>
											<div id="myModal10" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/10.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-md-3 content-img-portfolio paper">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/11.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModal11" data-target="#myModal11"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio">
												<img src="{{ URL::to('/') }}/images/paper.png" alt="" />
											</div>
											<div id="myModal11" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/11.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-md-3 content-img-portfolio paper">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/12.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModal12" data-target="#myModal12"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio">
												<img src="{{ URL::to('/') }}/images/paper.png" alt="" />
											</div>
											<div id="myModal12" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/12.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
								  </div>
							    </div>
							    <div class="item">
							      <div class="gallery-portfolio col-12-md">
										<figure class="col-md-3 content-img-portfolio">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/13.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModal13" data-target="#myModal13"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio">
												<img src="{{ URL::to('/') }}/images/multimedia.png" alt="" />
											</div>
											<div id="myModal13" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/13.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-md-3 content-img-portfolio social">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/14.jpg" alt="" />
											<div class="overlay-portfolio">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModal14" data-target="#myModal14"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio">
												<img src="{{ URL::to('/') }}/images/social.png" alt="" />									
											</div>
											<div id="myModal14" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/14.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-md-3 content-img-portfolio">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/15.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModal15" data-target="#myModal15"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio">
												<img src="{{ URL::to('/') }}/images/paper.png" alt="" />
											</div>
											<div id="myModal15" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/15.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-md-3 content-img-portfolio web">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/16.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModa16" data-target="#myModa16"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio">
												<img src="{{ URL::to('/') }}/images/web.png" alt="" />
											</div>
											<div id="myModal16" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/16.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										
										
										<figure class="col-md-3 content-img-portfolio web">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/17.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModal17" data-target="#myModal17"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio">
												<img src="{{ URL::to('/') }}/images/web.png" alt="" />
											</div>
											<div id="myModal17" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/17.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-md-3 content-img-portfolio web">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/18.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModal18" data-target="#myModal18"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio">
												<img src="{{ URL::to('/') }}/images/web.png" alt="" />
											</div>
											<div id="myModal18" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/18.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-md-3 content-img-portfolio">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/19.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModal19" data-target="#myModal19"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio">
												<img src="{{ URL::to('/') }}/images/multimedia.png" alt="" />
											</div>
											<div id="myModal19" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/19.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-md-3 content-img-portfolio">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/20.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModal20" data-target="#myModal20"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio">
												<img src="{{ URL::to('/') }}/images/paper.png" alt="" />
											</div>
											<div id="myModal20" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/20.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>

										<figure class="col-md-3 content-img-portfolio social">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/21.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModal21" data-target="#myModal21"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio">
												<img src="{{ URL::to('/') }}/images/social.png" alt="" />
											</div>
											<div id="myModal21" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/21.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-md-3 content-img-portfolio social">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/22.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModal22" data-target="#myModal22"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio">
												<img src="{{ URL::to('/') }}/images/social.png" alt="" />
											</div>
											<div id="myModal22" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/22.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-md-3 content-img-portfolio">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/23.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModal23" data-target="#myModal23"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio">
												<img src="{{ URL::to('/') }}/images/paper.png" alt="" />
											</div>
											<div id="myModal23" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/23.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-md-3 content-img-portfolio">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/27.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModal27" data-target="#myModal27"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio">
												<img src="{{ URL::to('/') }}/images/paper.png" alt="" />
											</div>
											<div id="myModal27" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/27.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
								  </div>
							    </div>
							    ...
							  </div>

							  <!-- Controls -->
							  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>
						</div>				

						
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
					<div class="col-xs-12 col-md-12 MainContact">
						@if($lang == 'en')
							<h1 class="MainContact-main">contacts</h1>					
							<form action="/contact" method="POST" class="form-horizontal MainContact-form">
							  <input type="hidden" name="_token" value="{{ csrf_token() }}">
							  <div class="form-group ">
							    <label for="inputName" class="col-xs-3 control-label">Name</label>
							    <div class="col-xs-9 margin-input">
							      <input type="text" name="name" class="form-control input-tablet" id="inputName">
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputEmail" class="col-xs-3 control-label">Email</label>
							    <div class="col-xs-9 margin-input">
							      <input type="email" name="email" class="form-control input-tablet" id="inputEmail">
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputMessage" class="col-xs-3 control-label">Message</label>
							    <div class="col-xs-9 margin-input">
							       <textarea class="form-control input-areatablet" name="message" rows="3" id="inputMessage"></textarea>
							    </div>
							  </div>						
							</form>
							<div class="form-group">
							    <div class="col-xs-12 MainContact-button-send">
							      <button type="submit" class="btn btn-default">Send</button>
							    </div>
							</div>

							 @if($errors->has())
							    <div class='alert alert-danger' style="margin-top:6em;">
							        @foreach ($errors->all('<p>:message</p>') as $message)
							            {!! $message !!}
							        @endforeach
							    </div>
							@endif			
							
							@if (Session::has('message'))            
							    <div class="alert alert-success alert-dismissable" style="margin-top:6em;">
							      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							      <h4>  <i class="icon fa fa-check"></i> {{ Session::get('message') }}</h4>              
							    </div>
							@endif


							<div class="col-xs-12 col-md-12 content-address lesspadding">
								<div class="col-xs-4">
									<h4 class="address-title center">caracas - venezuela</h4>
									
									<address class="address-content">
									    Master; (+58212) 991.3376 / 716.5890<br>
									    Address: Av. Río de Janeiro, Edif. Arizano.<br>
									    Caracas 1061<br>
									    Email: info@3wv.net
									 </address>
								</div>
								<div class="col-xs-4">
									<h4 class="address-title center">miami - usa</h4>
									
									<address class="address-content">
									    Master: (+1) 786.347.6274 / 786.863.8094<br>
									    Address: 7715 NW 48th street, Suite 390 Miami, Fl <br>
									    33166<br>
									    Email: info@3wv.net
									 </address>
								</div>
								<div class="col-xs-4">
									<h4 class="address-title center">san jose - costa rica</h4>
									
									<address class="address-content">
									    Master: (+506) 2248.34.85<br>
									    Address: Av. Paseo Colón, Torre Mercedes,  <br>
									    Piso 7,<br>
									    San José<br>
									    Email: ventas@3wv.net
									 </address>
								</div>
							</div>
						@endif

						@if($lang == 'es')
							<h1 class="MainContact-main">contactos</h1>
							<form action="/contact" method="POST" class="form-horizontal MainContact-form">
							  <input type="hidden" name="_token" value="{{ csrf_token() }}">
							  <div class="form-group ">
							    <label for="inputName" class="col-xs-3 control-label">Nombre</label>
							    <div class="col-xs-9 margin-input">
							      <input type="text" name="name" class="form-control input-tablet" id="inputName">
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputEmail" class="col-xs-3 control-label">Correo</label>
							    <div class="col-xs-9 margin-input">
							      <input type="email" name="email" class="form-control input-tablet" id="inputEmail">
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputMessage" class="col-xs-3 control-label">Mensaje</label>
							    <div class="col-xs-9 margin-input">
							       <textarea class="form-control input-areatablet" name="message" rows="3" id="inputMessage"></textarea>
							    </div>
							  </div>						
							 
							<div class="form-group">
							    <div class="col-xs-12 MainContact-button-send">
							      <button type="submit" class="btn btn-default">Enviar</button>
							    </div>
							</div>
							</form>
							
							@if($errors->has())
							    <div class='alert alert-danger' style="margin-top:6em;">
							        @foreach ($errors->all('<p>:message</p>') as $message)
							            {!! $message !!}
							        @endforeach
							    </div>
							@endif			
							
							@if (Session::has('message'))            
							    <div class="alert alert-success alert-dismissable" style="margin-top:6em;">
							      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							      <h4>  <i class="icon fa fa-check"></i> {{ Session::get('message') }}</h4>              
							    </div>
							@endif

							<div class="col-xs-12 col-md-12 content-address lesspadding">
								<div class="col-xs-4">
									<h4 class="address-title center">caracas - venezuela</h4>
									
									<address class="address-content">
									    Master; (+58212) 991.3376 / 716.5890<br>
									    Dirección: Av. Río de Janeiro, Edif. Arizano.<br>
									    Caracas 1061<br>
									    Email: info@3wv.net
									 </address>
								</div>
								<div class="col-xs-4">
									<h4 class="address-title center">miami - usa</h4>
									
									<address class="address-content">
									    Master: (+1) 786.347.6274 / 786.863.8094<br>
									    Dirección: 7715 NW 48th street, Suite 390 Miami, Fl <br>
									    33166<br>
									    Email: info@3wv.net
									 </address>
								</div>
								<div class="col-xs-4">
									<h4 class="address-title center">san jose - costa rica</h4>
									
									<address class="address-content">
									    Master: (+506) 2248.34.85<br>
									    Dirección: Av. Paseo Colón, Torre Mercedes,  <br>
									    Piso 7,<br>
									    San José<br>
									    Email: ventas@3wv.net
									 </address>
								</div>
							</div>					
						@endif


						

					</div> 
				</div>
			</div>
			
		</div>		
	</div>
</div>
@endsection

@section('footerscript')
<script>
	window.setTimeout(function() {
	    $(".alert-danger").fadeTo(500, 0).slideUp(500, function(){
	        $(this).remove(); 
	    });
	}, 5000);

	window.setTimeout(function() {
	    $(".alert-success").fadeTo(500, 0).slideUp(500, function(){
	        $(this).remove(); 
	    });
	}, 5000);
</script>
@endsection