
@extends('app.layouts.app')

@section('content')
@section('bodyId',"about");

<div class="contain" id="about-container">
  <div class="about-header">
    <h1 class="about-header-title">About Us</h1>
    <p>Lorem ipsum dolor sit amet consituat valum velirum</p>
  </div>
  <div class="test-container" id="aboutdiv">
    <div class="row">
      <div class="col-md-6 about-div-1"></div>
      <div class="col-md-6 about-div-2"></div>
    </div>
  </div>

  <div class="col-lg-12 about-boost">
    <div class="container">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
</div>
  <div class="test-container" id="aboutdiv2">
    <div class="row">
      <div class="col-md-6 about-div-3"></div>
      <div class="col-md-6 about-div-4"></div>
    </div>
  </div>
  <div class="col-lg-12 about-info">
    <div class="container">
    <h2>Read about our boosters</h2>
    <p>A brief summary of who our boosters are</p>
    <div class="col-md-12 booster-info">
        Images,text,whatever??
    </div>
</div>
  </div>
  <div class="test-container" id="aboutdiv3">
    <div class="row">
      <div class="col-md-6 about-div-5"></div>
      <div class="col-md-6 about-div-6"></div>
    </div>
  </div>
  <div class="col-lg-12 about-dots">
    <div class="container">
    <h2>Section for whatever</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
</div>
<div class="row section" id="footerSection">
  <div class="col col-sm-12">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-lg-4">
            <h6 class="footerTitle">Social Media</h6>
            <hr>
            <p class="footerList">Lorem ipsum!</p>
            <p class="footerList">Lorem ipsum!</p>
            <p class="footerList">Lorem ipsum!</p>
          </div>
          <div class="col-sm-4 col-lg-4">
            <h6 class="footerTitle">Contact Us</h6>
            <hr>
            <p class="footerList">Lorem ipsum!</p>
            <p class="footerList">Lorem ipsum!</p>
            <p class="footerList">Lorem ipsum!</p>
          </div>
          <div class="col-sm-4 col-lg-4">
            <h6 class="footerTitle">Infomation</h6>
            <hr>
            <p class="footerList">Lorem ipsum!</p>
            <p class="footerList">Lorem ipsum!</p>
            <p class="footerList">Lorem ipsum!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('app.layouts.footer')
@endsection
