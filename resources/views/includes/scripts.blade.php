<?php include('../static/build/CacheBuster.php'); ?>
<script src="https://unpkg.com/systemjs@0.19.39/dist/system.src.js"></script>
<script src="/static/config.js"></script>
@if (App::environment()==='local')
	<script src="/static/build/dev/js/global.js?v=<?php echo $cacheVersion ?>"></script>
	<script>
	System.import('build/dev/js/lib/main.js');
	</script>
@else
	<script src="/static/build/Release/js/global.min.js?v=<?php echo $cacheVersion ?>"></script>
	<script>
	System.import('build/Release/js/lib/main.js');
	</script>
@endif
@yield('scripts')
