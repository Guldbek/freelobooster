
@extends('admin.layouts.app')

@section('content')
<div id="users">
  <div class="col-lg-8" class="data_table">
      <div class="row">
        <div class="col-md-2">
          <p class="bold"> User </p>
        </div>
        <div class="col-md-2">
          <p class="bold"> Booster group </p>
        </div>
        <div class="col-md-2">
          <p class="bold"> Percentage cut of job </p>
        </div>
        <div class="col-md-2">
          <p class="bold"> Booster Since </p>
        </div>
      </div>
      <div class="row">
        <div class="list-group">
          @foreach($boosters as $booster)
          <a href="#" class="list-group-item list-group-item-action  ">
            <div class="row">
              <div class="col-md-2">
              {{  $booster['user']->name }}
              </div>
              <div class="col-md-2">
              {{  $booster['boosterGroup']->name }}
              </div>
              <div class="col-md-2">
                {{ $booster->getSumOfPercentage() }}
              </div>
              <div class="col-md-2">
                {{ $booster->created_at }}
              </div>
              <div class="col-md-2">
                {{ $booster->created_at }}
              </div>
            </div>
          </a>
          @endforeach
        </div>
      </div>
  </div>
</div>
@endsection
