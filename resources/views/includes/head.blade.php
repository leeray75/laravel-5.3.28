<?php
$canonicalHref = 'https://'.$_SERVER['HTTP_HOST'].parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH );
$canonicalHref = str_replace('//','/',str_replace('index.php','',$canonicalHref));
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="canonical" href="{{ $canonicalHref }}" />
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<link href='//fonts.googleapis.com/css?family=Lobster|Open+Sans:400,300,300italic,600,400italic,600italic,700,700italic,800,800italic|Roboto+Condensed:400,300,300italic,400italic,700,700italic|Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic|PT+Sans:400,400italic,700,700italic|Droid+Serif:400,400italic,700,700italic|Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic|Merriweather:400,300,300italic,400italic,700,700italic,900,900italic|Play:400,700' rel='stylesheet' type='text/css'>
<meta name="description" content="Welcome to UI Deliverables! I am a front-end developer with experience in developing in HTML, JavaScript, CSS.">
<link rel="stylesheet" type="text/css" href="/static/build/Release/css/global.css" />
<link rel="stylesheet" type="text/css" href="/static/build/Release/css/homepage.css" />
<script language="javascript">
var GlobalVariables = GlobalVariables || {};
GlobalVariables.environment = "production";
</script>
</head>
<meta charset="utf-8">
<meta name="description" content="@yield('head.meta.description')">
<meta name="author" content="Raymond Lee">

<title>@yield('head.title')</title>

<!-- load bootstrap from a cdn -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/twitter-bootstrap/3.0.3/css/bootstrap-combined.min.css">