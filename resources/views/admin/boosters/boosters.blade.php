
@extends('admin.layouts.app')

@section('content')
<div id="users">
  <div class="col-lg-8" class="data_table">
      @foreach($boosters as $booster)

      <div class="row">
        <div class="col-md-2">
          <a href="/admin/user/{{ $booster['user']->id }}">{{  $booster['user']->name }}</a>
        </div>
        <div class="col-md-2">
          <a href="/admin/user/{{ $booster['boosterGroup']->id }}">{{  $booster['boosterGroup']->name }}</a>
        </div>
        <div class="col-md-2">
          {{ $booster->getSumOfPercentage() }}
        </div>
        <div class="col-md-2">
          {{ $booster->created_at }}
        </div>
        <div class="col-md-2">
          <form action="/admin/user/delete/{{$booster->id}}" method="POST">
            {{ csrf_field() }}
            <button>Remove</button>
          </form>
        </div>
      </div>
      @endforeach
  </div>
</div>
@endsection
