@extends('app.layouts.app')
@section('content')
@section('bodyId',"about")
<div class="index-bg-pic">
  <div class="contain" id="about-container">
    <div class="about-header">
      <h1 class="about-header-title">About Us</h1>
      <p>Lorem ipsum dolor sit amet consituat valum velirum</p>
    </div>
    <div class="test-container" id="arrowdiv">
      <div class="row">
        <div class="col-sm-6 arrow-1"></div>
        <div class="col-sm-6 arrow-2"></div>
      </div>
    </div>
  </div>
</div>
<div class="container">
<div class="col-lg-12 about-text">
  <h2>I'm A Proud Title!</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
</div>
<div class="sideby-cont">
  <div class="container">
    <div class="row">
      <div class="sidebyrow col-md-6">
        <img class="sideby-image" src="/images/sideby/sideby1.jpg" alt="">
      </div>
      <div class="sidebyrow col-md-6">
        <h2 class="sideby-title">Lorem dolor</h2>
        <p class="sideby-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rhoncus nec est nec convallis. Vivamus placerat dui in tortor eleifend ultrices.</p>
      </div>
    </div>
    <div class="row">
      <div class="sidebyrow col-md-6">
        <h2 class="sideby-title">Lorem dolor</h2>
        <p class="sideby-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rhoncus nec est nec convallis. Vivamus placerat dui in tortor eleifend ultrices.</p>
      </div>
      <div class="sidebyrow col-md-6">
        <img class="sideby-image" src="/images/sideby/sideby2.jpg" alt="">
      </div>
    </div>
    <div class="row">
      <div class="sidebyrow col-md-6">
        <img class="sideby-image" src="/images/sideby/sideby3.jpg" alt="">
      </div>
      <div class="sidebyrow col-md-6">
        <h2 class="sideby-title">Lorem dolor</h2>
        <p class="sideby-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rhoncus nec est nec convallis. Vivamus placerat dui in tortor eleifend ultrices.</p>
      </div>
    </div>
  </div>
</div>
@include('app.layouts.footer')
@endsection
