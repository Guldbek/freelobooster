
@extends('admin.layouts.app')

@section('content')




<div id="profile">
  <div class="col-lg-8 data_table">
      <div class="d-flex justify-content-between">
        <div>
            <h2 class="inline">Profile : {{ ucfirst($data['user']->name) }}</h2>
        </div>
        <div>
          <button class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteUser" type="submit">Delete</button>
        </div>
      </div>
      <div class="row pt-3 pb-3">
        <div class="col-md-6">
            <p><b>Created at:</b> <i>{{$data['user']->created_at}}</i></p>
            <p><b>Role:</b> <i>{{$data['user']->getUserRoleName()}}</i></p>
            <p><b>Spend:</b> <i>230€</i></p>
            @if($data['user']->role == "3")
              <p><b>Percentage cut:</b> <i>{{$data['user']['booster']->getSumOfPercentage()}}</i></p>

            @endif
        </div>
        <div class="col-md-6">
            <form class="" action="/admin/user/{{$data['user']->id}}" method="POST">
              <input type="hidden" name="_method" value="PUT">
              <p>Change role</p>
              <div class="input-group">
                <select class="custom-select" name="role">
                  <option value="4">Admin</option>
                  <option value="3">Booster</option>
                  <option value="2" disabled>Premium</option>
                  <option value="1">User</option>
                </select>
                <div class="input-group-append">
                  <button class="btn btn-outline-success" type="submit">Update</button>
                </div>
              </div>
            </form>
        </div>
      </div>
      @if($data['user']->role == "3")
      <h3>Booster settings</h3>
      <div class="row mt-3 pb-5">
        <div class="col-lg-6">
          <form class="mt-2" action="/admin/booster/{{$data['user']['booster']['id']}}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            <p>Booster group</p>
            <div class="input-group">
              <select class="custom-select" name="booster_group_id">
                @foreach ($data['boostergroups'] as $group)
                  @if($group->id == $data['user']['booster']['booster_group_id'])
                    <option selected value="{{ $group->id }}">{{$group->name}}</option>
                  @else
                    <option value="{{ $group->id }}">{{$group->name}}</option>

                  @endif

                @endforeach
              </select>
              <div class="input-group-append">
                <button class="btn btn-outline-success" type="submit">Update</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-6">
          <form class="mt-2" action="/admin/booster/{{$data['user']['booster']['id']}}" method="POST">
            <p>Personal percentage cut</p>
            <input type="hidden" name="_method" value="PUT">
            <div class="input-group">
              <input type="text" class="form-control" name="payment_discount" value="" placeholder="{{$data['user']['booster']['payment_discount']}}">
              <div class="input-group-append">
                <button class="btn btn-outline-success" type="submit">Update</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      @endif
      <h3>Jobs</h3>
      <div class="list-group pt-3 pb-3">
        <a href="#" class="list-group-item list-group-item-action ">
          Job id #2131 <span class="badge badge-info">Active</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action ">
          Job id #2130 <span class="badge badge-success">Completed</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action ">
          Job id #2129 <span class="badge badge-success">Completed</span>
        </a>
      </div>
      <h3>Orders</h3>
      <div id="accordion" class="pt-3 pb-3">
        <div class="card mt-1 mb-1">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0 d-flex justify-content-between align-items-center">
              <button class="btn btn-light" data-toggle="collapse" data-target="#pending" aria-expanded="true" aria-controls="pending">
                Order id #23991 <span class="badge badge-warning">Pending</span>
              </button>
              <button class="btn">
                Go to
              </button>
            </h5>
          </div>
          <div id="pending" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              <p class="pb-2 pt"><b>Created at:</b> <i>{{$data['user']->created_at}}</i></p>
              <p><b>Rank from:</b> <i>Bronze 1</i></p>
              <p><b>Rank to:</b> <i>Bronze 2</i></p>

              <p class="mt-5"><b>Price:</b> <i>45€</i></p>

            </div>
          </div>
        </div>
        <div class="card mt-1 mb-1">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0 d-flex justify-content-between align-items-center">
              <button class="btn btn-light" data-toggle="collapse" data-target="#paid" aria-expanded="true" aria-controls="paid">
                Order id #23991 <span class="badge badge-success">Paid</span>
              </button>
              <button class="btn">
                Go to
              </button>
            </h5>
          </div>
          <div id="paid" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">

            </div>
          </div>
        </div>
        <div class="card mt-1 mb-1">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0 d-flex justify-content-between align-items-center">
              <button class="btn btn-light" data-toggle="collapse" data-target="#canceld" aria-expanded="true" aria-controls="canceld">
                Order id #23991 <span class="badge badge-danger">Canceled</span>
              </button>
              <button class="btn">
                Go to
              </button>
            </h5>
          </div>
          <div id="canceld" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">

            </div>
          </div>
        </div>
      </div>
  </div>
</div>

<div class="modal fade" id="deleteUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this user?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form action="/admin/user/delete/{{$data['user']->id}}" method="post">
          <input type="hidden" name="_method" value="delete">
          <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div


@endsection
