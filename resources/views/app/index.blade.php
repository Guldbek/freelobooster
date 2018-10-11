@extends('app.layouts.app')
@section('content')
@section('bodyId',"index")
<div class="index-bg-pic">
   <div class="contain" id="index-container">
         <header-text title="Welcome To Freelobooster!" body="Lorem ipsum dolar sit amet"></header-text>
         <!-- <img  draggable="false" (dragstart)="false;" class="img-fluid tt img-overlap-headerpic unselectable" src="{{ asset('images/headimage.jpg') }}"/> -->
   </div>
   <div class="test-container" id="arrowdiv">
     <div class="row">
       <div class="col-sm-6 arrow-1"></div>
       <div class="col-sm-6 arrow-2"></div>
     </div>
   </div>
</div>
<div class="col-lg-12 featurewrap">
   <div class="container">
   <div class="section" id="featuresSection">
      <div class="info_graphic" id="kompetencer">
         <div class="modal-container">
            <div class="row text-center modals">
               <div class="col-sm-12 modal-row">

                   <info-square icon="  <i class='fa fa-desktop' aria-hidden='true'></i>" title="Features" body="Lorem ipsum dolar, sit amet constituar. Lorem ipsum dolar, sit amet constituar. Lorem ipsum dolar, sit amet constituar.">
                    <i class='fa fa-desktop' aria-hidden='true'></i>
                   </info-square>

                   <info-square title="Dropdown" body="Lorem ipsum dolar, sit amet constituar. Lorem ipsum dolar, sit amet constituar. Lorem ipsum dolar, sit amet constituar.">
                    <i class='fa fa-desktop' aria-hidden='true'></i>
                   </info-square>

                   <info-square title="Manchet" body="Lorem ipsum dolar, sit amet constituar. Lorem ipsum dolar, sit amet constituar. Lorem ipsum dolar, sit amet constituar.">
                    <i class='fa fa-desktop' aria-hidden='true'></i>
                   </info-square>

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
          <h1>Buy your boost today!</h1>
          <button type="button" name="button" class="dimmer-btn butttton">See more</button>
        </div>
    </div>
  </div>
</div>
</div>
<div class="row section" id="listSection">
   <div class="col col-sm-12">
      <div class="container">
         <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6" id="listContainer">
              <div class="listTitleContainer">
                <h3 class="listTitle listtitle1">Boosting with</h3>
                <h3 class="listTitle listtitle2">customer service in focus</h3>
               </div>
               <ul class="list">
                  <list-item>Select item</list-item>
                  <list-item>Whoose item is this</list-item>
                  <list-item>Option is invalid</list-item>
                  <button type="button" name="button" class="listbtn butttton">Read more</button>
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
         <!-- SKAL DET FJERNES? - <h1 class="text-left review-title">Guaranteed time</h1>
         <h1 class="textleft review-title">span or full cash back!</h1> -->
         <p class="text-left review-text">"LolBoosting nice review from some random customer"</p>
         <p class="text-left review-info">Daniel on 24-07-2003</p>
         <button type="button" name="button" class="reviewbtn butttton ">See more</button>
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
