<?php include('../static/build/CacheBuster.php'); ?>
@extends('layouts.default')
@section('head.title',"UI Deliverables: Contact")
@section('head.style','')
@section('scripts')
@endsection

@section('head.meta.description')
Fill out this form to contact me.
@endsection

@section('content')
<section id="contact">
  <h1>Contact UI Deliverables</h1>

<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

<form method="post" action="/www/api/contact">

  <div class="form-group">
    <label>Your Name</label>
    <input name="name" type="text" required class="form-control" placeholder="Your name">
  </div>

  <div class="form-group">
    <label>Your E-mail Address</label>
    <input name="email" type="email" required class="form-control" placeholder="Your e-mail address">
  </div>

  <div class="form-group">
    <label>Your Message</label>
    <textarea name="message" required class="form-control" placeholder="Your message"></textarea>
  </div>

  <div class="form-group">
    <input type="submit" value="Contact Us!" class="btn btn-primary">
  </div>
</form>
</section>
@endsection