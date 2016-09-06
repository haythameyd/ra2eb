<!DOCTYPE html>
<html lang="ar">
  <head>
	<meta http-equiv="Cache-Control" content="max-age=200" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		@yield('title')
    <meta name="keywords" content="راقب,وزارة التخطيط و التعاون الدولي,وزارة التعاون الدولى,مصر,رقابة شعبية,شارك,اعرف,مراقبة,رقابة,مشاريع,خطط,خطة,WATCH,Ra2eb">
    <meta name="description" content="مبادرة تقييم جودة المشروعات الحكومية">
    <meta name="author" content="Ra2eb">
    <meta property="og:title" content="Ra2eb . راقب">
    <meta property="og:image" content="{!! url('img/logo.jpg') !!}">
    <meta property="fb:admins" content="687121308018194">
    <meta property="og:site_name" content="Ra2eb . راقب">
    <meta property="og:description" content="تهدف المبادرة الي خلق شراكة بين المواطن و الحكومة فى تقييم مشروعات الحكومة وسرعة رصد وازالة المعوقات اثناء وبعد التنفيذ من خلال المعرفه، الرقابة و المتابعة">

    <!-- Bootstrap -->
    <link href="{!! url('css/bootstrap.min.css') !!}" rel="stylesheet">
    <!-- Le styles -->
    <link href="{!! url('css/style.css') !!}" rel="stylesheet">

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="{!! url('ico/favicon.ico') !!}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{!! url('ico/apple-touch-icon-144-precomposed.png') !!}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{!! url('ico/apple-touch-icon-114-precomposed.png') !!}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{!! url('ico/apple-touch-icon-72-precomposed.png') !!}">
    <link rel="apple-touch-icon-precomposed" href="{!! url('ico/apple-touch-icon-57-precomposed.png') !!}">

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-49137545-1', 'ra2eb.com');
	  ga('send', 'pageview');
	</script>

  </head>

  <body>

   @if($navbar==TRUE)
   { <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
			  <div class="navbar-header text-center">
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <div class=""><img class="img-center" src="{!! url('img/logo.png') !!}" width="143" height="84" alt="Ra2eb Logo"></div>
			  </div>

			  <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
				  <li class="active">
					<a href="{!! url('/#') !!}">المشروعات</a>
				  </li>
				  <li class="">
					<a href="{!! url('/#about') !!}">عن المبادرة</a>
				  </li>
				  <li class="">
					<a href="{!! url('/#reports') !!}">قيِّم المشاريع</a>
				  </li>
				  <li class="">
					<a href="{!! url('/#contact') !!}">تواصل معنا</a>
				  </li>
				  <li class="">
					<a href="{!! url('/#videos') !!}">تقارير مصورة</a>
				  </li>


				</ul>
				<div class="social-icons">
				<a href="http://www.twitter.com/ra2eb"><img class="twitter-ico" src="{!! url('img/empty-smi.png') !!}" width="20" height="20" alt="ra2eb"></a>
				<a href="http://www.facebook.com/ra2eb"><img class="facebook-ico" src="{!! url('img/empty-smi.png') !!}" width="20" height="20" alt="ra2eb"></a>
				<a href="http://www.youtube.com/user/ra2ebvideos"><img class="youtube-ico" src="{!! url('img/empty-smi.png') !!}" width="20" height="20" alt="ra2ebvideos"></a>
			  </div>
			  </div>

		</div>
    </div>

	@endif

	   @yield('body')


    <!-- Footer
    ================================================== -->
    <div class="row container">
    <footer class="footer text-center">
        <h6>جميع الحقوق محفوظة . مبادرة راقب . 2014 | Copyrights Reserved . Ra2eb initiative . 2014</h6>
		<h6><a href="faq.html" target="_blank">اسئلة شائعة</a> | <a href="sitemap.html" target="_blank">خريطة الموقع</a> | <a href="review/privacy.html" target="_blank">سياسة الخصوصية</a></h6>
    </footer>
    </div>
    @yield('footerscript')


    <!-- Le javascript
    ================================================== -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{!! url('js/bootstrap.min.js') !!}"></script>
  </body>
</html>
