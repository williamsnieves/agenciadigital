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

						<figure class="fabric-mobile">
							<img class="machine" src="{{ URL::to('/') }}/images/machine_tablet.png" alt="fabric">
							<img class="absolute gear-big rotating" src="{{ URL::to('/') }}/images/gearbig.png" alt="gear">
							<img class="absolute gear-small rotating" src="{{ URL::to('/') }}/images/gearsmall.png" alt="gear">
						</figure>						
						<div  class="wrapper-anim-move-mobile">
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
						@foreach($about as $aboutdata)
							@if($lang == 'en')
								<h1 class="MainAbout-main">{{$aboutdata->title_en}}</h1>			
								<h4 class="MainAbout-sub">{{$aboutdata->subtitle_en}}</h4>
								{{!! $aboutdata->content_en !!}}
								<p class="MainAbout-content special-title">
									{{$aboutdata->speciatitle_en}}
								</p>
							@endif

							@if($lang == 'es')
								<h1 class="MainAbout-main">{{$aboutdata->title}}</h1>			
								<h4 class="MainAbout-sub">{{$aboutdata->subtitle}}</h4>
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
						@endforeach

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
							<h1 class="MainChoose-main">{{$choose[0]->title_en}}</h1>			
							<h4 class="MainChoose-sub">{{$choose[0]->subtitle_en}}</h4>
							
							<div class="col-md-4 wrapper-objectives">
								<figure class="MainChoose-objectives wow slideInLeft">
									<img src="{{ URL::to('/') }}/images/objectives.png" alt="objectives">
								</figure>
								<figure class="MainChoose-objectives-web wow slideInDown">
									<img src="{{ URL::to('/') }}/images/objectives.png" alt="objectives">
								</figure>

								<h2 class="MainChoose-objectives-title">{{$choose[0]->title_en_node}}</h2>
								
								{!! $choose[0]->description_en !!}
							</div>
							
							<div class="col-md-4 wrapper-vision">
								<figure class="MainChoose-objectives wow slideInLeft">
									<img src="{{ URL::to('/') }}/images/vision.png" alt="vision">
								</figure>

								<figure class="MainChoose-objectives-web wow slideInDown">
									<img src="{{ URL::to('/') }}/images/vision.png" alt="vision">
								</figure>

								<h2 class="MainChoose-objectives-title">{{$choose[1]->title_en_node}}</h2>

								{!! $choose[1]->description_en !!}

							</div>
							
							<div class="col-md-4 wrapper-mission">
								<figure class="MainChoose-objectives wow slideInLeft">
									<img src="{{ URL::to('/') }}/images/mission.png" alt="mission">
								</figure>

								<figure class="MainChoose-objectives-web wow slideInDown">
									<img src="{{ URL::to('/') }}/images/mission.png" alt="mission">
								</figure>

								<h2 class="MainChoose-objectives-title">{{$choose[2]->title_en_node}}</h2>						
								{!! $choose[2]->description_en !!}
								
							</div>
						@endif

						@if($lang == 'es')
							<h1 class="MainChoose-main">{{$choose[0]->title}}</h1>			
							<h4 class="MainChoose-sub">{{$choose[0]->subtitle}}</h4>
							
							<div class="col-md-4 wrapper-objectives">
								<figure class="MainChoose-objectives wow slideInLeft">
									<img src="{{ URL::to('/') }}/images/objectives.png" alt="objectives">
								</figure>
								<figure class="MainChoose-objectives-web wow slideInDown">
									<img src="{{ URL::to('/') }}/images/objectives.png" alt="objectives">
								</figure>

								<h2 class="MainChoose-objectives-title">{{$choose[0]->title_node}}</h2>

								{!! $choose[0]->description !!}	
							</div>
							
							<div class="col-md-4 wrapper-vision">
								<figure class="MainChoose-objectives wow slideInLeft">
									<img src="{{ URL::to('/') }}/images/vision.png" alt="vision">
								</figure>

								<figure class="MainChoose-objectives-web wow slideInDown">
									<img src="{{ URL::to('/') }}/images/vision.png" alt="vision">
								</figure>

								<h2 class="MainChoose-objectives-title">{{$choose[1]->title_node}}</h2>

								{!! $choose[1]->description !!}

							</div>
							
							<div class="col-md-4 wrapper-mission">
								<figure class="MainChoose-objectives wow slideInLeft">
									<img src="{{ URL::to('/') }}/images/mission.png" alt="mission">
								</figure>

								<figure class="MainChoose-objectives-web wow slideInDown">
									<img src="{{ URL::to('/') }}/images/mission.png" alt="mission">
								</figure>

								<h2 class="MainChoose-objectives-title">{{$choose[2]->title_node}}</h2>						

								{!! $choose[2]->description !!}
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
							<h1 class="MainService-main">{{$service[0]->title_en}}</h1>			
							<h4 class="MainService-sub">{{$service[0]->subtitle_en}}</h4>

							<ul class="MainService-list">
								@foreach($service as $servicedata)
									<li>
										{{$servicedata->title_en_node}}	
										{!! $servicedata->description_en !!}	
										
									</li>
								@endforeach
							</ul>

							<ul class="MainService-list-web">						
								@foreach($service as $servicedata)
									<li>
										{{$servicedata->title_en_node}}
									</li>
								@endforeach
							</ul>
							<div class="box-service-content marketing" id="marketing">
								<h3>{{$service[0]->title_en_node}}</h3>
								{!! $service[0]->description_en !!}								
							</div>
							<div class="box-service-content web" id="web">
								<h3>{{$service[1]->title_en_node}}</h3>
								{!! $service[1]->description_en !!}
							</div>
							<div class="box-service-content community" id="community">
								<h3>{{$service[2]->title_en_node}}</h3>
								{!! $service[2]->description_en !!}
							</div>
							<div class="box-service-content design" id="design">
								<h3>{{$service[3]->title_en_node}}</h3>
								{!! $service[3]->description_en !!}
							</div>
							<div class="box-service-content multimedia" id="multimedia">
								<h3>{{$service[4]->title_en_node}}</h3>
								{!! $service[4]->description_en !!}
							</div>
						@endif

						@if($lang == 'es')
							<h1 class="MainService-main">{{$service[0]->title}}</h1>			
							<h4 class="MainService-sub">{{$service[0]->subtitle}}</h4>

							<ul class="MainService-list">
								@foreach($service as $servicedata)
									<li>
										{{$servicedata->title_node}}	
										{!! $servicedata->description !!}	
										
									</li>
								@endforeach
							</ul>

							<ul class="MainService-list-web">						
								@foreach($service as $servicedata)
									<li>
										{{$servicedata->title_node}}
									</li>
								@endforeach
							</ul>
							<div class="box-service-content marketing" id="marketing">
								<h3>{{$service[0]->title_node}}</h3>
								{!! $service[0]->description !!}								
							</div>
							<div class="box-service-content web" id="web">
								<h3>{{$service[1]->title_node}}</h3>
								{!! $service[1]->description !!}
							</div>
							<div class="box-service-content community" id="community">
								<h3>{{$service[2]->title_node}}</h3>
								{!! $service[2]->description !!}
							</div>
							<div class="box-service-content design" id="design">
								<h3>{{$service[3]->title_node}}</h3>
								{!! $service[3]->description !!}
							</div>
							<div class="box-service-content multimedia" id="multimedia">
								<h3>{{$service[4]->title_node}}</h3>
								{!! $service[4]->description !!}
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

			<div class="bgAllianceTransparent" style="left:70em;" data-0="top:175em;" data-end="top:-80em"></div>
			<div class="bgAllianceSolid" style="left:72em;" data-0="top:175em;" data-end="top:-60em"></div>
			<div class="bgAllianceTransparent" style="left:74em;" data-0="top:170em;" data-end="top:-100em"></div>
			<div class="bgAllianceSolid" style="left:76em;" data-0="top:175em;" data-end="top:-50em"></div>
			<div class="bgAllianceTransparent" style="left:78em;" data-0="top:160em;" data-end="top:-20em"></div>
			<div class="bgAllianceSolid" style="left:80em;" data-0="top:160em;" data-end="top:-12em"></div>
			<div class="bgAllianceTransparent" style="left:82em;" data-0="top:160em;" data-end="top:-110em"></div>
			<div class="bgAllianceSolid extra_1400" style="left:84em;" data-0="top:160em;" data-end="top:-55em"></div>
			<div class="bgAllianceTransparent extra_1400" style="left:86em;" data-0="top:170em;" data-end="top:-75em"></div>
			<div class="bgAllianceSolid extra_1400" style="left:88em;" data-0="top:170em;" data-end="top:-25em"></div>

			<div class="bgAllianceTransparent extra_1400" style="left:90em;" data-0="top:175em;" data-end="top:-80em"></div>
			<div class="bgAllianceSolid extra_1400" style="left:92em;" data-0="top:175em;" data-end="top:-60em"></div>
			<div class="bgAllianceTransparent extra_1600" style="left:94em;" data-0="top:170em;" data-end="top:-100em"></div>
			<div class="bgAllianceSolid extra_1600" style="left:96em;" data-0="top:175em;" data-end="top:-50em"></div>
			<div class="bgAllianceTransparent extra_1600" style="left:98em;" data-0="top:160em;" data-end="top:-20em"></div>
			<div class="bgAllianceSolid extra_1600" style="left:100em;" data-0="top:160em;" data-end="top:-12em"></div>
			<div class="bgAllianceTransparent extra_1600" style="left:102em;" data-0="top:160em;" data-end="top:-110em"></div>
			<div class="bgAllianceSolid extra_1600" style="left:104em;" data-0="top:160em;" data-end="top:-55em"></div>
			<div class="bgAllianceTransparent extra_1800" style="left:106em;" data-0="top:170em;" data-end="top:-75em"></div>
			<div class="bgAllianceSolid extra_1800" style="left:108em;" data-0="top:170em;" data-end="top:-25em"></div>

			<div class="bgAllianceTransparent extra_1800" style="left:110em;" data-0="top:175em;" data-end="top:-80em"></div>
			<div class="bgAllianceSolid extra_1800" style="left:112em;" data-0="top:175em;" data-end="top:-60em"></div>
			<div class="bgAllianceTransparent extra_1800" style="left:114em;" data-0="top:170em;" data-end="top:-100em"></div>
			<div class="bgAllianceSolid extra_1800" style="left:116em;" data-0="top:175em;" data-end="top:-50em"></div>
			<div class="bgAllianceTransparent extra_1800" style="left:118em;" data-0="top:160em;" data-end="top:-20em"></div>
			<div class="bgAllianceSolid extra_1800" style="left:120em;" data-0="top:160em;" data-end="top:-12em"></div>
		

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
						        	<div class="container-fluid grid-clients-web" data-length="5">
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
							<a href="#" class="unslider-arrow-tablet prev"><img src="{{ URL::to('/') }}/images/prev.png" alt=""></a>
							<a href="#" class="unslider-arrow-tablet next"><img src="{{ URL::to('/') }}/images/next.png" alt=""></a>
						    <ul>
						        <li>
						        	<div class="container-fluid grid-clients-tablet">
						        		<div class="row lessright">
						        				<div class="col-xs-12 content-clients">						        					
						        					<figure class="col-xs-4 col-md-offset-1 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_13.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_15.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_17.png" alt=""></figure>
						        				</div>        				
						        			
						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_19.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_21.png" alt=""></figure>						        											        					
							        				<figure class="col-xs-4 col-md-offset-1 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-1_35.png" alt=""></figure>
						        				</div>			        						
						        				
						        				<div class="col-xs-12 content-clients">						        					
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
						        				<div class="col-xs-12 content-clients">						        					
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
							        				<figure class="col-xs-4 col-md-offset-1 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_12.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_13.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_15.png" alt=""></figure>
						        				</div>

						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_19.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_21.png" alt=""></figure>
						        					<figure class="col-xs-4 col-md-offset-1 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_35.png" alt=""></figure>
						        				</div> 
						        		</div>
						        	</div>			        					
						        	
						        </li>

						        <li>
						        	<div class="container-fluid grid-clients-tablet">
						        		<div class="row lessright">
						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_37.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_39.png" alt=""></figure>
						        					<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_41.png" alt=""></figure>
						        				</div>

						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_43.png" alt=""></figure>					        					
							        				<figure class="col-xs-4 col-md-offset-1 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_57.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_59.png" alt=""></figure>	
						        				</div>

						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_61.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_63.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos_65.png" alt=""></figure>
						        				</div> 
						        		</div>
						        	</div>						        	
						        </li>

						        <li>
						        	<div class="container-fluid grid-clients-tablet">
						        		<div class="row lessright">
						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-4 col-md-offset-1 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-4_13.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-4_15.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-4_17.png" alt=""></figure>
						        				</div>

						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-4_19.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-4_21.png" alt=""></figure>						        											        									        					
							        				<figure class="col-xs-4 col-md-offset-1 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-4_35.png" alt=""></figure>
						        				</div>

						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-4_37.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-4_39.png" alt=""></figure>
						        					<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-4_41.png" alt=""></figure>
						        				</div> 
						        		</div>
						        	</div>						        	
						        </li>

						        <li>
						        	<div class="container-fluid grid-clients-tablet">
						        		<div class="row lessright">
						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-4_43.png" alt=""></figure>					        					
							        				<figure class="col-xs-4 col-md-offset-1 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-4_57.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-4_59.png" alt=""></figure>
						        				</div>

						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-4_61.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-4_63.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-4_65.png" alt=""></figure>
						        				</div>

						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-4_37.png" alt=""></figure>
							        				<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-4_39.png" alt=""></figure>
						        					<figure class="col-xs-4 client-wrapper"><img class="clients-img-tablet" src="{{ URL::to('/') }}/images/clients_web/logos-4_41.png" alt=""></figure>
						        				</div> 
						        		</div>
						        	</div>						        	
						        </li>							        
						    </ul>
						</div>

						<div class="banner-mobile">
							<a href="#" class="unslider-arrow-mobile prev"><img src="{{ URL::to('/') }}/images/prev.png" alt=""></a>
							<a href="#" class="unslider-arrow-mobile next"><img src="{{ URL::to('/') }}/images/next.png" alt=""></a>
						    <ul>
						        <li>
						        	<div class="container-fluid grid-clients">
						        		<div class="row lessright">
						        				<div class="col-xs-12 content-clients">						        					
						        					<figure class="col-xs-6 col-md-offset-1 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-1_13.png" alt=""></figure>
							        				<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-1_15.png" alt=""></figure>						        					
						        				</div>        				
						        			
						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-1_17.png" alt=""></figure>
							        				<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-1_19.png" alt=""></figure>
						        				</div>			        						
						        				
						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-1_21.png" alt=""></figure>						        											        					
							        				<figure class="col-xs-6 col-md-offset-1 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-1_35.png" alt=""></figure>	
						        				</div>	
						        		</div>
						        	</div>	
						        </li>
						        <li>
						        	<div class="container-fluid grid-clients">
						        		<div class="row lessright">
						        				<div class="col-xs-12 content-clients">						        					
						        					<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-1_37.png" alt=""></figure>
													<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-1_39.png" alt=""></figure>
						        				</div>        				
						        			
						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-1_41.png" alt=""></figure>
													<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-1_43.png" alt=""></figure>
						        				</div>			        						
						        				
						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-6 col-md-offset-1 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-1_57.png" alt=""></figure>
													<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-1_59.png" alt=""></figure>		
						        				</div>				        				
						        			
						        		</div>
						        		
						        	</div>
						        </li>

						        <li>
						        	<div class="container-fluid grid-clients">
						        		<div class="row lessright">
						        				<div class="col-xs-12 content-clients">	
													<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-1_61.png" alt=""></figure>
													<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-1_63.png" alt=""></figure>
						        				</div>        				
						        			
						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-1_65.png" alt=""></figure>
													<figure class="col-xs-6 col-md-offset-1 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-2_13.png" alt=""></figure>
						        				</div>			        						
						        				
						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-2_15.png" alt=""></figure>
													<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-2_17.png" alt=""></figure>	
						        				</div>				        				
						        			
						        		</div>
						        		
						        	</div>
						        </li>

						        <li>
						        	<div class="container-fluid grid-clients">
						        		<div class="row lessright">
						        				<div class="col-xs-12 content-clients">	
													<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-2_19.png" alt=""></figure>
													<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-2_21.png" alt=""></figure>
						        				</div>        				
						        			
						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-6 col-md-offset-1 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-2_35.png" alt=""></figure>
													<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-2_37.png" alt=""></figure>
						        				</div>			        						
						        				
						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-2_39.png" alt=""></figure>
													<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-2_41.png" alt=""></figure>
						        				</div>				        				
						        			
						        		</div>
						        		
						        	</div>
						        </li>

						        <li>
						        	<div class="container-fluid grid-clients">
						        		<div class="row lessright">
						        				<div class="col-xs-12 content-clients">	
													<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-2_43.png" alt=""></figure>		        					
													<figure class="col-xs-6 col-md-offset-1 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-2_57.png" alt=""></figure>
						        				</div>        				
						        			
						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-2_59.png" alt=""></figure>
													<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-2_61.png" alt=""></figure>
						        				</div>			        						
						        				
						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-2_63.png" alt=""></figure>
													<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-2_65.png" alt=""></figure>
						        				</div>				        				
						        			
						        		</div>
						        		
						        	</div>
						        </li>

						        <li>
						        	<div class="container-fluid grid-clients">
						        		<div class="row lessright">
						        				<div class="col-xs-12 content-clients">	
													<figure class="col-xs-6 col-md-offset-1 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos_12.png" alt=""></figure>
													<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos_13.png" alt=""></figure>
						        				</div>        				
						        			
						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos_15.png" alt=""></figure>
													<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos_19.png" alt=""></figure>
						        				</div>			        						
						        				
						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos_21.png" alt=""></figure>
													<figure class="col-xs-6 col-md-offset-1 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos_35.png" alt=""></figure>
						        				</div>				        				
						        			
						        		</div>
						        		
						        	</div>
						        </li>

						        <li>
						        	<div class="container-fluid grid-clients">
						        		<div class="row lessright">
						        				<div class="col-xs-12 content-clients">	
													<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos_37.png" alt=""></figure>
													<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos_39.png" alt=""></figure>
						        				</div>        				
						        			
						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos_41.png" alt=""></figure>
													<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos_43.png" alt=""></figure>
						        				</div>			        						
						        				
						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-6 col-md-offset-1 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos_57.png" alt=""></figure>
													<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos_59.png" alt=""></figure>
						        				</div>				        				
						        			
						        		</div>
						        		
						        	</div>
						        </li>

						        <li>
						        	<div class="container-fluid grid-clients">
						        		<div class="row lessright">
						        				<div class="col-xs-12 content-clients">	
													<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos_61.png" alt=""></figure>
													<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos_63.png" alt=""></figure>
						        				</div>        				
						        			
						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos_65.png" alt=""></figure>
													<figure class="col-xs-6 col-md-offset-1 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-4_13.png" alt=""></figure>
						        				</div>			        						
						        				
						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-4_15.png" alt=""></figure>
													<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-4_17.png" alt=""></figure>
						        				</div>				        				
						        			
						        		</div>
						        		
						        	</div>
						        </li>

						        <li>
						        	<div class="container-fluid grid-clients">
						        		<div class="row lessright">
						        				<div class="col-xs-12 content-clients">	
													<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-4_19.png" alt=""></figure>
													<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-4_21.png" alt=""></figure>
						        				</div>        				
						        			
						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-6 col-md-offset-1 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-4_35.png" alt=""></figure>
													<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-4_37.png" alt=""></figure>
						        				</div>			        						
						        				
						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-4_39.png" alt=""></figure>
													<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-4_41.png" alt=""></figure>
						        				</div>				        				
						        			
						        		</div>
						        		
						        	</div>
						        </li>

						        <li>
						        	<div class="container-fluid grid-clients">
						        		<div class="row lessright">
						        				<div class="col-xs-12 content-clients">	
													<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-4_43.png" alt=""></figure>					        					
													<figure class="col-xs-6 col-md-offset-1 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-4_57.png" alt=""></figure>
						        				</div>        				
						        			
						        				<div class="col-xs-12 content-clients">		
													<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-4_59.png" alt=""></figure>
													<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-4_61.png" alt=""></figure>
						        				</div>			        						
						        				
						        				<div class="col-xs-12 content-clients">						        					
							        				<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-4_63.png" alt=""></figure>
													<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-4_65.png" alt=""></figure>
						        				</div>				        				
						        			
						        		</div>
						        		
						        	</div>
						        </li>

						        <li>
						        	<div class="container-fluid grid-clients">
						        		<div class="row lessright">
						        				<div class="col-xs-12 content-clients">	
													<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-4_37.png" alt=""></figure>
													<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-4_39.png" alt=""></figure>
						        				</div>        				
						        			
						        				<div class="col-xs-12 content-clients">		
													<figure class="col-xs-6 client-wrapper"><img class="clients-img-mobile" src="{{ URL::to('/') }}/images/clients_web/logos-4_41.png" alt=""></figure>
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

						<ul class="wrapper-buttons-filter-tablet">
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

						<div id="carousel-example-generic-tablet" class="carousel slide" data-ride="carousel">							  

							  <!-- Wrapper for slides -->
							  <div class="carousel-inner" role="listbox">
							    <div class="item active">
							      <div class="gallery-portfolio col-xs-12">
										<figure class="col-xs-6 content-img-portfolio video">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/1.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalTablet1" data-target="#myModalTablet1"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-tablet">
												<img src="{{ URL::to('/') }}/images/multimedia.png" alt="" />
											</div>
											<div id="myModalTablet1" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/1.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-xs-6 content-img-portfolio social">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/2.jpg" alt="" />
											<div class="overlay-portfolio">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalTablet2" data-target="#myModalTablet2"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-tablet">
												<img src="{{ URL::to('/') }}/images/social.png" alt="" />									
											</div>
											<div id="myModalTablet2" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/2.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-xs-6 content-img-portfolio paper">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/3.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalTablet3" data-target="#myModalTablet3"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-tablet">
												<img src="{{ URL::to('/') }}/images/paper.png" alt="" />
											</div>
											<div id="myModalTablet3" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/3.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-xs-6 content-img-portfolio web">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/4.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalTablet4" data-target="#myModalTablet4"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-tablet">
												<img src="{{ URL::to('/') }}/images/web.png" alt="" />
											</div>
											<div id="myModalTablet4" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/4.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										
										
										<figure class="col-xs-6 content-img-portfolio web">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/5.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalTablet5" data-target="#myModalTablet5"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-tablet">
												<img src="{{ URL::to('/') }}/images/web.png" alt="" />
											</div>
											<div id="myModalTablet5" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/5.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-xs-6 content-img-portfolio web">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/6.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalTablet7" data-target="#myModalTablet7"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-tablet">
												<img src="{{ URL::to('/') }}/images/web.png" alt="" />
											</div>
											<div id="myModalTablet7" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/6.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>										
								  </div>
							    </div>
							    <div class="item">
							      <div class="gallery-portfolio col-xs-12">										
										<figure class="col-xs-6 content-img-portfolio video">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/7.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalTablet8" data-target="#myModalTablet8"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-tablet">
												<img src="{{ URL::to('/') }}/images/multimedia.png" alt="" />
											</div>
											<div id="myModalTablet8" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/7.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-xs-6 content-img-portfolio paper">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/8.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalTablet9" data-target="#myModalTablet9"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-tablet">
												<img src="{{ URL::to('/') }}/images/paper.png" alt="" />
											</div>
											<div id="myModalTablet9" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/8.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>

										<figure class="col-xs-6 content-img-portfolio social">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/9.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalTablet10" data-target="#myModalTablet10"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-tablet">
												<img src="{{ URL::to('/') }}/images/social.png" alt="" />
											</div>
											<div id="myModalTablet10" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/9.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-xs-6 content-img-portfolio social">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/10.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalTablet11" data-target="#myModalTablet11"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-tablet">
												<img src="{{ URL::to('/') }}/images/social.png" alt="" />
											</div>
											<div id="myModalTablet11" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/10.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-xs-6 content-img-portfolio paper">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/11.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalTablet12" data-target="#myModalTablet12"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-tablet">
												<img src="{{ URL::to('/') }}/images/paper.png" alt="" />
											</div>
											<div id="myModalTablet12" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/11.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-xs-6 content-img-portfolio paper">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/12.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalTablet13" data-target="#myModalTablet13"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-tablet">
												<img src="{{ URL::to('/') }}/images/paper.png" alt="" />
											</div>
											<div id="myModalTablet13" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

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
							      <div class="gallery-portfolio col-xs-12">
										<figure class="col-xs-6 content-img-portfolio">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/13.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalTablet14" data-target="#myModalTablet14"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-tablet">
												<img src="{{ URL::to('/') }}/images/multimedia.png" alt="" />
											</div>
											<div id="myModalTablet14" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/13.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-xs-6 content-img-portfolio social">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/14.jpg" alt="" />
											<div class="overlay-portfolio">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalTablet15" data-target="#myModalTablet15"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-tablet">
												<img src="{{ URL::to('/') }}/images/social.png" alt="" />									
											</div>
											<div id="myModalTablet15" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/14.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-xs-6 content-img-portfolio">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/15.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalTablet16" data-target="#myModalTablet16"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-tablet">
												<img src="{{ URL::to('/') }}/images/paper.png" alt="" />
											</div>
											<div id="myModalTablet16" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/15.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-xs-6 content-img-portfolio web">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/16.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalTablet17" data-target="#myModalTablet17"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-tablet">
												<img src="{{ URL::to('/') }}/images/web.png" alt="" />
											</div>
											<div id="myModalTablet17" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/16.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										
										
										<figure class="col-xs-6 content-img-portfolio web">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/17.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalTablet18" data-target="#myModalTablet18"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-tablet">
												<img src="{{ URL::to('/') }}/images/web.png" alt="" />
											</div>
											<div id="myModalTablet18" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/17.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-xs-6 content-img-portfolio web">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/18.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalTablet19" data-target="#myModalTablet19"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-tablet">
												<img src="{{ URL::to('/') }}/images/web.png" alt="" />
											</div>
											<div id="myModalTablet19" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/18.jpg">
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
							  <a class="left carousel-control" href="#carousel-example-generic-tablet" role="button" data-slide="prev">
							    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="right carousel-control" href="#carousel-example-generic-tablet" role="button" data-slide="next">
							    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>
						</div>

						<div id="carousel-example-generic-mobile" class="carousel slide" data-ride="carousel">							  

							  <!-- Wrapper for slides -->
							  <div class="carousel-inner" role="listbox">
							    <div class="item active">
							      <div class="gallery-portfolio col-xs-12">
										<figure class="col-xs-12 content-img-portfolio video">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/1.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalMobile1" data-target="#myModalMobile1"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-mobile">
												<img src="{{ URL::to('/') }}/images/multimedia.png" alt="" />
											</div>
											<div id="myModalMobile1" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/1.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-xs-12 content-img-portfolio social">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/2.jpg" alt="" />
											<div class="overlay-portfolio">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalMobile2" data-target="#myModalMobile2"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-mobile">
												<img src="{{ URL::to('/') }}/images/social.png" alt="" />									
											</div>
											<div id="myModalMobile2" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/2.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-xs-12 content-img-portfolio paper">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/3.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalMobile3" data-target="#myModalMobile3"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-mobile">
												<img src="{{ URL::to('/') }}/images/paper.png" alt="" />
											</div>
											<div id="myModalMobile3" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/3.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>																				
								  </div>
							    </div>

							    <div class="item">
							      <div class="gallery-portfolio col-xs-12">
										<figure class="col-xs-12 content-img-portfolio web">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/4.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalMobile4" data-target="#myModalMobile4"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-mobile">
												<img src="{{ URL::to('/') }}/images/web.png" alt="" />
											</div>
											<div id="myModalMobile4" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/4.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										
										
										<figure class="col-xs-12 content-img-portfolio web">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/5.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalMobile5" data-target="#myModalMobile5"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-mobile">
												<img src="{{ URL::to('/') }}/images/web.png" alt="" />
											</div>
											<div id="myModalMobile5" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/5.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-xs-12 content-img-portfolio web">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/6.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalMobile7" data-target="#myModalMobile7"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-mobile">
												<img src="{{ URL::to('/') }}/images/web.png" alt="" />
											</div>
											<div id="myModalMobile7" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/6.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>																				
								  </div>
							    </div>
							    <div class="item">
							      <div class="gallery-portfolio col-xs-12">										
										<figure class="col-xs-12 content-img-portfolio video">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/7.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalMobile8" data-target="#myModalMobile8"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-mobile">
												<img src="{{ URL::to('/') }}/images/multimedia.png" alt="" />
											</div>
											<div id="myModalMobile8" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/7.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-xs-12 content-img-portfolio paper">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/8.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalMobile9" data-target="#myModalMobile9"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-mobile">
												<img src="{{ URL::to('/') }}/images/paper.png" alt="" />
											</div>
											<div id="myModalMobile9" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/8.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>

										<figure class="col-xs-12 content-img-portfolio social">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/9.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalMobile10" data-target="#myModalMobile10"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-mobile">
												<img src="{{ URL::to('/') }}/images/social.png" alt="" />
											</div>
											<div id="myModalMobile10" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/9.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>										
								  </div>
							    </div>
							    <div class="item">
							      <div class="gallery-portfolio col-xs-12">										
										<figure class="col-xs-12 content-img-portfolio social">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/10.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalMobile11" data-target="#myModalMobile11"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-mobile">
												<img src="{{ URL::to('/') }}/images/social.png" alt="" />
											</div>
											<div id="myModalMobile11" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/10.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-xs-12 content-img-portfolio paper">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/11.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalMobile12" data-target="#myModalMobile12"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-mobile">
												<img src="{{ URL::to('/') }}/images/paper.png" alt="" />
											</div>
											<div id="myModalMobile12" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/11.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-xs-12 content-img-portfolio paper">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/12.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalMobile13" data-target="#myModalMobile13"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-mobile">
												<img src="{{ URL::to('/') }}/images/paper.png" alt="" />
											</div>
											<div id="myModalMobile13" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

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
							      <div class="gallery-portfolio col-xs-12">
										<figure class="col-xs-12 content-img-portfolio">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/13.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalMobile14" data-target="#myModalMobile14"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-mobile">
												<img src="{{ URL::to('/') }}/images/multimedia.png" alt="" />
											</div>
											<div id="myModalMobile14" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/13.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-xs-12 content-img-portfolio social">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/14.jpg" alt="" />
											<div class="overlay-portfolio">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalMobile15" data-target="#myModalMobile15"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-mobile">
												<img src="{{ URL::to('/') }}/images/social.png" alt="" />									
											</div>
											<div id="myModalMobile15" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/14.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-xs-12 content-img-portfolio">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/15.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalMobile16" data-target="#myModalMobile16"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-mobile">
												<img src="{{ URL::to('/') }}/images/paper.png" alt="" />
											</div>
											<div id="myModalMobile16" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/15.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>																				
								  </div>
							    </div>
							    <div class="item">
							      <div class="gallery-portfolio col-xs-12">
										<figure class="col-xs-12 content-img-portfolio web">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/16.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalMobile17" data-target="#myModalMobile17"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-mobile">
												<img src="{{ URL::to('/') }}/images/web.png" alt="" />
											</div>
											<div id="myModalMobile17" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/16.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>										
										
										<figure class="col-xs-12 content-img-portfolio web">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/17.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalMobile18" data-target="#myModalMobile18"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-mobile">
												<img src="{{ URL::to('/') }}/images/web.png" alt="" />
											</div>
											<div id="myModalMobile18" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/17.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>
										<figure class="col-xs-12 content-img-portfolio web">
											<img class="portofolio-image" src="{{ URL::to('/') }}/images/portfolio/18.jpg" alt="" />
											<div class="overlay-portfolio" id="overlay">
												<a href="#"><img class="link-portfolio" src="{{ URL::to('/') }}/images/link_portfolio.png" alt=""></a>
												<a data-toggle="modal" href="#myModalMobile19" data-target="#myModalMobile19"><img class="view-portfolio" src="{{ URL::to('/') }}/images/view_portfolio.png" alt=""></a>
											</div>
											<div class="wrapper-type-portfolio-mobile">
												<img src="{{ URL::to('/') }}/images/web.png" alt="" />
											</div>
											<div id="myModalMobile19" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

												<div class="modal-dialog" role="document">
												    <div class="modal-content">	      
												      <div class="modal-body">
												        <img style="width:100%;" src="{{ URL::to('/') }}/images/portfolio/big_images/18.jpg">
												      </div>
												    </div>
											  </div>
											</div>
										</figure>																				
								  </div>
							    </div>								    
							  </div>

							  <!-- Controls -->
							  <a class="left carousel-control" href="#carousel-example-generic-mobile" role="button" data-slide="prev">
							    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="right carousel-control" href="#carousel-example-generic-mobile" role="button" data-slide="next">
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
							<div class="form-group">
							    <div class="col-xs-12 MainContact-button-send">
							      <button type="submit" class="btn btn-default">Send</button>
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
									<h4 class="address-title">caracas - venezuela</h4>
									
									<address class="address-content">
									    Master; (+58212) 991.3376 / 716.5890<br>
									    Address: Av. Río de Janeiro, Edif. Arizano.<br>
									    Caracas 1061<br>
									    Email: info@3wv.net
									 </address>
								</div>
								<div class="col-xs-4">
									<h4 class="addres-middle">miami - usa</h4>
									
									<address class="address-content">
									    Master:  +1 (305) 222.7962<br>
									    Address:  7735 NW 48th St. Suite 115, Miami FL<br>
									    33166<br>
									    Email: info@3wv.net
									 </address>
								</div>
								<div class="col-xs-4">
									<h4 class="address-title">san jose - costa rica</h4>
									
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
									    Master:  +1 (305) 222.7962<br>
									    Dirección: 7735 NW 48th St. Suite 115, Miami FL<br>
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