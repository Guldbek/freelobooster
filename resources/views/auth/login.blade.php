@extends('app.layouts.app')
<<<<<<< HEAD

=======
>>>>>>> 0466da0eb2cec84d09c26db1f56d0614471eace1
@section('content')
<div class="container login-container">
   <div class="row">
      <div class="col-md-12">
         <div class="panel panel-default">
            <h2 class="panel-heading">Login</h2>
            <div class="panel-body">
               <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                  {{ csrf_field() }}
                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                     <label for="email" class="col-md-12 control-label">E-Mail Address</label>
                     <div class="col-md-12">
                        <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                        <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                     </div>
                  </div>
                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                     <label for="password" class="col-md-12 control-label">Password</label>
                     <div class="col-md-12">
                        <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
                        @if ($errors->has('password'))
                        <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-md-12">
                        <div class="checkbox">
                           <label>
                           <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                           </label>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">
                        Login
                        </button>
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                        Forgot Your Password?
                        </a>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
