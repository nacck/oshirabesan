<!DOCTYPE html>
<html lang="ja">

<head>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
	  (adsbygoogle = window.adsbygoogle || []).push({
	    google_ad_client: "ca-pub-3942401344486904",
	    enable_page_level_ads: true
	  });
	</script>

    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>
        <?php wp_title('|', true, 'right'); ?>
        <?php bloginfo('name'); ?>
    </title>

    <link rel="stylesheet"
        type="text/css" href="https://necolas.github.io/normalize.css/5.0.0/normalize.css">
    <link rel="stylesheet"
        type="text/css" href="<?php echo get_stylesheet_uri(); ?>">

    <!--[if it IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-97890919-1', 'auto');
		ga('send', 'pageview');

	</script>

	<?php wp_head(); ?>
</head>

<body>
	<?php include_once("analyticstracking.php") ?>
    <header>
        <div class="header-inner">
            <div class="site">
                <h1><a href="<?php echo home_url('/'); ?>">
                <?php bloginfo('name'); ?>
                </a></h1>
				<?php /*wp_nav_menu();*/ ?>
            </div>
        </div>
    </header>
