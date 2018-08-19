@extends('app.layouts.app')
@section('content')
@section('bodyId',"index");
<div class="contain" id="index-container">
<div class="index-bg-pic">
   <div class="index-header">
      <h1 class="index-header-title">Welcome To Freelobooster</h1>
      <p>Lorem ipsum dolor sit amet consituat </p>
   </div>
   <div class="arrow-container" id="arrowdiv">
      <div class="row">
         <div class="col-md-6 arrow-1"></div>
         <div class="col-md-6 arrow-2"></div>
      </div>
   </div>
</div>
<div class="row section" id="listSection">
   <div class="col col-sm-12">
      <div class="container">
         <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6" id="listContainer">
               <h3>
               Boosting with
               <h3>
               <h3>customer service in focus</h3>
               <ul class="list">
                  <li>
                     <i class="fas fa-angle-right"></i>
                     <p>Lorem ipsum dolor</p>
                  </li>
                  <li>
                     <i class="fas fa-angle-right"></i>
                     <p>Lorem ipsum dolor</p>
                  </li>
                  <li>
                     <i class="fas fa-angle-right"></i>
                     <p>Lorem ipsum dolor</p>
                  </li>
                  <li>
                     <i class="fas fa-angle-right"></i>
                     <p>Lorem ipsum dolor</p>
                  </li>
                  <li>
                     <i class="fas fa-angle-right"></i>
                     <p>Lorem ipsum dolor</p>
                  </li>
                  <button type="button" name="button" class="butttton">Read more</button>
               </uL>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
               <div class="list-image"><img  draggable="false" (dragstart)="false;" class="img-fluid unselectable" src="{{ asset('images/listimg.png') }}"></div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="row  catcherSection" id="catcherSection">
   <div class="col col-sm-12 ">
      <div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/catcher.png') }}">
         <div class="dimmer">
            <div class="catcherBody">
               <p class="catcherTitle">Buy your boost</p>
               <p class="catcherTitle"> today!</p>
               <button type="button" name="button" class="right dimmer-btn butttton ">See more</button>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="row section" id="reviewSection">
   <div class="col-sm-12">
      <div class="container reviewcontainer">
         <h1 class="text-left review-title">Guaranteed time</h1>
         <h1 class="text-left review-title">span or full cash back!</h1>
         <p class="text-left review-text">"LolBoosting nice review from some random customer"</p>
         <p class="text-left review-info">Daniel on 24-07-2003</p>
         <button type="button" name="button" class="right dimmer-btn butttton ">See more</button>
      </div>
   </div>
</div>
<div class="section img-fluid" id="contactSection">
   <div class="row">
      <div class="col col-sm-12">
         <div class="container">
            <div class="row">
               <div class="col-sm-12 col-lg-6">
                  <h1 class="contactTitle">24/7 Customer support</h1>
                  <p class="contactText">We strive to give our customers the best boosting experience</p>
                  <button type="button" name="button" class="dimmer-btn butttton whitebtn">Read more</button>
               </div>
               <div class="col-sm-12 col-lg-6">
               </div>
            </div>
         </div>
      </div>
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
