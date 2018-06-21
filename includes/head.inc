<!-- Page Title -->
<title><?= $page->seo->title ?></title>

<meta name="description" content="<?= $page->seo->description ?>" />
<meta name="keywords" content="<?= $page->seo->keywords ?>" />
<meta name="author" content="OVS Websites" />

<meta name="dc.language" content="en" />
<meta name="dc.language.iso" content="en" />
<meta name="dc.publisher" content="Chandler Dentist 85286 - Shumway Dental Care" />
<meta name="dc.title" content="<?= $page->seo->title ?>" />
<meta name="dc.description" content="<?= $page->seo->description ?>" />
<meta name="dc.date.issued" content="<?= date("Y-m-d", $page->modified); ?>" />

<meta property="og:url" content="<?= $page->url ?>" />
<meta property="og:title" content="<?= $page->seo->title ?>" />
<meta property="og:description" content="<?= $page->seo->description ?>" />
<meta property="og:type" content="article" />
<meta property="og:image" content="<?= $config->urls->templates ?>images/sched1-300x68.png" />
<meta property="og:image:width" content="500" />
<meta property="og:image:type" content="image/png" />
<meta property="og:site_name" content="Chandler Dentist 85286 - Shumway Dental Care" />
<meta property="og:locale" content="en" />

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

<!-- Favicon and Touch Icons -->
<link href="<?= $config->urls->templates ?>images/favicon.png" rel="shortcut icon" type="image/png">
<link href="<?= $config->urls->templates ?>images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="<?= $config->urls->templates ?>images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="<?= $config->urls->templates ?>images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="<?= $config->urls->templates ?>images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="<?= $config->urls->templates ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?= $config->urls->templates ?>css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="<?= $config->urls->templates ?>css/animate.css" rel="stylesheet" type="text/css">
<link href="<?= $config->urls->templates ?>css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link href="<?= $config->urls->templates ?>css/menuzord-megamenu.css" rel="stylesheet"/>
<link id="menuzord-menu-skins" href="<?= $config->urls->templates ?>css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="<?= $config->urls->templates ?>css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="<?= $config->urls->templates ?>css/preloaderr.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="<?= $config->urls->templates ?>css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="<?= $config->urls->templates ?>css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<link href="<?= $config->urls->templates ?>css/style.css" rel="stylesheet" type="text/css">

<!-- Revolution Slider 5.x CSS settings -->
<link  href="<?= $config->urls->templates ?>js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="<?= $config->urls->templates ?>js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="<?= $config->urls->templates ?>js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="<?= $config->urls->templates ?>css/colors/theme-skin-color-set6.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="<?= $config->urls->templates ?>js/jquery-2.2.4.min.js"></script>
<script src="<?= $config->urls->templates ?>js/jquery-ui.min.js"></script>
<script src="<?= $config->urls->templates ?>js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="<?= $config->urls->templates ?>js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="<?= $config->urls->templates ?>js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="<?= $config->urls->templates ?>js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->