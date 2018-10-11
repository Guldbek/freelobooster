
@extends('admin.layouts.app')

@section('content')
<div id="users">
  <div class="col-lg-8" class="data_table">
    <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Booster group</th>
        <th scope="col">Percentage</th>
        <th scope="col">Booster since</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
      @foreach($boosters as $booster)
        <tr>
          <th scope="row">{{  $booster['user']->name }}</th>
          <td>{{ $booster['boosterGroup']->name }}</td>
          <td>{{ $booster->getSumOfPercentage() }}</td>
          <td>{{ $booster->created_at }}</td>
          <td><a href="/admin/user/{{ $booster['user']->id }}">See profile</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>
  </div>
</div>
@endsection
