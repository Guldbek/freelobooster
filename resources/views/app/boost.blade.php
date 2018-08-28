@extends('app.layouts.app')
@section('content')
@section('bodyId',"boost")
<div class="index-bg-pic">
  <div class="container" id="rankselection">
    <div class="row header-cont">
      <div class="col-lg-4 header-text-cont">
        <h1 class="header-title">Find your price</h1>
        <p class="header-text">Lorem ipsum dolor sit amet.</p>
      </div>
      <div class="col-lg-8 header-review-cont">
        <p class="text-left review-t review-text">"LolBoosting nice review from some random customer"</p>
        <p class="text-left review-t review-text">4.5 Stars out of 5</p>
        <p class="text-left review-info">Daniel on 24-07-2003</p>
      </div>
    </div>
  </div>
  <div class="test-container" id="arrowdiv">
    <div class="row">
      <div class="col-sm-6 arrow-1"></div>
      <div class="col-sm-6 arrow-2"></div>
    </div>
  </div>
</div>
<div class="pricing-wrapper">
  <div class="container" id="pricing">
    <h1 class="text-center price-title">Find your price</h1>
    <div class="row" id="ranks">
      <div class="col-lg-6">
        <h2 class="selectrank-title">Select your rank</h2>
        <div class="row rank-row">
          <div class="col-lg-12">
            <img src="/images/ranks/bronze.png" alt="" class="rank_img">
          </div>
          <div class="col-lg-12">
            <div class="c_rank">
              <form method="post" action="price" class="" id="currentRank">
                {{csrf_field()}}
                <label for="c_tier">Current tier</label>
                <select v-model="tier" class="" name="tier" id="c_tier">
                  <optgroup label="Select your tier">
                    <option value="1">Bronze</option>
                    <option value="2">Silver</option>
                    <option value="3">Gold</option>
                    <option value="4">Platinum</option>
                    <option value="5">Diamond</option>
                    <option value="6">Master</option>
                  </optgroup>
                </select>
            </div>
            <div class="c_division">
            <label for="c_division">Current divison</label>
            <select class="" v-model="division" name="division" id="c_division">
            <optgroup label="Select your Divison">
            <option value="1">I</option>
            <option value="2">II</option>
            <option value="3">III</option>
            <option value="4">IV</option>
            <option value="5">V</option>
            </optgroup>
            </select>
            </div>
            <div class="c_lp">
            <label for="c_lp">Current amount of LP</label>
            <select class="" v-model="lp" name="lp" id="c_lp">
            <optgroup label="Your amount of LP">
            <option value="1">0-20</option>
            <option value="2">20-40</option>
            <option value="3">40-60</option>
            <option value="4">60-80</option>
            <option value="5">80-100</option>
            </optgroup>
            </select>
            </div>
            <div class="c_region">
            <label for="c_lp">Current region</label>
            <select class="" v-model="region"  name="region" id="c_region" data-live-search="true">
            <optgroup label="Select your region">
            <option value="1">EU West</option>
            <option value="2">EU Nordic/East</option>
            <option value="3">North America</option>
            <option value="4">Latin America North</option>
            <option value="5">Latin America South</option>
            <option value="6">Brazil</option>
            <option value="7">Japan</option>
            <option value="8">Russia</option>
            <option value="9">Turkey</option>
            <option value="10">Oceania</option>
            <option value="11">Republic of Korea</option>
            </optgroup>
            </select>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
      <h2 class="selectrank-title">Select your desired rank</h2>
      <div class="row rank-row">
      <div class="col-lg-12">
      <img src="/images/ranks/diamond.png" alt="" class="rank_img">
      </div>
      <div class="col-lg-12">
      <div class="c_rank">
      <label for="c_tier">Desired tier</label>
      <select class="" name="d_tier">
      <optgroup label="Select your tier">
      <option value="1">Bronze</option>
      <option value="2">Silver</option>
      <option value="3">Gold</option>
      <option value="4">Platinum</option>
      <option value="5">Diamond</option>
      <option value="6">Master</option>
      </optgroup>
      </select>
      </div>
      <div class="c_division">
      <label for="c_division">Desired divison</label>
      <select class="" v-model="test" name="d_division">
      <optgroup label="Select your Divison">
      <option value="1">I</option>
      <option value="2">II</option>
      <option value="3">III</option>
      <option value="4">IV</option>
      <option value="5">V</option>
      </optgroup>
      </select>
      <div class="checkboxes" id="checkboxes">
      <label for="fdelivery">I want 2x speed (+50% cost)
      <input type="checkbox" v-model="checked" id="fdelivery" name="EP" value="1">
      </label>
      <label for="schamp">Use a specific champion (+20% cost)
      <input type="checkbox" v-model="checked" id="schamp" name="SC" value="1">
      </label>
      </div>
      <input type="submit" class="butttton btn-left total-price-btn ">
      </form>
      </div>
      </div>
      </div>
      </div>
    </div>
  </div>
  <div class="arrow-about-cont" id="arrowdiv-reversed">
    <div class="row">
      <div class="col-sm-6 arrow-1"></div>
      <div class="col-sm-6 arrow-2"></div>
    </div>
  </div>
  <div id="order-wrap">
    <div class="container">
      <div class="row order-row">
        <div class="col-lg-12">
          <h1 class="order-title">Your order:</h1>
          <ul class="order-list">
            <li><span>Division Boost:</span> Bronze III 80-100 lp <i class="fa fa-arrow-right"></i> Silver II</li>
            <li><span>Region:</span> Brazil</li>
            <li><span>Express Delivery:</span> +50%</li>
            <li><span>Specific champion:</span> Quinn +20%</li>
            <li><span>Total cost: <span class="green">(318,5$ +70%) 450$</span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@include('app.layouts.footer')
@endsection
