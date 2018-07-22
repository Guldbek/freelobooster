
@extends('admin.layouts.app')

@section('content')
<div id="users">
  <div class="col-lg-8" class="data_table">
    @foreach($users as $user)
          <div class="row">
            <div class="col-md-2">
              <a href="/admin/user/{{ $user->id }}">{{ $user->name }}</a>
            </div>
            <div class="col-md-2">
              {{ $user->email }}
            </div>
            <div class="col-md-2">
              {{ $user->role }}
            </div>
            <div class="col-md-2">
              {{ $user->created_at }}
            </div>
            <div class="col-md-2">
              <form action="/admin/user/delete/{{$user->id}}" method="POST">
                {{ csrf_field() }}
                <button>delete</button>
              </form>
            </div>
          </div>
    @endforeach
  </div>
</div>
@endsection
