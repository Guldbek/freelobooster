
@extends('app.layouts.app')

@section('content')

    <div class="row section" id="headSection">
      <div class="col col-sm-12">
        <div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/catcher.png') }}">

        </div>
      </div>
    </div>
    <div class="row section" id="listSection">
      <div class="col col-sm-12">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-6" id="listContainer">
                <ul class="list">
                  <h3>Boosting with customer service in focus</h3>
                  <h6>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sollicitudin molestie malesuada.</h6>
                   <li><i class="fas fa-gamepad"></i><p>Go To the store 1234</p></li>
                   <li><i class="fas fa-gamepad"></i><p>Go To the store 1234</p></li>
                   <li><i class="fas fa-gamepad"></i><p>Go To the store 1234</p></li>
                   <li><i class="fas fa-gamepad"></i><p>Go To the store 1234</p></li>
                   <li><i class="fas fa-gamepad"></i><p>Go To the store 1234</p></li>
              </div>
              <div class="col-sm-12 col-md-12 col-lg-6">
                    HEY
              </div>
            </div>
          </div>
      </div>
    </div>
    <div class="row section" id="catcherSection">
      <div class="col col-sm-12">


              <div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/catcher.png') }}">
                <div class="dimmer">
                    <h1 class="text-center catcherTitle">Halllloooloo!</h1>
                </div>
              </div>
              <img class="img-fluid float-right" src="">


      </div>
    </div>
    <div class="row section" id="reviewSection">
      <div class="col-sm-12">
          <div class="container">
              REVIEW
          </div>
      </div>
    </div>
    <div class="row section" id="contactSection">
      <div class="col col-sm-12">
          <div class="container">
              <div class="row">
                <div class="col-sm-12 col-lg-6"></div>
                <div class="col-sm-12 col-lg-6">

                </div>
              </div>
          </div>
      </div>
    </div>
    <div class="row section" id="footerSection">
      <div class="col col-sm-12">
          <div class="container">
              FOOTER
          </div>
      </div>
    </div>

@endsection
