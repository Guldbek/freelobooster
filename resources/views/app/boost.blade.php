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
              <form class="" id="currentRank">
                <label for="c_tier">Current tier</label>
                <select v-model="tier" class="" name="" id="c_tier">
                  <optgroup label="Select your tier">
                    <option value="">Bronze</option>
                    <option value="">Silver</option>
                    <option value="">Gold</option>
                    <option value="">Platinum</option>
                    <option value="">Diamond</option>
                  </optgroup>
                </select>
            </div>
            <div class="c_division">
            <label for="c_division">Current divison</label>
            <select class="" v-model="division" name="" id="c_division">
            <optgroup label="Select your Divison">
            <option value="">I</option>
            <option value="">II</option>
            <option value="">III</option>
            <option value="">IV</option>
            <option value="">V</option>
            </optgroup>
            </select>
            </div>
            <div class="c_lp">
            <label for="c_lp">Current amount of LP</label>
            <select class="" v-model="lp" name="" id="c_lp">
            <optgroup label="Your amount of LP">
            <option value="">0-20</option>
            <option value="">20-40</option>
            <option value="">40-60</option>
            <option value="">60-80</option>
            <option value="">80-100</option>
            </optgroup>
            </select>
            </div>
            <div class="c_region">
            <label for="c_lp">Current region</label>
            <select class="" v-model="region"  name="" id="c_region" data-live-search="true">
            <optgroup label="Select your region">
            <option value="">EU West</option>
            <option value="">EU Nordic/East</option>
            <option value="">North America</option>
            <option value="">Latin America North</option>
            <option value="">Latin America South</option>
            <option value="">Brazil</option>
            <option value="">Japan</option>
            <option value="">Russia</option>
            <option value="">Turkey</option>
            <option value="">Oceania</option>
            <option value="">Republic of Korea</option>
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
      <label for="c_tier">Current tier</label>
      <select class="" name="" id="c_tier">
      <optgroup label="Select your tier">
      <option value="">Bronze</option>
      <option value="">Silver</option>
      <option value="">Gold</option>
      <option value="">Platinum</option>
      <option value="">Diamond</option>
      </optgroup>
      </select>
      </div>
      <div class="c_division">
      <label for="c_division">Current divison</label>
      <select class="" v-model="test" name="" id="c_division">
      <optgroup label="Select your Divison">
      <option value="">I</option>
      <option value="">II</option>
      <option value="">III</option>
      <option value="">IV</option>
      <option value="">V</option>
      </optgroup>
      </select>
      <div class="checkboxes" id="checkboxes">
      <label for="fdelivery">I want 2x speed (+50% cost)
      <input type="checkbox" v-model="checked" id="fdelivery" name="delivery" value="1">
      </label>
      <label for="schamp">Use a specific champion (+20% cost)
      <input type="checkbox" v-model="checked" id="schamp" name="delivery" value="2">
      </label>
      </div>
      <button type="button" name="button" class="butttton btn-left total-price-btn ">Buy now</button>
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
          <ul>
            <li>Division Boost: </li>
            <li>Total cost: </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@include('app.layouts.footer')
@endsection
