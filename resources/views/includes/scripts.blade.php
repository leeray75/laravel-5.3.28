<?php include('../static/build/CacheBuster.php'); ?>
<script language="javascript">
(function(global){
  var environment = "{{ App::environment() }}";
  var staticPath = environment=="local" ? '/static/build/dev' : '/static/build/Release';
  global.GlobalVariables = global.GlobalVariables || {};
  global.GlobalVariables.environment = environment;
  global.GlobalVariables['HTTP_HOST'] = "{{ $_SERVER['HTTP_HOST'] }}";
  global.GlobalVariables.staticPath = staticPath;
  global.GlobalVariables.app = global.GlobalVariables.app || {};
  global.GlobalVariables.app.mainSrc="";
  global.GlobalVariables.app.templateSrc= staticPath+"/templates/apps/";
  global.GlobalVariables.modules = global.GlobalVariables.modules || {};
})(window);
</script>
<script src="//unpkg.com/core-js/client/shim.min.js"></script>
<script src="//unpkg.com/zone.js@0.6.25?main=browser"></script>
<script src="//unpkg.com/reflect-metadata@0.1.8"></script>

@yield('global-scripts')
@if (App::environment()==='local')
  <script src="/static/build/dev/js/bundles/vendors.bundle.js?v=<?php echo $cacheVersion ?>"></script>
	<script src="/static/build/dev/js/bundles/globals.bundle.js?v=<?php echo $cacheVersion ?>"></script>
@else
  <script src="/static/build/Release/js/bundles/vendors.bundle.min.js?v=<?php echo $cacheVersion ?>"></script>
  <script src="/static/build/Release/js/bundles/globals.bundle.min.js?v=<?php echo $cacheVersion ?>"></script>
@endif
@yield('scripts')
