<?php include('../static/build/CacheBuster.php'); ?>
<?php
$canonicalHref = 'https://'.$_SERVER['HTTP_HOST'].parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH );
$canonicalHref = str_replace('//','/',str_replace('index.php','',$canonicalHref));
?>
<link rel="canonical" href="{{ $canonicalHref }}" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<link href='//fonts.googleapis.com/css?family=Lobster|Open+Sans:400,300,300italic,600,400italic,600italic,700,700italic,800,800italic|Roboto+Condensed:400,300,300italic,400italic,700,700italic|Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic|PT+Sans:400,400italic,700,700italic|Droid+Serif:400,400italic,700,700italic|Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic|Merriweather:400,300,300italic,400italic,700,700italic,900,900italic|Play:400,700' rel='stylesheet' type='text/css'>

@if (App::environment()==='local')
	<link rel="stylesheet" type="text/css" href="/static/build/dev/css/global-styles.css?v=<?php echo $cacheVersion ?>" />
	<link rel="stylesheet" type="text/css" href="/static/build/dev/css/@yield('head.style').css?v=<?php echo $cacheVersion ?>" />
@else
	<link rel="stylesheet" type="text/css" href="/static/build/Release/css/global-styles.css?v=<?php echo $cacheVersion ?>" />
	<link rel="stylesheet" type="text/css" href="/static/build/Release/css/@yield('head.style').css?v=<?php echo $cacheVersion ?>" />
@endif
<script language="javascript">
(function(scope){
  var environment = "{{ App::environment() }}";
  scope.GlobalVariables = scope.GlobalVariables || {};
  scope.GlobalVariables.environment = environment;
  scope.GlobalVariables['HTTP_HOST'] = "{{ $_SERVER['HTTP_HOST'] }}";
  scope.GlobalVariables.app = scope.GlobalVariables.app || {};
  scope.GlobalVariables.app.mainSrc="";
  scope.GlobalVariables.app.templateSrc= environment=="local" ? '/static/build/dev/templates/apps/' : '/static/build/Release/templates/apps/';
})(window);
</script>
</head>
<meta charset="utf-8">
<meta name="description" content="@yield('head.meta.description')">
<meta name="author" content="Raymond Lee">

<title>@yield('head.title')</title>

