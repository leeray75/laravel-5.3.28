<?php include('../static/build/CacheBuster.php'); ?>
@extends('layouts.default')
@section('head.title','UI Deliverables')
@section('head.style','pages/homepage')
@section('global-scripts')
@endsection
@section('scripts')
  @if (App::environment()==='local')
    <script src="/static/build/dev/js/bundles/homepage.bundle.js?v=<?php echo $cacheVersion ?>"></script>
  @else
    <script src="/static/build/Release/js/pages/homepage.min.js?v=<?php echo $cacheVersion ?>"></script>
  @endif
@endsection
@section('head.meta.description')
I am a front end developer with experience in developing in HTML/HTML5, JavaScript, CSS/CSS3. I have experience with JavaScript libraries and frameworks such as jQuery, AngularJS, and Backbone.js. I also have knowledge working with Bootstrap, a responsive web framework. I am always looking forward to new opportunities and working in a dynamic learning environment where I can contribute my current skills, and grow through new opportunities.
@endsection

@section('content')
<section id="homepage">
    
<div id="welcome-hero" class="jumbotron">
  <div class="row">
    <div class="hero-clock-col col-md-6 hidden-sm hidden-xs">
  <article id="clock">
    <div class="hours-container">
      <div class="hours"></div>
    </div>
    <div class="minutes-container">
      <div class="minutes"></div>
    </div>
    <div class="seconds-container">
      <div class="seconds"></div>
    </div>
  </article>
</div>
<div class="hero-copy-col col-md-6">
  <h1>Welcome to UI Deliverables</h1>
  <p>I am a front end developer with experience in developing in HTML/HTML5, JavaScript, CSS/CSS3. I have experience with JavaScript libraries and frameworks such as jQuery, AngularJS, and Backbone.js. I also have knowledge working with Bootstrap, a responsive web framework. I am always looking forward to new opportunities and working in a dynamic learning environment where I can contribute my current skills, and grow through new opportunities. <a href="/www/index.php/resume">View my resume here</a>.</p>
  <p>I recently finished up my consultant/contract assignment at B&amp;H Photo and I am now exploring new exciting opportunities. I am currently working on serveral personal projects that are in <a href="https://github.com/leeray75?tab=repositories" target="_blank">Github</a>.</p>
  <p itemscope itemtype="http://data-vocabulary.org/Person">- <span itemprop="name">Raymond Lee</span></p>
  <p><a class="btn btn-primary btn-large" href="/www/resume">My Resume &raquo;</a> <a class="btn btn-primary btn-large" href="https://github.com/leeray75?tab=repositories" target="_blank">Github Repositories &raquo;</a></p>
</div>
    </div>
    <!-- /row -->
</div>
<!-- /Welcome-Hero -->


<div id="site-info" class="flex-container">
  
    <div class="flex-box">
      <h3>My Resume</h3>
      <p>A document that present my backgrounds and skills. It contains a summary of my relevant job experience, technical skills, and education.</p>
      <p><a class="btn btn-primary" href="/www/resume">Resume &raquo;</a></p>
    </div>
    
    <div class="flex-box">
      <h3>Contact Me</h3>
      <p>Please feel free to contact me if you have any questions, comments, or suggestions. I will receive everything sent through this contact form.</p>
      <p><a class="btn btn-primary" href="/www/site/contact">Contact Me &raquo;</a></p>
    </div>
  
    <div class="flex-box">
      <h3>My Demos &amp; Portfolio</h3>
      <p>A list of sites and other projects I've coded recently. It displays some personal project demos and prototypes I am working on.</p>
      <p><a class="btn btn-primary" href="/www/demo">Portfolio &raquo;</a></p>
    </div>

</div>


</section><!-- homepage -->

@endsection