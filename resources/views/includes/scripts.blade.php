<?php include('../static/build/CacheBuster.php'); ?>
<script language="javascript">
(function(scope){
  var environment = "{{ App::environment() }}";
  scope.GlobalVariables = scope.GlobalVariables || {};
  scope.GlobalVariables.environment = environment;
  scope.GlobalVariables['HTTP_HOST'] = "{{ $_SERVER['HTTP_HOST'] }}";
  scope.GlobalVariables.app = scope.GlobalVariables.app || {};
  scope.GlobalVariables.app.mainSrc="";
  scope.GlobalVariables.app.templateSrc= environment=="local" ? '/static/build/dev/templates/apps/' : '/static/build/Release/templates/apps/';
  scope.GlobalVariables.modules = scope.GlobalVariables.modules || {};
})(window);
</script>
<script src="//unpkg.com/core-js/client/shim.min.js"></script>
<script src="//unpkg.com/zone.js@0.6.25?main=browser"></script>
<script src="//unpkg.com/reflect-metadata@0.1.8"></script>
<script src="//unpkg.com/systemjs@0.19.39/dist/system.src.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ng2-bootstrap/1.1.13-1/ng2-bootstrap.min.js"></script>
@yield('global-scripts')
@if (App::environment()==='local')
	<script src="/static/build/dev/js/systemjs-config.js?v=<?php echo $cacheVersion ?>"></script>
	<script src="/static/build/dev/js/global.js?v=<?php echo $cacheVersion ?>"></script>
@else
	<script src="/static/build/Release/js/systemjs-config.min.js?v=<?php echo $cacheVersion ?>"></script>
	<script src="/static/build/Release/js/global.min.js?v=<?php echo $cacheVersion ?>"></script>
@endif
	<script>
		System.import('globals');
	</script>
@yield('scripts')
