 <!--
        Home Slider
		==================================== -->
		
		<section id="slider">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				
				<!-- Indicators bullet -->
				<ol class="carousel-indicators">
					
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>

				</ol>
				<!-- End Indicators bullet -->				
				
				<!-- Wrapper for slides -->
				
				 <div class="carousel-inner" role="listbox">
					<!-- single slide -->
					@foreach ($intro->slice(0,3) as $key=> $intro)
					<div class="item {{$key == 0 ? 'active' : '' }}" style="background-image: url({{asset('storage/'.$intro->url)}})">
						<div class="carousel-caption">
						<h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">Meet<span>{{$intro->title}}</span>!</h2>
							<h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><span class="color">{{$intro->title}} </span> one page template.</h3>
							<p data-wow-duration="1000ms" class="wow slideInRight animated">{{$intro->informative}}</p>
							
							<ul class="social-links text-center">
								<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
							</ul>
						</div>
					</div> 
					@endforeach
					
					<!-- end single slide -->
					
					<!-- single slide -->
					 {{-- <div class="item" style="background-image: url(img/banner.jpg);">
						<div class="carousel-caption">
							<h2 data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated">Meet<span> Team</span>!</h2>
							<h3 data-wow-duration="500ms" class="wow slideInLeft animated"><span class="color">/creative</span> one page template.</h3>
							<p data-wow-duration="500ms" class="wow slideInRight animated">We are a team of professionals</p>
							
							<ul class="social-links text-center">
								<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
							</ul>
						</div>
					</div>  --}}
					<!-- end single slide -->
					
				</div>
				<!-- End Wrapper for slides -->
				
			</div>
		</section>
		
		
        <!--
        End Home SliderEnd
        ==================================== -->