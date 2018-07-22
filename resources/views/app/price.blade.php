
@extends('app.layouts.app')

@section('content')
  <style>
.form-group {

  width:50%;
}

  </style>

<div class="row section" id="headSection">
  <div class="col col-sm-12" >

    <form method="POST" action="calc/price">
      {{csrf_field()}}
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div>
</div>

@endsection
