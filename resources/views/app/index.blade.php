
@extends('app.layouts.app')

@section('content')

    <div class="row section" id="headSection">
      <div class="col col-sm-12">
          <div class="container">
                HEADER
          </div>
      </div>
    </div>
    <div class="row section" id="listSection">
      <div class="col col-sm-12">
          <div class="container">
              LIST
          </div>
      </div>
    </div>
    <div class="row section" id="catcherSection">
      <div class="col col-sm-12">
          <div id="scene">
              
              <div data-depth="0.2"><img class="img-fluid" src="{{ asset('images/catcher.png') }}"></div>
              <h1>Check the prices here!</h1>
          </div>
      </div>
    </div>
    <div class="row section" id="reviewSection">
      <div class="col col-sm-12">
          <div class="container">
              REVIEW
          </div>
      </div>
    </div>
    <div class="row section" id="contactSection">
      <div class="col col-sm-12">
          <div class="container">
              CONTACT
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
