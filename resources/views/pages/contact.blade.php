<?php include('../static/build/CacheBuster.php'); ?>
@extends('layouts.default')
@section('head.title',"UI Deliverables: Contact")
@section('head.style','apps/contact-us')
@section('global-scripts')
  <script>
  (function(scope){
    scope.GlobalVariables = scope.GlobalVariables || {};
    scope.GlobalVariables.app = scope.GlobalVariables.app || {};
    scope.GlobalVariables.app.mainSrc="./contact-us/main.js";
  })(window);
  </script>
@endsection
@section('scripts')
  @if (App::environment()==='local')
    <script src="/static/build/dev/js/bundles/contact-us.bundle.js?v=<?php echo $cacheVersion ?>"></script>
  @else
    <script src="/static/build/Release/js/bundles/contact-us.bundle.min.js?v=<?php echo $cacheVersion ?>"></script>
  @endif
@endsection
@section('head.meta.description')
Fill out this form to contact me.
@endsection

@section('content')
<contact-us></contact-us>
@endsection