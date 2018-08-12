@extends('admin.layouts.app')
@section('content')
<div id="users">
  <div class="col-lg-8" class="data_table">
    <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
        <th scope="col">Registerd</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
        <tr>
          <th scope="row">{{ $user->name }}</th>
          <td>{{ $user->email }}</td>
          <td>{{ $user->getUserRoleName() }}</td>
          <td>{{ $user->created_at }}</td>
          <td><a href="/admin/user/{{ $user->id }}">See profile</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>
  </div>
</div>
@endsection
