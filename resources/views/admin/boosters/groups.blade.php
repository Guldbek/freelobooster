
@extends('admin.layouts.app')

@section('content')
<div id="users">
  <div class="col-lg-8" class="data_table">
    <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Percentage</th>
        <th scope="col">Rank from</th>
        <th scope="col">Rank to</th>
        <th scope="col">Created at</th>
      </tr>
    </thead>
    <tbody>
      @foreach($booster_groups as $booster_group)
        <th scope="row">{{  $booster_group->name }}</th>
        <td>{{ $booster_group->payment_percentage }}</td>
        <td><a href="/admin/rank/{{$booster_group->id}}" >{{ $booster_group['rankFrom']->rank }}</a></td>
        <td><a href="/admin/rank/{{$booster_group->id}}" >{{ $booster_group['rankTo']->rank }}</a></td>
        <td>{{ $booster_group->created_at }}</td>
        <td><a href="/admin/booster/group/{{$booster_group->id}}">See group</a></td>
      @endforeach
    </tbody>
  </table>
  </div>
</div>
@endsection
