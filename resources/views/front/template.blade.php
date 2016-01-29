<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

	<head>
		<script type="text/javascript" src="http://vk.com/js/api/share.js?92" charset="windows-1251"></script>
		<script type="text/javascript" src="//vk.com/js/api/openapi.js?117"></script>
		<script type="text/javascript" src="/js/share42/share42.js"></script>
		<script src="http://userapi.com/js/api/openapi.js" type="text/javascript" charset="windows-1251"></script>
		<script type="text/javascript" src="//vk.com/js/api/openapi.js?117"></script>
		<!-- Go to www.addthis.com/dashboard to customize your tools -->
		<!-- Go to www.addthis.com/dashboard to customize your tools -->
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55e76ef11f7e5ec6" async="async"></script>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>{{ trans('front/site.title') }}</title>
		<meta name="description" content="">	
		<meta name="viewport" content="width=device-width, initial-scale=1">


		@yield('head')

		{!! HTML::style('css/main_front.css') !!}

		<!--[if (lt IE 9) & (!IEMobile)]>
			{!! HTML::script('js/vendor/respond.min.js') !!}
		<![endif]-->
		<!--[if lt IE 9]>
			{!! HTML::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') !!}
			{!! HTML::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') !!}
		<![endif]-->

		{!! HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800') !!}
		{!! HTML::style('http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic') !!}

	</head>

  <body>

	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<header role="banner" class="header-top">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
			    		<div class="slider-content">
			      				<div class="brand">{{ trans('front/site.title') }}</div>
								<div class="address-bar">{{ trans('front/site.sub-title') }}</div>
						</div>
	      <div class="carousel-caption">
	  </div>
	</div>		
<div class="item">
			    		<div class="slider-content">
			      				<div class="brand">Ты лучший читатель!!!</div>
								<div class="address-bar">{{ trans('front/site.sub-title') }}</div>
						</div>
      <div class="carousel-caption">
      </div>
    </div>
        <div class="item">
  			    		<div class="slider-content">
			      				<div class="brand"></div>
								<div class="address-bar"></div>
						</div>
      <div class="carousel-caption">
      </div>
    </div>
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
		<div id="flags" class="text-center"></div>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">{{ trans('front/site.title') }}</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li {!! classActivePath('/') !!}>
							
							{!! link_to('/', trans('front/site.home')) !!}
						</li>
						@if(session('statut') == 'visitor' || session('statut') == 'user')
							<li {!! classActivePath('contact/create') !!}>
								{!! link_to('contact/create', trans('front/site.contact')) !!}
							</li>
						@endif
						@if(session()->has('food.compare'))
							@if(count(session('food.compare'))>0)
							<li {!! classActivePath('compare') !!}>
								{!! link_to('compare', trans('front/site.compare')) !!}
							</li>
							@endif
						@endif

						<li {!! classActiveSegment(1, ['articles', 'blog']) !!}>
							{!! link_to('articles', trans('front/site.blog')) !!}
						</li>
						<li {!! classActivePath('food') !!}>
							{!! link_to('food',trans('front/site.food')) !!}
						</li>
						@if(Request::is('auth/register'))
							<li class="active">
								{!! link_to('auth/register', trans('front/site.register')) !!}
							</li>
						@elseif(Request::is('password/email'))
							<li class="active">
								{!! link_to('password/email', trans('front/site.forget-password')) !!}
							</li>
						@else
							@if(session('statut') == 'visitor')
								<li {!! classActivePath('auth/login') !!}>
									{!! link_to('auth/login', trans('front/site.connection')) !!}
								</li>
							@else
								@if(session('statut') == 'admin')
									<li>
										{!! link_to_route('admin', trans('front/site.administration')) !!}
									</li>
								@elseif(session('statut') == 'redac') 
									<li>
										{!! link_to('blog', trans('front/site.redaction')) !!}
									</li>
								@endif
								<li>
									{!! link_to('auth/logout', trans('front/site.logout')) !!}
								</li>
							@endif
						@endif
						<li class="imgflag">
							<a href="{!! url('language') !!}"><img width="32" height="32" alt="ru" src="{!! asset('img/' . (session('locale') == 'ru' ? 'russia' : 'english') . '-flag.png') !!}"></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		@yield('header')	
	</header>
	<div class="container-fluid">
		<div class="row">
			<div class="left-bar">
				<div class="col-lg-3 panel">
				@yield('left-side')
					<div id="vk_groups"></div>
				</div>
			</div>
		    <div class="col-lg-8">
					@if(session()->has('ok'))
						@include('partials/error', ['type' => 'success', 'message' => session('ok')])
					@endif	
					@if(isset($info))
						@include('partials/error', ['type' => 'info', 'message' => $info])
					@endif
					@yield('main')
			</div>		
		</div>
	</div>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
	{!! HTML::script('js/plugins.js') !!}
	{!! HTML::script('js/main.js') !!}
	<a href="http://www.addthis.com/bookmark.php?v=20"
	   class="addthis_button"><img
				src="http://s7.addthis.com/static/btn/v2/lg-share-en.gif"
				width="125" height="16" border="0" alt="Share" /></a>
	<footer role="contentinfo">
		 @yield('footer')
		<p class="text-center"><small>Copyright &copy; Lvip</small></p>
	</footer>

	<script type="text/javascript">
		VK.Widgets.Group("vk_groups", {mode: 0, width: "220", height: "200", color1: 'FFFFFF', color2: '171B27', color3: '953D3D'}, 101434012);
	</script>



	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<script>
		(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
		function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
		e=o.createElement(i);r=o.getElementsByTagName(i)[0];
		e.src='//www.google-analytics.com/analytics.js';
		r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
		ga('create','UA-XXXXX-X');ga('send','pageview');
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".fancybox").fancybox();
		});
	</script>


	<div id="disqus_thread"></div>
	<script>
		/**
		 * RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
		 * LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
		 */
		/*
		 var disqus_config = function () {
		 this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
		 this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
		 };
		 */
		(function() { // DON'T EDIT BELOW THIS LINE
			var d = document, s = d.createElement('script');

			s.src = '//choosepetsfood.disqus.com/embed.js';

			s.setAttribute('data-timestamp', +new Date());
			(d.head || d.body).appendChild(s);
		})();
	</script>
	<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

	@yield('scripts')

  </body>
</html>