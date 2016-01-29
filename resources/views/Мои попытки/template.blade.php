<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

 <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>{{ trans('front/site.title') }}</title>
		<meta name="description" content="">	
		<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta http-equiv="cleartype" content="on">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic&amp;subset=latin,cyrillic">
<link rel="stylesheet" href="https://habracdn.net/toster/frontend.a76c62c8-3c4c-11e5-a417-38eaa71001f0.css">

<link rel="icon" href="http://megaicons.net/static/img/icons_sizes/8/178/48/pets-dog-icon.png" type="image/x-icon">
<link href="https://habracdn.net/toster/images/favicons/apple-touch-icon-57x57.png" rel="apple-touch-icon" sizes="57x57">
<link href="https://habracdn.net/toster/images/favicons/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="https://habracdn.net/toster/images/favicons/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="https://habracdn.net/toster/images/favicons/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
<link href="https://habracdn.net/toster/images/favicons/apple-touch-icon-60x60.png" rel="apple-touch-icon" sizes="60x60">
<link href="https://habracdn.net/toster/images/favicons/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120">
<link href="https://habracdn.net/toster/images/favicons/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76">
<link href="https://habracdn.net/toster/images/favicons/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152">
<link href="https://habracdn.net/toster/images/favicons/apple-touch-icon-180x180.png" rel="apple-touch-icon" sizes="180x180">
<link href="https://habracdn.net/toster/images/favicons/favicon-192x192.png" rel="icon" sizes="192x192" type="image/png">
<link href="https://habracdn.net/toster/images/favicons/favicon-160x160.png" rel="icon" sizes="160x160" type="image/png">
<link href="https://habracdn.net/toster/images/favicons/favicon-96x96.png" rel="icon" sizes="96x96" type="image/png">
<link href="https://habracdn.net/toster/images/favicons/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
<link href="https://habracdn.net/toster/images/favicons/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
<meta content="#434d61" name="msapplication-TileColor">
<meta content="https://habracdn.net/toster/images/favicons/mstile-144x144.png" name="msapplication-TileImage">
<meta content="Тостер" name="application-name">
<meta content="Тостер" name="apple-mobile-web-app-title">
<meta name="google-site-verification" content="j8HWPnNFKDvKsovqTFZZarpWY06A0Gd2e2wKdfgmWnI">
<meta name="yandex-verification" content="556b759af57efeb5">
<script src="https://habracdn.net/toster/js/lib/modernizr.custom.js" async="async"></script>
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
<script src="https://habracdn.net/toster/js/lib/adriver.core.2.js"></script>
  <script type="text/javascript">
  //<![CDATA[
    var crtg_nid = "2580";
    var crtg_cookiename = "cto_rtt";
    var crtg_varname = "crtg_content";
    
    function crtg_getCookie(c_name) {
        var i, x, y, ARRCookies = document.cookie.split(";");
        for (i = 0; i < ARRCookies.length; i++) {
            x = ARRCookies[i].substr(0, ARRCookies[i].indexOf("="));
            y = ARRCookies[i].substr(ARRCookies[i].indexOf("=") + 1);
            x = x.replace(/^\s+|\s+$/g, "");
            if (x == c_name) {
                return unescape(y);
            }
        }
        return '';
    }
    var crtg_content = crtg_getCookie(crtg_cookiename);
    var crtg_rnd = Math.floor(Math.random() * 99999999999);
    var crtg_url = location.protocol + '//rtax.criteo.com/delivery/rta/rta.js?netId=' + escape(crtg_nid);
    crtg_url += '&cookieName=' + escape(crtg_cookiename);
    crtg_url += '&rnd=' + crtg_rnd;
    crtg_url += '&varName=' + escape(crtg_varname);
    var crtg_script = document.createElement('script');
    crtg_script.type = 'text/javascript';
    crtg_script.src = crtg_url;
    crtg_script.async = true;
    if (document.getElementsByTagName("head").length > 0) document.getElementsByTagName("head")[0].appendChild(crtg_script);
    else if (document.getElementsByTagName("body").length > 0) document.getElementsByTagName("body")[0].appendChild(crtg_script);
    
  //]]>
  </script>
  </head>
  <body>
    <div class="layout">
      <div class="layout__canvas" id="js-canvas">
        <aside class="layout__navbar" role="navbar">
          <a class="logo logo_sidebar" href="/" title="Return to the homepage" id="logo">
            <img src="http://indiwiki.playflock.com/wp-content/uploads/2014/02/cat_18.png"  alt="Smiley face" height="100" width="180"/>
          </a>
          <section class="user-panel" role="user_expand_menu">
      <div class="user-panel_head">
						@if(Request::is('auth/register'))
								<a class="user-panel__login-link" href="/auth/register">{!!  trans('front/site.register') !!}</a>
						@elseif(Request::is('password/email'))
								{!! link_to('password/email', trans('front/site.forget-password')) !!}
						@else
							@if(session('statut') == 'visitor')
							<svg class="svg-nav_profile" height="18px" version="1.1" viewbox="0 0 18 18" width="18px" x="0px" y="0px">
							  <path clip-rule="evenodd" d="M2,16v-1l3-3h3L5,9V2h8v7l-3,3h3l3,3v1H2z" fill-rule="evenodd"></path>
							</svg>
							<a class="user-panel__login-link" href="/auth/login">{!!  trans('front/site.connection') !!}</a>
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
									<a class="user-panel__login-link" href="/auth/logout">{!!  trans('front/site.logout') !!} 	
									@if(Auth::user()->username)
									{{Auth::user()->username}}
									@endif
									</a>
								</li>
							@endif
						@endif
      
      
    </div>
    </section>
<ul class="main-menu">
    <li class="main-menu__item">
    <a class="main-menu__link open" id="item_questions" href="/articles">
      {!! trans('front/site.blog') !!}
    </a>
  </li>

  </ul>
  <section class="promo-block promo-block_sticky-bottom">
    <h3 class="promo-block__title">Лучший портал домашних питомцев</h3>
    <p class="promo-block__desc">Получайте нужную инормацию</p>
    <a class="btn btn_green" href="/info/about">Узнать больше</a>
  </section>
        </aside>
        <div class="layout__body">
          <header class="layout__topbar">
            <div class="layout__topbar_suggest">
              <div class="layout__topbar_wrap">
                <form class="suggest" action="search" method="get" id="header_search_form">
                  <div class="suggest__field_wrap">
                    <div class="suggest__wrap_fluid">
                      <input class="suggest__field" type="search" autocomplete="off" name="q" placeholder="Найти корм или породу">
                    </div>
                    <button class="btn btn_link" type="button" role="btn_suggest_close">
                      <span>Закрыть</span>
                    </button>
                  </div>
                  <button class="btn btn_suggest" type="button" role="btn_suggest">
                    <svg class="icon_svg icon_search" viewBox="0 0 32 32">
                      <use xlink:href="https://toster.ru/images/sprite_0.1.svg#icon_search"></use>
                    </svg>
                  </button>
                </form>

                <div class="layout__topbar_add-question">

	
                  <a class="btn btn_green btn_add-question" href="question/new" role="auth_popup_trigger" data-value="Чтобы задать вопрос и&nbsp;получить на&nbsp;него квалифицированный ответ." data-title="" data-auth-ret="question/new" data-no-button="">
                  	<span>Задать вопрос</span>
                    
                  </a>
                  <a href="{!! url('language') !!}"><img width="32" height="32" alt="ru" src="{!! asset('img/' . (session('locale') == 'ru' ? 'russia' : 'english') . '-flag.png') !!}"></a>
                </div>
              </div>
            </div>
            <div class="layout__topbar_canvas-toggler">
              <button class="btn btn_navbar_toggle" role="toggle_navbar" type="button">
                <svg class="icon_svg icon_burger" viewBox="0 0 32 32">
                  <use xlink:href="https://toster.ru/images/sprite_0.1.svg#icon_burger"></use>
                </svg>
                              </button>
              <a class="logo logo_topbar" href="https://toster.ru/">
                <svg class="icon_svg icon_logo">
                  <use xlink:href="https://toster.ru/images/sprite_0.1.svg#icon_logo"></use>
                </svg>
              </a>
            </div>
          </header>
          <section class="column column_wrap" role="wrap_section">
            <div class="ad-banner_mobile">
  <div id="adriver_banner_403766071"></div>
  <script type="text/javascript">
  //<![CDATA[
    if (typeof adriver != 'undefined') {
      function show_ad_banner_top(image_url, click_url){
        document.getElementById('adriver_banner_403766071').innerHTML='<a href="'+click_url+'" target="_blank"><img src="'+image_url+'" alt=""/></a>';
      };
      (function() {
      var __func = function() {
          var custom = {};
          if (document.getElementById('tags_brandings')) { custom[1] = document.getElementById('tags_brandings').innerHTML; };
          console.log(custom);
          new adriver("adriver_banner_403766071", {sid:195294, bt:52, bn:6, custom: custom});
      };
      if (window.addEventListener) {
          window.addEventListener("load", __func, false);
      } else if(window.attachEvent) {
          window.attachEvent("onload", __func);
      } else {
          document.addEventListener("load", __func, false);
      };
      })();
    };
  //]]>
  </script>
</div>
            <div class="column_main">
              <main class="page">
                <div class="flash-notices" role="notices_container_flash"></div>
                <div class="notices-container" role="notice_container">
                                  </div>
                    <header class="page__header">
</header>
<div class="page__body">
@yield('main')
  </div>
              </main>
            </div>
            <aside class="column_sidebar">
                  <div class="ad-banner ad-banner_300_500">
    <div id="adriver_banner_679678228"></div>
    <script type="text/javascript">
    //<![CDATA[
      if (typeof adriver != 'undefined') {
        (function() {
        var keyword = (typeof crtg_content !== 'undefined' && crtg_content) ? crtg_content : '';
        var custom = {};
        if (document.getElementById('tags_brandings')) { custom[1] = document.getElementById('tags_brandings').innerHTML; };
        new adriver("adriver_banner_679678228", {sid:195294, bt:52, bn:1, keyword: keyword, custom: custom});
        })();
      }
    //]]>
    </script>
  </div>
    <dl class="panel-heading panel-heading_inner" role="most_interest">
    <dt class="panel-heading__title panel-heading__title_underline">
      Самое интересное за 24 часа
    </dt>
    <dd class="panel-heading__content panel-heading__content_inner">
    </dd>
  </dl>
      <dl class="panel-heading panel-heading_inner">
    <dt class="panel-heading__title panel-heading__title_underline">
      <a href="http://moikrug.ru/?utm_source=tm_toster&utm_medium=tm_section&utm_campaign=tm_promo" target="_blank">
        Вакансии с Моего Круга
      </a>
    </dt>
    <dd class="panel-heading__content panel-heading__content_inner">
      <ul class="content-list content-list_sidebar-block">
                  <li class="content-list__item">
            <div class="vacancy ">
              <div class="vacancy__company-name">
                                  <a href="http://moikrug.ru/companies/funbox?utm_source=tm_toster&utm_medium=tm_section&utm_campaign=tm_promo">
                    <strong>FunBox</strong>
                  </a>
                                              </div>
              <div class="vacancy__title">
                <a href="http://moikrug.ru/vacancies/1000020410?utm_source=tm_toster&utm_medium=tm_section&utm_campaign=tm_promo">Бэкенд-разработчик (Обработка данных)</a>
              </div>
            </div>
          </li>
                          <li class="content-list__item">
            <div class="vacancy ">
              <div class="vacancy__company-name">
                                  <a href="http://moikrug.ru/companies/funbox?utm_source=tm_toster&utm_medium=tm_section&utm_campaign=tm_promo">
                    <strong>FunBox</strong>
                  </a>
                                              </div>
              <div class="vacancy__title">
                <a href="http://moikrug.ru/vacancies/1000020409?utm_source=tm_toster&utm_medium=tm_section&utm_campaign=tm_promo">Бэкенд-разработчик (Ruby on Rails)</a>
              </div>
            </div>
          </li>
                          <li class="content-list__item">
            <div class="vacancy ">
              <div class="vacancy__company-name">
                                  <a href="http://moikrug.ru/companies/indexf10?utm_source=tm_toster&utm_medium=tm_section&utm_campaign=tm_promo">
                    <strong>Indexf10</strong>
                  </a>
                                              </div>
              <div class="vacancy__title">
                <a href="http://moikrug.ru/vacancies/1000020408?utm_source=tm_toster&utm_medium=tm_section&utm_campaign=tm_promo">Системный администратор Unix</a>
              </div>
            </div>
          </li>
                          <li class="content-list__item">
            <div class="vacancy vacancy_marked">
              <div class="vacancy__company-name">
                                  <a href="http://moikrug.ru/companies/ivelum?utm_source=tm_toster&utm_medium=tm_section&utm_campaign=tm_promo">
                    <strong>Ivelum</strong>
                  </a>
                                              </div>
              <div class="vacancy__title">
                <a href="http://moikrug.ru/vacancies/1000014240?utm_source=tm_toster&utm_medium=tm_section&utm_campaign=tm_promo">Опытный Full-stack разработчик с упором на Python/Django</a>
              </div>
            </div>
          </li>
                        <li class="content-list__item content-list__item-more">
          <a href="http://moikrug.ru/?utm_source=tm_toster&utm_medium=tm_section&utm_campaign=tm_promo" target="_blank">Все вакансии</a>
        </li>
      </ul>
    </dd>
  </dl>
        <dl class="panel-heading panel-heading_inner freelansim_tasks">
    <dt class="panel-heading__title panel-heading__title_underline">
      <a href="http://freelansim.ru/?utm_source=toster&utm_medium=referral&utm_campaign=mainpage&utm_content=block_freelansim" target="_blank">
        Заказы с Фрилансим
      </a>
    </dt>
    <dd class="panel-heading__content panel-heading__content_inner">
      <ul class="content-list content-list_sidebar-block">
                  <li class="content-list__item">
            <div class="freelansim-task ">
              <div class="freelansim-task__title">
                <a href="http://freelansim.ru/tasks/119053?utm_source=toster&utm_medium=referral&utm_campaign=task&utm_content=block_freelansim">Создание логистической saas системы</a>
              </div>
              <div class="freelansim-task__price">
                300000 руб./за проект              </div>
            </div>
          </li>
                          <li class="content-list__item">
            <div class="freelansim-task ">
              <div class="freelansim-task__title">
                <a href="http://freelansim.ru/tasks/117609?utm_source=toster&utm_medium=referral&utm_campaign=task&utm_content=block_freelansim">Сделать парсел с рубрики "вопрос-ответ"</a>
              </div>
              <div class="freelansim-task__price">
                Цена договорная              </div>
            </div>
          </li>
                          <li class="content-list__item">
            <div class="freelansim-task ">
              <div class="freelansim-task__title">
                <a href="http://freelansim.ru/tasks/119189?utm_source=toster&utm_medium=referral&utm_campaign=task&utm_content=block_freelansim">Отрисовать 3Д модель имеющегося адаптера</a>
              </div>
              <div class="freelansim-task__price">
                1500 руб./за проект              </div>
            </div>
          </li>
                          <li class="content-list__item">
            <div class="freelansim-task ">
              <div class="freelansim-task__title">
                <a href="http://freelansim.ru/tasks/119187?utm_source=toster&utm_medium=referral&utm_campaign=task&utm_content=block_freelansim">Карусель на js</a>
              </div>
              <div class="freelansim-task__price">
                Цена договорная              </div>
            </div>
          </li>
                        <li class="content-list__item content-list__item-more">
          <a href="http://freelansim.ru/?utm_source=toster&utm_medium=referral&utm_campaign=mainpage&utm_content=block_freelansim" target="_blank">Все заказы</a>
        </li>
      </ul>
    </dd>
  </dl>
            </aside>
          </section>
        </div>
        <div class="ad-banner_mobile">
  <div id="adriver_banner_140126738"></div>
  <script type="text/javascript">
  //<![CDATA[
    if (typeof adriver != 'undefined') {
      function show_ad_banner_bottom(image_url, click_url){
        document.getElementById('adriver_banner_140126738').innerHTML='<a href="'+click_url+'" target="_blank"><img src="'+image_url+'" alt=""/></a>';
      };
      (function() {
      var custom = {};
      if (document.getElementById('tags_brandings')) { custom[1] = document.getElementById('tags_brandings').innerHTML; };
      new adriver("adriver_banner_140126738", {sid:195294, bt:52, bn:7, custom: custom});
      })();
    };
  //]]>
  </script>
</div>
        <footer class="layout__footer">
          <div class="layout__footer_inner">
  <nav class="menu_services">
    <ul class="menu menu_inline">
      <li class="menu__item">
        <a class="menu__item-link" href="http://tmtm.ru">
          <span class="copyright_short">&copy; TM</span>
        </a>
      </li>
      <li class="menu__item">
        <a class="menu__item-link" href="info/about">О сайте</a>
      </li>
      <li class="menu__item">
        <a class="menu__item-link" href="feedback">Обратная связь</a>
      </li>
      <li class="menu__item">
        <a class="menu__item-link" href="info/advertising">Реклама</a>
      </li>
      <li class="menu__item">
        <a class="menu__item-link" href="http://habrahabr.ru/company/tm/">Блог</a>
      </li>
    </ul>
  </nav>
  <nav class="menu_socials">
    <ul class="menu menu_inline">
      <li class="menu__item">
        <a class="menu__item-link tw" href="https://twitter.com/toster_ru" title="Наш аккаунт в Twitter">
          <svg class="icon_svg icon_social_twitter" viewBox="0 0 39 32">
            <use xlink:href="https://toster.ru/images/sprite_0.1.svg#icon_social_twitter"></use>
          </svg>
        </a>
      </li>
      <li class="menu__item">
        <a class="menu__item-link fb" href="https://www.facebook.com/toster.ru" title="Наша группа в Facebook">
          <svg class="icon_svg icon_social_facebook" viewBox="0 0 17 32">
            <use xlink:href="https://toster.ru/images/sprite_0.1.svg#icon_social_facebook"></use>
          </svg>
        </a>
      </li>
      <li class="menu__item">
        <a class="menu__item-link vk" href="http://vk.com/toster_ru" title="Наша группа на Вконтакте">
          <svg class="icon_svg icon_social_vk" viewBox="0 0 56 32">
            <use xlink:href="https://toster.ru/images/sprite_0.1.svg#icon_social_vk"></use>
          </svg>
        </a>
      </li>
    </ul>
  </nav>
</div>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '322477921209238');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=322477921209238&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

          <img class="footer__pix" src="https://ad.adriver.ru/cgi-bin/rle.cgi?sid=1&ad=505035&bt=21&pid=1844621&bid=3690124&bn=3690124&rnd=538787923">
        </footer>
        <div class="popup__overlay hidden" role="popup auth_popup" data-default-title="Войдите на сайт">
  <div class="popup popup_auth">
    <div class="popup__body">
                        <div class="empty-block">
  <div class="empty-block__inner">
    <h3 class="empty-block__title icon_unauthorized" role="title_replace">
      Войдите на сайт    </h3>
          <div class="empty-block__description" role="desc_replace">
        Чтобы задать вопрос и получить на него квалифицированный ответ.      </div>
                  <a class="empty-block__button" href="auth/ac">
        Войти через TM ID      </a>
          </div>
</div>
    </div>
    <button class="btn btn_link popup__close-btn" type="reset" role="btn_popup_close">
      <span>Закрыть</span>
    </button>
  </div>
</div>
      </div>
    </div>
    <script src="https://habracdn.net/toster/frontend.a76c62c8-3c4c-11e5-a417-38eaa71001f0.js"></script>
                  <script type="text/javascript">
    //<![CDATA[
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      
      ga('create', 'UA-726094-14', 'toster.ru');
      ga('require', 'displayfeatures');
      ga('set', 'dimension1', 'guest'); // user type - guest/authorized
      ga('send', 'pageview');
      
    //]]>
    </script>
      <script type="text/javascript">
  //<![CDATA[
    (function (d, w, c) {(w[c] = w[c] || []).push(function() {try {w.yaCounter24049246 = new Ya.Metrika({id:24049246, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } });
    var n = d.getElementsByTagName("script")[0],
    s = d.createElement("script"),
    f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";
    if (w.opera == "[object Opera]") {
    d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
    
  //]]>
  </script>
  <noscript>
    <div>
      <img src="//mc.yandex.ru/watch/24049246" style="position:absolute; left:-9999px;" alt="">
    </div>
  </noscript>
  </body>
</html>