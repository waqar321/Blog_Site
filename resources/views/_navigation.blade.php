
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
					<div id="responsive-nav">
						<!-- NAV -->
						<ul class="main-nav nav navbar-nav">
							<li class="active"><a href="{{ URL('home')}}">Home</a></li>
							
							@foreach($menus as $menu)
								<li><a href="{{ URL('')}}/{{ $menu->path }}">{{ $menu->name }} </a></li>
							@endforeach

						</ul>
						<!-- /NAV -->
					</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
