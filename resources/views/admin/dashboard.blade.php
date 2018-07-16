@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <h1>Side menu</h1>

            <div class="row">
              <div class="col-lg-12">Users</div>
            </div>
            <div class="row">
              <div class="col-lg-12"><a href="admin/boosts">Boosts</a></div>
            </div>
            <div class="row">
              <div class="col-lg-12">Orders</div>
            </div>
            <div class="row">
              <div class="col-lg-12">Prices</div>
            </div>
            <div class="row">
              <div class="col-lg-12">Boosters</div>
            </div>


        </div>
        <div class="col-md-8 col-md-offset-1">
          Dashboard



        </div>
    </div>
</div>
@endsection
