
@extends('app.layouts.app')

@section('content')
@section('bodyId',"boost");
  <div class="cont" id="rankselection">
      <div class="row">
        <div class="col-lg-6">
          <h2>1. Select your rank</h2>
          <img src="/images/ranks/silver.png">
          <div class="wrapper typo">My current rank is
        <div class="list">
          <span class="currentrank" id="currentrank">Rank</span>
          <ul class="list__ul">
            <li ><a data-rank="0" href="">Bronze</a></li>
            <li><a data-rank="1" href="">Silver</a></li>
            <li><a data-rank="2" href="">Gold</a></li>
            <li><a data-rank="3" href="">Platinum</a></li>
            <li><a data-rank="4" href="">Diamond</a></li>
            <li><a data-rank="5" href="">Master</a></li>
          </ul>
        </div>
        <div class="list">
          <span class="currentrank2 noshow">Divison</span>
          <ul class="list__ul2">
            <li><a data-div="0" href="">I</a></li>
            <li><a data-div="1" href="">II</a></li>
            <li><a data-div="2" href="">III</a></li>
            <li><a data-div="3" href="">IV</a></li>
            <li><a data-div="4" href="">V</a></li>
          </ul>
      </div>
      </div>
      <div class="wrapper typo lp-typo noshow">I have
    <div class="list" id="lp-list">
      <span class="currentlp">this amount of LP</span>
      <ul class="lp__ul">
        <li><a data-lp="0" href="">0-20</a></li>
        <li><a data-lp="1" href="">20-40</a></li>
        <li><a data-lp="2" href="">40-80</a></li>
        <li><a data-lp="3" href="">80-100</a></li>
      </ul>
    </div>
  </div>
      </div>
          <div class="col-lg-6">
            <h2>2. Select your desired rank</h2>
            <img src="/images/ranks/plat.png">
              <div class="wrapper typo">I want to be
                <div class="list">
                  <span class="desiredrank">Rank</span>
                  <ul class="list__ul3">
                    <li><a href="">Bronze</a></li>
                    <li><a href="">Silver</a></li>
                    <li><a href="">Gold</a></li>
                    <li><a href="">Platinum</a></li>
                    <li><a href="">Diamond</a></li>
                    <li><a href="">Master</a></li>
                  </ul>
                </div>

                <div class="list">
                  <span class="desiredrank2 noshow">Divison</span>
                  <ul class="list__ul4">
                    <li><a href="">I</a></li>
                    <li><a href="">II</a></li>
                    <li><a href="">III</a></li>
                    <li><a href="">IV</a></li>
                    <li><a href="">V</a></li>
                  </ul>
              </div>
            </div>

            <div class="wrapper typo desiredlp-typo noshow">I want
              <div class="list" id="lp-list">
                <span class="desiredlp">this amount of LP</span>
                <ul class="lp__ul2">
                  <li><a href="">0-20</a></li>
                  <li><a href="">20-40</a></li>
                  <li><a href="">40-80</a></li>
                  <li><a href="">80-100</a></li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>
  </div>
    <div class="test-container" id="arrowdiv">
      <div class="row">
        <div class="col-md-6 test-div-1"></div>
        <div class="col-md-6 test-div-2"></div>
      </div>
    </div>
  <div class="pricing-wrapper">
  <div class="container" id="pricing">

        <div class="col-lg-7">
        <img class="thumbsUp" src="/images/thumbsUp.gif" alt="">
        </div>

      <div class="container col-lg-5">
          <h2>Your Order</h2>
          <ul class="user-order">
            <li class="selected-rank">
              <p class="placeholder-rank-text">Select <a class="user-order-link-text" href="#rankselection">your rank</a> aswell as your <a class="user-order-link-text" href="#rankselection">desired rank</a> to get an estimate</p>
              <p>
              <span class="currentrank"></span>
              <span class="currentrank2"></span>
              <span class="show-currentlp"></span>
              <span class="additive"></span>
              <span class="desiredrank"></span>
              <span class="desiredrank2"></span>
              <span class="show-desiredlp"></span>
            </p>
            </li>
            <li class="order-price">Total Cost: <span class="user-price">130$</span> </li>
            <li class="order-price">Estimated time: <span class="user-price">2-5 days</span> </li>
            <input type="checkbox" name="priority" id="priority" value="">
            <label for="priority">I'll pay 25$ more to get prioritized</label>
          </ul>
        <button type="button" name="button" class="butttton total-price-btn ">Buy now</button>
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
