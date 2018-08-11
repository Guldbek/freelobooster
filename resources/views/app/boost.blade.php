
@extends('app.layouts.app')

@section('content')
<div class="cont">
  <div class="col-lg-12">
    <div class="col-lg-6">
      <img src="/images/ranks/bronze.png">
      <div class="wrapper typo">My current rank is
    <div class="list">
      <span class="placeholder">Rank</span>
      <ul class="list__ul">
        <li><a href="">Bronze</a></li>
        <li><a href="">Silver</a></li>
        <li><a href="">Gold</a></li>
        <li><a href="">Platinum</a></li>
        <li><a href="">Diamond</a></li>
        <li><a href="">Master</a></li>
      </ul>

    <div class="list2">
      <span class="placeholder2">Divison</span>
      <ul class="list__ul2">
        <li><a href="">I</a></li>
        <li><a href="">II</a></li>
        <li><a href="">III</a></li>
        <li><a href="">IV</a></li>
        <li><a href="">V</a></li>
      </ul>
  </div>
  <!--
  .select
    select.typo
      - each item in ['lorem', 'ipsum', 'dolor', 'sit', 'amet']
        option.typo
  -->
</div>

    </div>
    <div class="col-lg-6"></div>
  </div>
</div>
@endsection
