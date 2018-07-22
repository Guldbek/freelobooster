
@extends('admin.layouts.app')

@section('content')
<div id="users">
  <div class="col-lg-8 data_form">
    <form action="/admin/user/store" method="POST">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="userEmail">Email address</label>
        <input type="email" class="form-control" id="userEmail" name="email" placeholder="johndoe@example.com">
      </div>
      <div class="form-group">
        <label for="userFirstName">Full name</label>
        <input type="text" class="form-control" id="userFirstName" name="name" placeholder="John">
      </div>
      <div class="form-group">
        <label for="userPassword">Password</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <input type="checkbox" aria-label="Checkbox for following text input" class="showPassword" data-toggle="tooltip" data-placement="top" title="Show password">
            </div>
          </div>
          <input type="password" class="form-control" id="userPassword" name="password">
        </div>
      </div>
      <div class="form-group">
       <label for="userRole">Role</label>
         <select multiple class="form-control" name="role" id="userRole">
           <option value="4">Admin</option>
           <option value="3">Booster</option>
           <option value="2" disabled>Premium</option>
           <option value="1">User</option>
         </select>
       </div>
       <div class="form-group">
         <button type="submit" class="btn btn-outline-success">Primary</button>
       </div>
    </form>
  </div>
</div>
@endsection
