@extends('app.layouts.app')
@section('content')
@section('bodyId',"index")
<div class="index-bg-pic">
   <div class="contain" id="index-container">
      <div class="index-header">
         <h1 class="index-header-title">Welcome To Freelobooster</h1>
         <p>Lorem ipsum dolor sit amet consituat </p>
         <!-- <img  draggable="false" (dragstart)="false;" class="img-fluid tt img-overlap-headerpic unselectable" src="{{ asset('images/headimage.jpg') }}"/> -->
      </div>
   </div>
   <div class="test-container" id="arrowdiv">
     <div class="row">
       <div class="col-sm-6 arrow-1"></div>
       <div class="col-sm-6 arrow-2"></div>
     </div>
   </div>
</div>
<div class="col-lg-12 featurewrap">
   <div class="section" id="featuresSection">
      <div class="info_graphic" id="kompetencer">
         <div class="modal-container">
            <div class="row text-center modals">
               <div class="col-sm-12 modal-row">
                  <div class="col-sm-4">
                     <div class="col-sm-1"></div>
                     <div class="info_square col-sm-10">
                        <p class="header_title_style squaretitle">Feature</p>
                        <div class="icon"><i class="fa fa-desktop" aria-hidden="true"></i></div>
                        <p class="info_text">Lorem ipsum dolor sit amet bla bla ipsum dolor sit amet bla bla ipsum dolor sit amet bla bla</p>
                     </div>
                     <div class="col-sm-1"></div>
                  </div>
                  <div class="col-sm-4">
                     <div class="col-sm-1"></div>
                     <div class="info_square col-sm-10">
                        <p class="header_title_style squaretitle">Feature</p>
                        <div class="icon"><i class="fa fa-bath" aria-hidden="true"></i>
                        </div>
                        <p class="info_text">Lorem ipsum dolor sit amet bla bla ipsum dolor sit amet bla bla ipsum dolor sit amet bla bla</p>
                     </div>
                     <div class="col-sm-1"></div>
                  </div>
                  <div class="col-sm-4">
                     <div class="col-sm-1"></div>
                     <div class="info_square col-sm-10">
                        <p class="header_title_style squaretitle">Feature</p>
                        <div class="icon"><i class="fa fa-table" aria-hidden="true"></i>
                        </div>
                        <p class="info_text">Lorem ipsum dolor sit amet bla bla ipsum dolor sit amet bla bla ipsum dolor sit amet bla bla</p>
                     </div>
                     <div class="col-sm-1"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="col-lg-12 catchwrapper" id="catcher">
  <div class="dimmer">
    <div class="container">
        <div class="row catcherbody">
          <h1>Buy your boost</h1>
          <h1>today!</h1>
          <button type="button" name="button" class="dimmer-btn butttton">See more</button>
        </div>
    </div>
  </div>
</div>
<!-- <div class="row catcherSection" id="catcherSection">
   <div class="col-lg-12 ">
      <div class="parallax-window" data-parallax="scroll" data-image-src="/images/catcher.png">
         <div class="dimmer">
            <div class="catcherBody">
               <p class="catcherTitle">Buy your boost</p>
               <p class="catcherTitle"> today!</p>
               <button type="button" name="button" class="right dimmer-btn butttton">See more</button>
            </div>
         </div>

      </div>
   </div>
</div> -->
</div>
<div class="row section" id="listSection">
   <div class="col col-sm-12">
      <div class="container">
         <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6" id="listContainer">
               <h3 class="listTitle">Boosting with</h3>
               <h3 class="listTitle">customer service in focus</h3>
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
            <div class="col-sm-12 col-md-12 col-lg-6 list-img-cont">
              <img  draggable="false" (dragstart)="false;" class="img-fluid unselectable" src="{{ asset('images/listimg.png') }}"/>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="row section" id="reviewSection">
   <div class="col-sm-12">
      <div class="container reviewcontainer">
         <h1 class="text-left review-title">Guaranteed time</h1>
         <h1 class="textleft review-title">span or full cash back!</h1>
         <p class="text-left review-text">"LolBoosting nice review from some random customer"</p>
         <p class="text-left review-info">Daniel on 24-07-2003</p>
         <button type="button" name="button" class=" dimmer-btn butttton ">See more</button>
      </div>
   </div>
</div>
<div class="section" id="contactSection">
   <div class="row">
      <div class="container">
         <div class="contactbody">
            <h1 class="contactTitle">24/7 Customer support</h1>
            <p class="contactText">We strive to give our customers the best boosting experience</p>
            <button type="button" name="button" class="butttton">Read more</button>
         </div>
      </div>
   </div>
</div>
</div>
@include('app.layouts.footer')
@endsection
