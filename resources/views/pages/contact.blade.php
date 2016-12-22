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
    scope.GlobalVariables.app.templateSrc= scope.GlobalVariables.environment=="local" ? '/static/build/dev/templates/apps/contact-us/' : '/static/build/Release/templates/apps/contact-us/';
  })(window);
  </script>
@endsection
@section('scripts')
  @if (App::environment()==='local')
    <script>
        System.import('app').catch(function(err){ console.error(err); });
    </script>
  @else
    <script src="/static/build/Release/js/apps/contact-us/contact-us.combo.min.js"></script>
    <script>
        System.import('main').catch(function(err){ console.error(err); });
    </script>
  @endif
@endsection
@section('head.meta.description')
Fill out this form to contact me.
@endsection

@section('content')
<contact-us></contact-us>
@endsection