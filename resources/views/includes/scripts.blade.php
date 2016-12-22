<?php include('../static/build/CacheBuster.php'); ?>

@if (App::environment()==='local')
	<script src="/static/node_modules/jquery/dist/jquery.min.js"></script>
	<script src="/static/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="/static/build/dev/js/@yield('scripts').js?v=<?php echo $cacheVersion ?>"></script>
@else
	<script src="//unpkg.com/jquery@3.1.1/dist/jquery.min.js"></script>
	<script src="//unpkg.com/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
	<script src="/static/build/Release/js/@yield('scripts').min.js?v=<?php echo $cacheVersion ?>"></script>
@endif
